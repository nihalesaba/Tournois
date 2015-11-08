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
