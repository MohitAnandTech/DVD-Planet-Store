<?php

class Studio_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function getStudioList()
	{
		$sth = $this->db->prepare('SELECT * FROM studio');
		$sth->execute();
		return $sth->fetchAll();
	} 
}