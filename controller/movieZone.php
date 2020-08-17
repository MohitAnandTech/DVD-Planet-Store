<?php
error_reporting(E_ERROR);
include_once"../libs/Model.php";
include_once('../config/database.php');
include_once("../libs/Database.php");
include_once("../model/MovieZone_Model.php");
include_once ("../model/Actors_Model.php");
include_once ("../model/Director_Model.php");
include_once ("../model/Genre_Model.php");
include_once ("../model/Classification_Model.php");

$queryString  = $_GET['search'];

if( $queryString == 'show_all'){
	
	$objMovie =  new MovieZone_Model();
	$resultSet = $objMovie->movieList();
	$title = "All Movies";
	$check = "show_all";
	
}

else if( $queryString == 'new_release'){	
	$objMovie =  new MovieZone_Model();
	$resultSet = $objMovie->movieListLatest(); 
	
	$title = "New Release";	
	$check = "new_release";
}

else if( $queryString == 'getActorsList'){	
	$objMovie =  new MovieZone_Model();
	$resultSet = $objMovie->movieListLatest();	
}

else if( $queryString == 'actor'){
	
	$name = $_GET['name'];	
	
	 $objActList = new Actors_Model();
	 $actorList = $objActList->getActorList(); 
	
	 $objMovie =  new MovieZone_Model();
	 $resultSet = $objMovie->movieByActorName( $name );
	 $title = "Search Actors";	
	 $check = "actor";
}


else if( $queryString == 'genre'){
	
	$name = $_GET['name'];	
	
	$objGenList = new Genre_Model();
	$geneeList = $objGenList->getGenreList(); 
	
	$objMovie =  new MovieZone_Model();
	$resultSet = $objMovie->getByGenereName( $name );
	
	$title = "Search Genre";	
	$check = "genre";
    
}
else if( $queryString == 'director'){
	
	$name = $_GET['name'];	
	
	 $objDirList = new Director_Model();
	 $directorList = $objDirList->getDirectorList(); 
	
	 $objMovie =  new MovieZone_Model();
	 $resultSet = $objMovie->getByDirectorName( $name );
	 $title = "Search Director";	
	 $check = "director";

}else if( $queryString == 'classification'){
	
	$name = $_GET['name'];	
	
	 $objClassList = new Classification_Model();
	 $classificationList = $objClassList->getClassificationList(); 
	
	 $objMovie =  new MovieZone_Model();
	 $resultSet = $objMovie->getByClassificationName( $name );
	 $title = "Search Classification";	
	 $check = "classification";

} else {
	
	
	
	
	
}