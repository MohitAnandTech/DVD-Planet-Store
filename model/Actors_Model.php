<?php

class Actors_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function getActorList()
	{
		$sth = $this->db->prepare('SELECT * FROM actor order by actor_name asc');
		$sth->execute();
		return $sth->fetchAll();
	}		
}