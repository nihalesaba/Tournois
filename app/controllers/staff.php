<?php

class Staff extends Controller {

	public function __construct(){
		parent::__construct();
	}	

	public function index(){


		self::checksession();
		$data['title'] = 'Interface staff';
		$this->view->rendertemplate('staff_header',$data);
		$this->view->render('staff/index',$data);
		$this->view->rendertemplate('staff_footer',$data);	
	}
	/**
	 ** Users Functions
	 **/
	public function users(){
		self::checksession();
		$User = $this->loadModel('user_model');
		$data["Users"]=$User->selectAllUsers();
		$data["active"]=1;
		$data['title'] = 'Gestion des utilisateurs';
		$this->view->rendertemplate('staff_header',$data);
		$this->view->render('staff/users',$data);
		$this->view->rendertemplate('staff_footer',$data);	
	}

	
	public function adduser(){
		self::checksession();
		if (!empty($_POST)) {
			$User = $this->loadModel('user_model');
			$User->insert($_POST);
			url::redirect('./');
			
		}
		
		$data["active"]=1;
		$data['title'] = 'Ajouter un nouvel utilisateur';
		$this->view->rendertemplate('staff_header',$data);
		$this->view->render('staff/useradd',$data);
		$this->view->rendertemplate('staff_footer',$data);

	}

	
	

	public function edituser($id){
		self::checksession();
		$User = $this->loadModel('user_model');
		if (!empty($_POST)) {
			$User->update($_POST,$id);
			url::redirect('../');	
		}
		$data["User"]= $User->show($id);
		$data["active"]=1;
		$data['title'] = 'Editer un utilisateur';
		$this->view->rendertemplate('staff_header',$data);
		$this->view->render('staff/useredit',$data);
		$this->view->rendertemplate('staff_footer',$data);

	}

	public function deleteuser($id){
		self::checksession();

			$data= array("UserId"=>$id);
			$User = $this->loadModel('user_model');
			$User->delete($data);
			url::redirect('../');
	}


	public function showuser($id){
		/*
		self::checksession();
		$User = $this->loadModel('user_model');
		if (!empty($_POST)) {
			
			$User->update($_POST,$id);
			url::redirect('./');	
		}
		
		$data["active"]=1;
		$data['title'] = 'Editer un utilisateur';
		$this->view->rendertemplate('staff_header',$data);
		$this->view->render('staff/useradd',$data);
		$this->view->rendertemplate('staff_footer',$data);
		*/

	}
	/**
	 ** courts Functions
	 **/
	public function courts(){
		self::checksession();
		$Court = $this->loadModel('court_model');
		$data["Courts"]=$Court->selectAll();
		$data["active"]=2;
		$data['title'] = 'Gestion des terrains';
		$this->view->rendertemplate('staff_header',$data);
		$this->view->render('staff/courts',$data);
		$this->view->rendertemplate('staff_footer',$data);	

	
	}
	public function addcourt(){
		self::checksession();
		if (!empty($_POST)) {
			$Court = $this->loadModel('court_model');
			$Court->insert($_POST);
			url::redirect('./');
			
		}
		
		$data["active"]=2;
		$data['title'] = 'Ajouter un nouveau terrain';
		$this->view->rendertemplate('staff_header',$data);
		$this->view->render('staff/courtadd',$data);
		$this->view->rendertemplate('staff_footer',$data);
	
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
		$this->view->rendertemplate('staff_header',$data);
		$this->view->render('staff/courtedit',$data);
		$this->view->rendertemplate('staff_footer',$data);

	}

	/**
	 ** tournaments Functions
	 **/
	public function tours(){
		self::checksession();
		$Court = $this->loadModel('tour_model');
		$data["Tours"]=$Court->selectAll();
		$data["active"]=3;
		$data['title'] = 'Gestion des terrains';
		$this->view->rendertemplate('staff_header',$data);
		$this->view->render('staff/tours',$data);
		$this->view->rendertemplate('staff_footer',$data);	

	
	}
	public function addtour(){

	
	}

	public function viewtour(){


	}

	public function deletetour($id){
		self::checksession();
		$data= array("TournamentId"=>$id);
		$Court = $this->loadModel('tour_model');
		$Court->delete($data);
		url::redirect('../');

	}


	public function updatetour(){

	}



	public function checksession()
	{
		if (isset($_SESSION["connect"])&& isset($_SESSION['user']["RoleId"]))
		// checking if the variable connect is set as true and the user is allowed in this section
		{
			if(Session::get('connect') == false && $_SESSION['user']["RoleId"]==1)
				
					{
							url::redirect('./login');
					}
		
		}
		else
		
			url::redirect('./login');
	}
}