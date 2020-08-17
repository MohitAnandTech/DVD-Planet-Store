<?php


class Booking_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function getLogin( $user , $password )
	{
		$sth = $this->db->prepare("SELECT * FROM member where username = '$user' and password = '$password'");
		$sth->execute();
		return $sth->fetchAll();
	}		
}