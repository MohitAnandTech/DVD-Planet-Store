<?php

error_reporting(E_ERROR);
include_once"../libs/Model.php";
include_once('../config/database.php');
include_once("../libs/Database.php");
include_once("../model/Member_Model.php"); //movie tavle insertion

$queryString  = $_REQUEST['search'];
 
if( $queryString == 'show_all') {

	$objMember =  new Member_Model();
	$memberResultSet = $objMember->getMemberList();
	

 
 	
} else if( $queryString == 'getMemberData') { 

 	$id = $_REQUEST['edit'];  
		 
	$objMovie =  new Member_Model();
	
	$resultSet = $objMovie->getMemberById( $id );
    
    } else if( $queryString == 'addMember') {
		
	 $surname = addslashes($_POST['surname']);
	 $othername = addslashes($_POST['othername']);
	 $conatctmethod = addslashes($_POST['conatctmethod']);
	 $email = addslashes($_POST['email']);
	 $mobile = addslashes($_POST['mobile']);
	 $landline = addslashes($_POST['landline']);
	 $street = addslashes($_POST['street']);
	 $suburb = addslashes($_POST['suburb']);
	 $postcode = addslashes($_POST['postcode']);
	 $username = addslashes($_POST['username']);
	 $password = addslashes($_POST['password']); 
	 $occupation = addslashes($_POST['occupation']);
	 $join_date = addslashes($_POST['join_date']);
	 $array = array(
	 	 'surname'	=> $surname,
		 'othername'	=> $othername,	 
		 'conatctmethod'	=> $conatctmethod,
		 'email'	=> $email,
		 'mobile'	=> $mobile,
		 'landline'	=> $landline,
		 'street'=> $street,
		 'suburb'	=> $suburb,
		 'postcode'	=> $postcode,
		 'username'	=> $username,	 
		 'password'	=> $password,
		 'occupation'	=> $occupation,	 
		 'join_date'	=> $join_date		 
	 );
	 
	  $objMovie =  new Member_Model();
	  $resultSet = $objMovie->addMemeber( $array );
	
} else if( $queryString == 'updateMember') {
	 
	 $id = addslashes ( $_REQUEST['edit'] );
	 $surname = addslashes($_POST['surname']);
	 $othername = addslashes($_POST['othername']);
	 $conatctmethod = addslashes($_POST['conatctmethod']);
	 $email = addslashes($_POST['email']);
	 $mobile = addslashes($_POST['mobile']);
	 $landline = addslashes($_POST['landline']);
	 $street = addslashes($_POST['street']);
	 $suburb = addslashes($_POST['suburb']);
	 $postcode = addslashes($_POST['postcode']);
	 $username = addslashes($_POST['username']);
	 $password = addslashes($_POST['password']); 
	 $occupation = addslashes($_POST['occupation']);
	 $join_date = addslashes($_POST['join_date']);
	 
	 $array = array(
		 'memberID'	=> $id,
	 	 'surname'	=> $surname,
		 'othername'	=> $othername,	 
		 'conatctmethod'	=> $conatctmethod,
		 'email'	=> $email,
		 'mobile'	=> $mobile,
		 'landline'	=> $landline,
		 'street'=> $street,
		 'suburb'	=> $suburb,
		 'postcode'	=> $postcode,
		 'username'	=> $username,	 
		 'password'	=> $password,
		 'occupation'	=> $occupation,	 
		 'join_date'	=> $join_date		 
	 );
	 
	$objMovie =  new Member_Model();
	
	$resultSet = $objMovie->updateMemeber( $array );
	
	header('location:member.php?search=show_all');
	
} else if( $queryString == 'delMem') {
	
	$id = addslashes ( $_REQUEST['edit'] );
	
	 $array = array(
		 'memberID'	=> $id	 	 	 
	 );
	
	$objMovie =  new Member_Model();
	
	$resultSet = $objMovie->delMemeber( $array );
	
	if( $resultSet ){
		
		header('location:member.php?search=show_all');
		
	}	
	exit;	
 }
