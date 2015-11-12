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
	 **profile
	 **/
	 public function profil(){
		self::checksession();
		$User = $this->loadModel('user_model');
		if (!empty($_POST)) {
				$_SESSION["user"]["UserFirstName"] = $_POST["UserFirstName"];
				$User->update($_POST,$_SESSION["user"]["UserId"]);
				url::redirect(url::gotolink("./login"));
		}
		$data["User"]= $User->show($_SESSION["user"]["UserId"]);
		$data['title'] = 'Edite profil';
		$this->view->rendertemplate('user_header',$data);
		$this->view->render('user/profil',$data);
		$this->view->rendertemplate('user_footer',$data);
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
				$data['alert'] = form::alert("danger","Ce terrain existe déjà!");
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
	public function tours(){
		self::checksession();
		
		$Tour = $this->loadModel('tour_model');
		$data["Tours"]=$Tour->selectByUser($_SESSION['user']);
		$data["active"]=3;
		$data["title"] = 'Choisir un Tournoi';
		
		$this->view->rendertemplate('user_header',$data);
		$this->view->render('user/tourschoose',$data);
		$this->view->rendertemplate('user_footer',$data);	
	
	}
	
	// display the potential partner for the user
	public function teams($tourid){
		self::checksession();
		
		$Teams = $this->loadModel('team_model');
		
		$data["active"]=3;
		$data["title"] = 'Choisir une équipe';
		$data["Teams"] = $Teams->selectByTournament($tourid);
		$data["Tourid"] = $tourid;
		
		$this->view->rendertemplate('user_header',$data);
		$this->view->render('user/teams',$data);
		$this->view->rendertemplate('user_footer',$data);

	}
	
	public function createteam($tourid){
		self::checksession();
		$data["active"]=3;
		$data["title"] = 'Créer une équipe';
		
		if (!empty($_POST)) {
			$Team = $this->loadModel('team_model');
			                                           
			$_POST["User1"] = $_SESSION['user']["UserId"];
			$_POST["Tournament"] = $tourid;
			
			$Team->insert($_POST);
			$_SESSION['alert']= form::alert("success","non");
			url::redirect('./..');
		}
		
		$this->view->rendertemplate('user_header',$data);
		$this->view->render('user/createteams',$data);
		$this->view->rendertemplate('user_footer',$data);
	}
	
	public function jointeam($teamid){
		self::checksession();
		$data["active"]=3;
		$data["title"] = 'Rejoindre une équipe';
		
		if (!empty($_POST)) {
			$Team = $this->loadModel('team_model');
			$team1 = $Team->selectById($teamid);
			if($team1["User1"]!= $_SESSION['user']["UserId"]){
			                                           
				$_POST["User2"] = $_SESSION['user']["UserId"];
				$_POST["Confirmed"] = 1;

				$Team->update($_POST,$teamid);
				$_SESSION['alert']= form::alert("success","non");
				//url::redirect('./user');
			}
		}
		
		$this->view->rendertemplate('user_header',$data);
		$this->view->render('user/jointeam',$data);
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
