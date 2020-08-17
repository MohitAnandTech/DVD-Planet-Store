<?php

class MovieBank_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function getMovieByActor( $name )
	{		
		$sth = $this->db->prepare("SELECT * FROM movie_detail_view where star1 = '$name' ||  star2 = '$name' ||  star3 = '$name'");
		$sth->execute();
		return $sth->fetchAll();
	}
    public function getMovieGenre( $genre )
	{
		
		
		$sth = $this->db->prepare("SELECT * FROM movie_detail_view where genre = '$genre'");
		$sth->execute();
		return $sth->fetchAll();
	}
	public function getMovieDirector( $directorName )
	{
		$sth = $this->db->prepare("SELECT * FROM movie_detail_view where director = '$directorName'");
		$sth->execute();
		return $sth->fetchAll();
	}	
	
}