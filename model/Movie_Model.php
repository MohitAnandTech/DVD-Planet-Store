<?php

class Movie_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	
	
	public function addMovie( $array )
	{
		  $title =  $array['title'];
		  $tagline = $array['tagline'];		  
		  $plot =  $array['plot'];
		  $directorId = $array['directorId'];
		  $studio = $array['studio'];		  
		  $genere =  $array['genere'];
		  $classification = $array['classification'];		  
		  $rental_period =  $array['rental_period'];
		  $year = $array['year'];		  
		  $DVDrentalprice =  $array['rentalprice'];
		  $dvd_purchase_price = $array['dvd_purchase_price'];		  
		  $num_dvd =  $array['num_dvd'];
		  $bluRay_rental_price = $array['bluRay_rental_price'];
		  $bluRay_purchase_price =  $array['bluRay_purchase_price'];
		  $numBluRay = $array['numBluRay'];
 
		  $sth = $this->db->prepare("insert into movie 
		  					set 
								title = '$title', 
								tagline ='$tagline', 
								plot = '$plot', 
								thumbpath = null, 
								director_id = $directorId , 
								studio_id = '$studio', 
								genre_id = '$genere', 
								classification = '$classification' , 
								rental_period = '$rental_period', 
								year = '$year',
								DVD_rental_price = '$DVDrentalprice', 
								DVD_purchase_price = '$dvd_purchase_price',
								numDVD = '$num_dvd', 
								numDVDout = 0, 
								BluRay_rental_price = '$bluRay_rental_price', 
								BluRay_purchase_price = '$bluRay_purchase_price', 
								numBluRay = $numBluRay, 
								numBluRayOut = 0 
							");
		 if($sth->execute()){			 
		 	 return true;	  
		 } else {			
			return false;			
		 }			 
	}
	
	public function updateMovie( $array )
	{
		  $id =  $array['id'];
		  $title =  $array['title'];
		  $tagline = $array['tagline'];		  
		  $plot =  $array['plot'];
		  $directorId = $array['directorId'];
		  $studio = $array['studio'];		  
		  $genere =  $array['genere'];
		  $classification = $array['classification'];		  
		  $rental_period =  $array['rental_period'];
		  $year = $array['year'];		  
		  $DVDrentalprice =  $array['rentalprice'];
		  $dvd_purchase_price = $array['dvd_purchase_price'];		  
		  $num_dvd =  $array['num_dvd'];
		  $bluRay_rental_price = $array['bluRay_rental_price'];
		  $bluRay_purchase_price =  $array['bluRay_purchase_price'];
		  $numBluRay = $array['numBluRay'];

		  
 
		  $sth = $this->db->prepare("update movie 
		  					set 
								title = '$title', 
								tagline ='$tagline', 
								plot = '$plot',								
								director_id = $directorId , 
								studio_id = '$studio', 
								genre_id = '$genere', 
								classification = '$classification' , 
								rental_period = '$rental_period', 
								year = '$year',
								DVD_rental_price = '$DVDrentalprice', 
								DVD_purchase_price = '$dvd_purchase_price',
								numDVD = '$num_dvd', 
								numDVDout = 0, 
								BluRay_rental_price = '$bluRay_rental_price', 
								BluRay_purchase_price = '$bluRay_purchase_price', 
								numBluRay = $numBluRay, 
								numBluRayOut = 0 
							where
								movie_id = $id
							");
		 if($sth->execute()){			 
		 	 return true;	  
		 } else {			
			return false;			
		 }
		
	}
    
    public function getMovieList()
	{
		$sth = $this->db->prepare('SELECT * FROM movie');
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function getMovieListById( $id )
	{
	 	$sth = $this->db->prepare('SELECT * FROM movie where movie_id = '.$id);
		$sth->execute();
		return $sth->fetchAll();
	}
}