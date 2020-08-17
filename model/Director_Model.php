<?php

class Director_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function getDirectorList()
	{
		$sth = $this->db->prepare('SELECT * FROM director');
		$sth->execute();
		return $sth->fetchAll();
	} 
}