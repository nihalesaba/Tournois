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
	
	public function selectByUser($User){	
		$year = date("Y");
		$birth = $User["UserBirthDate"];
		$birth = $birth->y;
		$cat = [];
		$cat = ["Famille", "Elites"];
		$type = ["Mixte", $User["Titre"]];
		
		
		if($birth < $year-10 && $birth < $year-9){
			$cat = ["Famille", "Pré-minimes"];
			
		}elseif($birth > $year-12 && $birth < $year-11){
			$cat = ["Famille", "Minimes"];
			
		}elseif($birth > $year-14 && $birth < $year-13){
			$cat = ["Famille", "Cadets"];
			
		}elseif($birth > $year-16 && $birth < $year-15){
			$cat = ["Famille", "Scolaires"];
			
		}elseif($birth > $year-19 && $birth < $year-17){
			$cat = ["Famille", "Juniors"];
			
		}elseif($birth > $year-20 && $birth < $year-40){
			$cat = ["Famille", "Seniors"];
			
		}elseif($birth > $year-40){
			$cat = ["Famille", "Elites"];
		}
		
		
		$data = $this->_db->select($this->name,"*",array("OR"=>array("TournamentCategory"=>$cat, "TournamentType"=>$type))); 
		return $data;

	}
	
	
	public function CheckExistance($where){
		$data=$this->_db->select($this->name,"*",array("AND"=>$where));
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

