<?php
error_reporting(E_ERROR);
include"../libs/Model.php";
include('../config/database.php');
include("../libs/Database.php");
include("../model/MovieBank_Model.php");
include("../model/Actors_Model.php");
include ("../model/Director_Model.php"); 

$queryString  = $_GET['q'];

if( $queryString =='getActorsList'){
	
	$actorName = $_GET['actorName'];	
	$objBank =  new Actors_Model();
	$resultSet = $objBank->getActorList();
	$objMovBank =  new MovieBank_Model();	
	$movieByStar = $objMovBank->getMovieByActor( $actorName );
	
}
 