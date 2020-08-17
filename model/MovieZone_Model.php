<?php

class MovieZone_Model extends Model {

	public function __construct() {
		parent::__construct();
	} 

	public function movieList()
	{
		$sth = $this->db->prepare('SELECT * FROM movie_detail_view');
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function movieByActorName( $name )
	{	
		$sth = $this->db->prepare("SELECT * FROM movie_detail_view where star1 = '$name' or star2 = '$name' or star3 = '$name'");
		$sth->execute();
		return $sth->fetchAll();
	}
	
    public function movieListLatest()
	{
		$sth = $this->db->prepare("SELECT * FROM movie_detail_view where year >= '2014'");
		$sth->execute();
		return $sth->fetchAll();
	}
    
    public function getByGenereName( $name )
	{	
		$sth = $this->db->prepare("SELECT * FROM movie_detail_view where genre = '$name'");
		$sth->execute();
		return $sth->fetchAll();
	}
    
	public function getByDirectorName( $name )
	{	
		$sth = $this->db->prepare("SELECT * FROM movie_detail_view where director = '$name'");
		$sth->execute();
		return $sth->fetchAll();
	}
    
    public function getByClassificationName( $name)
	{	
		$sth = $this->db->prepare("SELECT * FROM movie_detail_view where classification = '$name'");
		$sth->execute();
		return $sth->fetchAll();
	}
	
	
	
	
	
}