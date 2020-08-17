<?php

class Genre_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function getGenreList()
	{
		$sth = $this->db->prepare('SELECT * FROM genre order by genre_name asc');
		$sth->execute();
		return $sth->fetchAll();
	} 
}