<?php

class Classification_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function getClassificationList()
	{
		$sth = $this->db->prepare('SELECT * FROM classification');
		$sth->execute();
		return $sth->fetchAll();
	} 
}