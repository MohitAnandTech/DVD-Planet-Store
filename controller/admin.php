<?php 
error_reporting(E_ERROR);
include_once"../libs/Model.php";
include_once('../config/database.php');
include_once("../libs/Database.php");

$queryString = $_REQUEST['q'];

if( $queryString == 'admin'){ 
	
	header ("location:../view/movieOper.php?search=show_all"); 
	 
 }