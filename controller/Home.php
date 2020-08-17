<?php
$queryString  = $_GET['q'];

if( $queryString == 'index'){
	
	header('location: ../view/home.php');
	 
 }