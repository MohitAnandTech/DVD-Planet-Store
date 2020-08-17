<?php

class Admin_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function UserVerification()
	{
		$sth = $this->db->prepare('SELECT * FROM users');
		$sth->execute();
		return $sth->fetchAll();
	} 
}