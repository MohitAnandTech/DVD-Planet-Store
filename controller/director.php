<?php
error_reporting(E_ERROR);
include"../libs/Model.php";
include('../config/database.php');
include("../libs/Database.php");
include("../model/MovieBank_Model.php"); 
include ("../model/Director_Model.php"); 

$queryString  = $_GET['q'];

if( $queryString =='getDirectorList'){
	
	$directorName = $_GET['directorName'];	
	$objDataSet=  new Director_Model();
	$resultSetBank = $objDataSet->getDirectorList();
	$objMovBank =  new MovieBank_Model();	
	$movieByStar = $objMovBank->getMovieDirector( $directorName );
	
}