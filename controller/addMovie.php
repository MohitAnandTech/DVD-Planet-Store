<?php

error_reporting(E_ERROR);
include_once"../libs/Model.php";
include_once('../config/database.php');
include_once("../libs/Database.php");
include_once("../model/Movie_Model.php"); //movie tavle insertion
include_once ("../model/Director_Model.php");
include_once ("../model/Studio_Model.php");
include_once ("../model/Genre_Model.php");

$queryString  = $_REQUEST['search'];

if( $queryString == 'form') {
	
	$objDirector =  new Director_Model();
	$dirResultSet = $objDirector->getDirectorList();
	 
	$objStudio =  new Studio_Model();
	$studioResultSet = $objStudio->getStudioList();
	
	$objGenere =  new Genre_Model();
	$GenereResultSet = $objGenere->getGenreList();
	
} else if( $queryString == 'addMovie') {
	
	 $title = addslashes($_POST['title']);
	 $tagline = addslashes($_POST['tagline']);
	 $plot = addslashes($_POST['plot']);
	 $directorId = addslashes($_POST['directorId']);
	 $studio = addslashes($_POST['studio']);
	 $genere = addslashes($_POST['genere']);
	 $classification = addslashes($_POST['classification']);
	 $rental_period = addslashes($_POST['rental_period']);
	 $year = addslashes($_POST['year']);
	 $rentalprice = addslashes($_POST['rentalprice']);
	 $dvd_purchase_price = addslashes($_POST['dvd_purchase_price']);
	 $num_dvd = addslashes($_POST['num_dvd']);
	 $bluRay_rental_price = addslashes($_POST['bluRay_rental_price']);
	 $bluRay_purchase_price = addslashes($_POST['bluRay_purchase_price']);
	 $numBluRay = addslashes($_POST['numBluRay']);
	 
	 $array = array(
	 	 'title'	=> $title,
		 'tagline'	=> $tagline,	 
		 'plot'	=> $plot,
		 'directorId'	=> $directorId,
		 'studio'	=> $studio,
		 'genere'	=> $genere,
		 'classification'	=> $classification,
		 'rental_period'	=> $rental_period,
		 'year'	=> $year,
		 'rentalprice'	=> $rentalprice,	 
		 'dvd_purchase_price'	=> $dvd_purchase_price,
		 'num_dvd'	=> $num_dvd,	 
		 'bluRay_rental_price'	=> $bluRay_rental_price,
		 'bluRay_purchase_price'	=> $bluRay_purchase_price,
		 'numBluRay'	=> $numBluRay 	 
	 );
	 
	  $objMovie =  new Movie_Model();
	  $resultSet = $objMovie->addMovie( $array ); 
	 
	exit;
 	
} else if( $queryString == 'getMovieData') { 

 	$id = $_REQUEST['edit'];  
	  
	$objDirector =  new Director_Model();
	$dirResultSet = $objDirector->getDirectorList();
	
	$objStudio =  new Studio_Model();
	$studioResultSet = $objStudio->getStudioList();
	
	$objGenere =  new Genre_Model();
	$GenereResultSet = $objGenere->getGenreList();
	
	$objMovie =  new Movie_Model();
	$resultSet = $objMovie->getMovieListById( $id );
	
} else if( $queryString == 'updateMovie') { 
	
	$id = $_REQUEST['edit'];
	 $title = addslashes($_POST['title']);
	 $tagline = addslashes($_POST['tagline']);
	 $plot = addslashes($_POST['plot']);
	 $directorId = addslashes($_POST['directorId']);
	 $studio = addslashes($_POST['studio']);
	 $genere = addslashes($_POST['genere']);
	 $classification = addslashes($_POST['classification']);
	 $rental_period = addslashes($_POST['rental_period']);
	 $year = addslashes($_POST['year']);
	 $rentalprice = addslashes($_POST['rentalprice']);
	 $dvd_purchase_price = addslashes($_POST['dvd_purchase_price']);
	 $num_dvd = addslashes($_POST['num_dvd']);
	 $bluRay_rental_price = addslashes($_POST['bluRay_rental_price']);
	 $bluRay_purchase_price = addslashes($_POST['bluRay_purchase_price']);
	 $numBluRay = addslashes($_POST['numBluRay']);
	 
	 $array = array(
	 	 'id'	=> $id,
	 	 'title'	=> $title,
		 'tagline'	=> $tagline,	 
		 'plot'	=> $plot,
		 'directorId'	=> $directorId,
		 'studio'	=> $studio,
		 'genere'	=> $genere,
		 'classification'	=> $classification,
		 'rental_period'	=> $rental_period,
		 'year'	=> $year,
		 'rentalprice'	=> $rentalprice,	 
		 'dvd_purchase_price'	=> $dvd_purchase_price,
		 'num_dvd'	=> $num_dvd,	 
		 'bluRay_rental_price'	=> $bluRay_rental_price,
		 'bluRay_purchase_price'	=> $bluRay_purchase_price,
		 'numBluRay'	=> $numBluRay 	 
	 );
	 
	  $objMovie =  new Movie_Model();
	  $resultSet = $objMovie->updateMovie( $array );
	  header("location:../view/movieOper.php?search=show_all");
	 
	  
}
