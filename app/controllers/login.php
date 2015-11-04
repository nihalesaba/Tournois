<?php

class Login extends Controller {

	public function __construct(){
		parent::__construct();
	}	

	public function login(){

		if(Session::get('connect') == true){
			// Redirection

			if ($_SESSION['user']["RoleId"]==0)
					url::redirect('admin');
			if ($_SESSION['user']["RoleId"]==1)
					url::redirect('staff');
			if ($_SESSION['user']["RoleId"]==2)
					url::redirect('user');
		}

		if(!empty($_POST)){
			

			$User = $this->loadModel('user_model');

			$data =$User->CheckLogin($_POST);

			if(!empty($data) && sizeof($data)==1)
			{
				

				//Go to the main 	
				$data=$data[0];
				Session::set('connect',true);
				Session::set('user',$data);

				if ($data["RoleId"]==0)
					url::redirect('admin');
				if ($data["RoleId"]==1)
					{
						url::redirect('staff');
					}
				if ($data["RoleId"]==2)
					url::redirect('user');
			}
			


		}
		

		$data['title'] = 'Connexion';

		$this->view->rendertemplate('header',$data);
		$this->view->render('login',$data);
		$this->view->rendertemplate('footer',$data);	
	}


	public function logout(){

		Session::destroy();

		$_SESSION = array();
		die(var_dump($_SESSION));
		Url::redirect('./');

	}

	public function register(){


		$data['title'] = 'Inscription';

		$this->view->rendertemplate('header',$data);
		$this->view->render('login',$data);
		$this->view->rendertemplate('footer',$data);

	
	}

}
