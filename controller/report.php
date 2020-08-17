<?php
error_reporting(E_ERROR);
include_once"../libs/Model.php";
include_once('../config/database.php');
include_once("../libs/Database.php");
include_once("../model/Genre_Model.php"); 
include_once("../model/MovieZone_Model.php");
$queryString  = $_REQUEST['search'];

if( $queryString == 'show_all'){
	
	$Catogory  = $_REQUEST['genre'];
	
	$objGenere =  new Genre_Model();
	$resultSet = $objGenere->getGenreList();
	
	$objMzone =  new MovieZone_Model();
	$genResultSet = $objMzone->getByGenereName( $Catogory );
	
 
	$title = "All Movies";
	$check = "show_all";
	
}

 