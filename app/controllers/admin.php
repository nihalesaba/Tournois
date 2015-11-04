<?php

class Admin extends Controller {

	public function __construct(){
		parent::__construct();
	}	

	public function index(){

		if(Session::get('loggin') == false){
			url::redirect('./login/');
		}

		$data['title'] = 'Admin';

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/admin',$data);
		$this->view->rendertemplate('footer',$data);	
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

	
}
