<?php
error_reporting(E_ERROR);
include_once"../libs/Model.php";
include_once('../config/database.php');
include_once("../libs/Database.php");
include_once("../model/Movie_Model.php"); 

$queryString  = $_GET['search'];

if( $queryString == 'show_all'){
	
	$objMovie =  new Movie_Model();
	$resultSet = $objMovie->getMovieList();
	$title = "All Movies";
	$check = "show_all";	
} else if( $queryString == 'get_report'){
	
	$objMovie =  new Movie_Model();
		
}

 