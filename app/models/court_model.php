<?php

class Court_model extends Model {

	public function __construct(){
		parent::__construct();
		$this->table="courts";
	}	


	public function selectAll(){
		$data=$this->_db->select($this->table,"*");
		return $data;
	}
	
	
	public function CheckExistance($where){
		$data=$this->_db->select($this->table,"*",array("AND"=>$where));
		return $data;
	}
	
	
	public function selectByUser($UserId){
		$data=$this->_db->select($this->table,"*",array("CourtOwner"=>$UserId));
		return $data;
	}


	public function insert($data){
		$data=$this->_db->insert($this->table,$data);
		return $data;
	}
	
	
	public function update($data,$id){
		$data=$this->_db->update($this->table,$data,array("CourtId"=>$id));
		return $data;
	}


	public function delete($id){
		$data=$this->_db->delete($this->table,$id);
		return $data;
	}
	
	
	public function show($id){
		$data=$this->_db->select($this->table,"*",array("CourtId"=>$id));
		return $data;
	}
}

