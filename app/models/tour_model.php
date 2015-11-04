<?php

class Tour_model extends Model {

	public function __construct(){
		parent::__construct();
		$this->name="tournaments";
	}	

	public function selectAll(){


		$data=$this->_db->select($this->name,"*");

		return $data;
		
	}


	public function insert($data){

		
		$data=$this->_db->insert($this->name,$data);
		return $data;
		
	}
	public function update($data,$id){

		
		$data=$this->_db->update($this->name,$data,$id);
		return $data;
		
	}

	public function delete($id){

		
		$data=$this->_db->delete($this->name,$id);
		return $data;
		
	}
	public function show($id){

		
		$data=$this->_db->select($this->name,$id);
		return $data;
		
	}
}

