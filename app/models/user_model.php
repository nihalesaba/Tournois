<?php

class User_model extends Model {

	public function __construct(){
		parent::__construct();
		$this->table="users";
	}	
	/*For Admin*/
	public function selectAll(){


		$data=$this->_db->select($this->table,"*");

		return $data;
		
	}
	/*For staff*/
	public function selectAllUsers(){


		$data=$this->_db->select($this->table,"*",array("RoleId"=>2));

		return $data;
		
	}
	public function CheckExistance($UserMail){


		$data=$this->_db->select($this->table,"*",array("UserMail"=>$UserMail));

		return $data;
		
	}


	/*Check if the login is correct*/
	public function CheckLogin($where){

		
		$data=$this->_db->select($this->table,"*",array("AND"=>$where));
		return $data;
		
	}
	
	public function insert($data){

		
		$data=$this->_db->insert($this->table,$data);
		return $data;
		
	}
	public function update($data,$id){

		
		$data=$this->_db->update($this->table,$data,array("UserId"=>$id));
		return $data;
		
	}

	public function delete($id){

		
		$data=$this->_db->delete($this->table,$id);
		return $data;
		
	}
	public function show($id){

		
		$data=$this->_db->select($this->table,"*",array("UserId"=>$id));
		return $data;
		
	}
}

