<?php

class Admin extends Controller {

	public function __construct(){
		parent::__construct();
	}	

	public function index(){
	
		self::checksession();
		$data['title'] = 'admin';

		$this->view->rendertemplate('admin_header',$data);
		$this->view->render('admin/index',$data);
		$this->view->rendertemplate('admin_footer',$data);	
	}
	
	/**
	 ** Staffs Functions
	 **/
	
	public function Staffs(){
		self::checksession();
		$User = $this->loadModel('user_model');
		$data["Users"]=$User->selectAllStaffs();
		$data["active"]=1;
		$data['title'] = 'Gestion des staffss';
		$this->view->rendertemplate('admin_header',$data);
		$this->view->render('admin/staffs',$data);
		$this->view->rendertemplate('admin_footer',$data);
	}
	
	public function addstaff(){
		self::checksession();
		if (!empty($_POST)) 
		{
			$_POST["RoleId"]=1;
			$User = $this->loadModel('user_model');
			$Exist= $User->CheckExistance($_POST["UserMail"]);
			
			if(! empty($Exist))
			{
				$data['alert']= form::alert("danger","Votre compte existe déjà veuillez cliquer <a href='#'>ici</a> pour restorer votre mot de passe");	
			}
			else
			{
				$User->insert($_POST);
				url::redirect('./');
			}		
		}
		
		$data["active"]=1;
		$data['title'] = 'Ajouter un nouvel utilisateur';
		$this->view->rendertemplate('admin_header',$data);
		$this->view->render('admin/staffadd',$data);
		$this->view->rendertemplate('admin_footer',$data);

	}
	
	public function deletestaff($id){
		self::checksession();

		$data= array("UserId"=>$id);
		$User = $this->loadModel('user_model');
		$User->delete($data);
		url::redirect('../');
	}
	
	/**
	 ** Users Functions
	 **/
	public function Users(){
		
	
	}
	public function adduser(){

	
	}

	public function viewuser(){


	}

	public function deleteuser(){

	}


	public function updateuser(){

	}
	/**
	 ** courts Functions
	 **/
	public function listcourt(){

	
	}
	public function addcourt(){

	
	}

	public function viewcourt(){


	}

	public function deletecourt(){

	}


	public function updatecourt(){

	}

	/**
	 ** tournaments Functions
	 **/
	public function listtour(){

	
	}
	public function addtour(){

	
	}

	public function viewtour(){


	}

	public function deletetour(){

	}


	public function updatetour(){

	}
	
	public function checksession(){
		if (isset($_SESSION["connect"])&& isset($_SESSION['user']["RoleId"])){
		// checking if the variable connect is set as true and the user is allowed in this section
			if(Session::get('connect') == false && $_SESSION['user']["RoleId"]==0)
				
					{
							url::redirect('./login');
					}
		
		}
		else
			url::redirect('./login');
	}

	
}
