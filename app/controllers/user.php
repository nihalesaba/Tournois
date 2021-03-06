<?php

class User extends Controller {

	public function __construct(){
		parent::__construct();
	}	

	public function index(){

		self::checksession();
		$data['title'] = 'Interface staff';
		$this->view->rendertemplate('user_header',$data);
		$this->view->render('user/index',$data);
		$this->view->rendertemplate('user_footer',$data);	
	}
	/**
	 ** Users Functions
	 **/
	
	public function viewuser(){


	}

	public function deleteuser(){

	}


	public function updateuser(){

	}
	/**
	 ** courts Functions
	 **/
	public function courts(){
		self::checksession();
		$Court = $this->loadModel('court_model');
		//Select only courts of this user
		$data["Courts"]=$Court->selectByUser($_SESSION['user']["UserId"]);
		$data["active"]=2;
		$data['title'] = 'Gestion des terrains';
		$this->view->rendertemplate('user_header',$data);
		$this->view->render('user/courts',$data);
		$this->view->rendertemplate('user_footer',$data);	
	}
	public function addcourt(){

		self::checksession();
		if (!empty($_POST)) {
			$Court = $this->loadModel('court_model');

			$_POST["CourtOwner"]=$_SESSION['user']["UserId"];
			$Exist=$_POST;
			unset($Exist["CourtAvailSun"]);
			unset($Exist["CourtAvailSat"]);
			$Exist = $Court->CheckExistance($Exist);

			if(!empty($Exist))
			{
				$data['alert']= form::alert("danger","Ce terrain exist déjà!");
			}
			else
			{
				$Court->insert($_POST);
				$_SESSION['alert']= form::alert("success","Le terrain a bien été ajouté!");
				url::redirect('./');
			}
		}
		
		$data["active"]=2;
		$data['title'] = 'Ajouter mon terrain';
		$this->view->rendertemplate('user_header',$data);
		$this->view->render('user/courtadd',$data);
		$this->view->rendertemplate('user_footer',$data);

	
	}

	public function viewcourt(){


	}

	public function deletecourt($id){
		self::checksession();
		$data= array("CourtId"=>$id);
		$Court = $this->loadModel('court_model');
		$Court->delete($data);
		url::redirect('../');
	}

	public function editcourt($id){
		self::checksession();
		$Court = $this->loadModel('court_model');
		if (!empty($_POST)) {
			$Court->update($_POST,$id);
			url::redirect('../');	
		}
		$data["Court"]= $Court->show($id);
		$data["active"]=2;
		$data['title'] = 'Editer un terrain';
		$this->view->rendertemplate('user_header',$data);
		$this->view->render('user/courtedit',$data);
		$this->view->rendertemplate('user_footer',$data);

	}

	public function updatecourt(){

	}

	/**
	 ** tournaments Functions
	 **/
	public function listtour(){
		self::checksession();
		
		$Tour = $this->loadModel('tour_model');
		$data["Tours"]=$Tour->selectByUser($_SESSION['user']);
		$data["active"]=3;
		$data['title'] = 'Choisir un Tournoi';
		$this->view->rendertemplate('user_header',$data);
		$this->view->render('user/tourschoose',$data);
		$this->view->rendertemplate('user_footer',$data);	
	
	}
	
	// display the potential partner for the user
	public function choosepartner($tourid){
		self::checksession();
		$User = $this->loadModel('user_model');
		$data["Users"]=$User->selectPartner();
		$data["active"]=2;
		$data['title'] = 'Voici la liste de vos partenaires potentiels';
		
		
		$this->view->rendertemplate('user_header',$data);
		$this->view->render('user/partnerchoose',$data);
		$this->view->rendertemplate('user_footer',$data);	
	}
	
	public function send_invitation(){

	
	}
	public function accept_invitation(){

	
	}
	public function decline_invitation(){

	
	}

	public function checksession()
	{
		if (isset($_SESSION["connect"])&& isset($_SESSION['user']["RoleId"]))
		// checking if the variable connect is set as true and the user is allowed in this section
		{
			if(Session::get('connect') == false && $_SESSION['user']["RoleId"]==2)
				
					{
							url::redirect(url::gotolink("./login"));
					}
		
		}
		else
		
			url::redirect(url::gotolink("./login"));
	}

}
