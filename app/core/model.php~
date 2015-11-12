<?php 

require_once 'medoo.php';

class Model {

	protected $_db;
	
	public function __construct(){
		//connect to PDO here.
		$database = new medoo([
		    'database_type' => 'mysql',
		    'database_name' => 'tennis_tournament',//
		    'server' =>'localhost:8889',
		    //'server' => 'localhost',
		    'username' => 'root',
		    //'password' => '',
		    'password' =>'root', //Sous MAMP(Mac) le mot de passe est root
		    'charset' => 'utf8'
		]);


		$this->_db = $database;
		

	}
}
