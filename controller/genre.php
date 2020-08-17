<?php
error_reporting(E_ERROR);
include"../libs/Model.php";
include('../config/database.php');
include("../libs/Database.php");
include("../model/MovieBank_Model.php"); 
include ("../model/Genre_Model.php"); 

  $queryString  = $_GET['q'];

if( $queryString =='getGenreList'){
	
	$genreName = $_GET['genreName'];	
	$objDataSet=  new Genre_Model();
	$resultSet = $objDataSet->getGenreList();
 
	$objMovBank =  new MovieBank_Model();	
	$movieByStar = $objMovBank->getMovieGenre( $genreName );
	
}