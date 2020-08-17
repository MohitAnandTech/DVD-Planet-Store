<?php

error_reporting(E_ERROR);
include_once"../libs/Model.php";
include_once('../config/database.php');
include_once("../libs/Database.php");
include_once ("../model/Booking_Model.php");
include_once ("../model/Movie_Model.php");

$queryString = $_REQUEST['q'];

if( $queryString == 'Login'){ 

	$objBooking  =  new Booking_Model();	
	
	$userName = $_POST[ 'username'];
	$password = $_POST[ 'password'];
	
	$login  = $objBooking->getLogin( $userName , $password);
	
	 
	if( $login ){
		
		if( $login[0]['role'] == 1 ){
			
			$_SESSION['MEMBERID'] = $login[0]['member_id'];
		
			$_SESSION['SURNAME'] = $login[0]['surname'];
			
			header ("location:../view/movieOper.php?search=show_all");
			
		} else {
			
			$_SESSION['MEMBERID'] = $login[0]['member_id'];
		
			$_SESSION['SURNAME'] = $login[0]['surname'];
		
			header ("location:../view/movieZone.php?search=new_release"); 
		}
		
		 
		
		
	 }
 
 
}
else if( $queryString == 'selection'){ 


	$objMovie = new Movie_Model();
	
	foreach( $_SESSION ['ids'] as $key => $value){
		
		$filer[] =  $objMovie->getMovieListById( $value );
	 }
	 
	 

} else if ($queryString == 'logout'){
	
	session_start(); 
	
	session_destroy(); 
	header('location:home.php');
}

