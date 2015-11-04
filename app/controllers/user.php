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
	public function send_invitation(){

	
	}
	public function accept_invitation(){

	
	}
	public function decline_invitation(){

	
	}

	public function checksession()
	{
		// checking if the variable connect is set as true and the user is allowed in this section
		if(Session::get('connect') == false && $_SESSION['user']["RoleId"]==2){
			url::redirect('./login');
		}
	}

}
