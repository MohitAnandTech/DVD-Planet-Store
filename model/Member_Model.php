<?php

class Member_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function getMemberList()
	{
		$sth = $this->db->prepare('SELECT * FROM member');
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function getMemberById( $id )
	{
	 	$sth = $this->db->prepare('SELECT * FROM member where member_id = '.$id);
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function addMemeber( $array )
	{
		
		  $surname =  $array['surname'];
		  $othername = $array['othername'];		  
		  $conatctmethod =  $array['conatctmethod'];
		  $email = $array['email'];
		  $mobile = $array['mobile'];		  
		  $landline =  $array['landline'];
		  $street = $array['street'];		  
		  $suburb =  $array['suburb'];
		  $postcode = $array['postcode'];		  
		  $username =  $array['username'];
		  $password = $array['password'];		  
		  $occupation =  $array['occupation'];
		  $join_date = $array['join_date']; 
 
		  $sth = $this->db->prepare("insert into member 
		  					set 
								surname = '$surname', 
								other_name ='$othername', 
								contact_method = '$conatctmethod', 
								email = '$email', 
								mobile = '$mobile' , 
								landline = '$landline', 
								magazine = '1', 
								street = '$street' , 
								suburb = '$suburb', 
								postcode = '$postcode',
								username = '$username', 
								password = '$password',
								occupation = '$occupation', 
								join_date = '$join_date'");
							
			 			
							
		 if( $sth->execute() ){	
		 	 return true;	  
		 } else {
			 return false;			
		 }	  
	}
	
    	
	public function updateMemeber( $array )
	{
		$memberID =  $array['memberID'];
		  $surname =  $array['surname'];
		  $othername = $array['othername'];		  
		  $conatctmethod =  $array['conatctmethod'];
		  $email = $array['email'];
		  $mobile = $array['mobile'];		  
		  $landline =  $array['landline'];
		  $street = $array['street'];		  
		  $suburb =  $array['suburb'];
		  $postcode = $array['postcode'];		  
		  $username =  $array['username'];
		  $password = $array['password'];		  
		  $occupation =  $array['occupation'];
		  $join_date = $array['join_date']; 
 
		  $sth = $this->db->prepare("update member 
		  					set 
								surname = '$surname', 
								other_name ='$othername', 
								contact_method = '$conatctmethod', 
								email = '$email', 
								mobile = '$mobile' , 
								landline = '$landline', 
								magazine = '1', 
								street = '$street' , 
								suburb = '$suburb', 
								postcode = '$postcode',
								username = '$username', 
								password = '$password',
								occupation = '$occupation', 
								join_date = '$join_date'
							where 
							
								member_id = $memberID");
							
			 			
							
		 if( $sth->execute() ){			 
		 	 return true;	  
		 } else {			
			 return false;			
		 }	  
	}
	
    public function delMemeber( $array )
	{
		 $memberID = $array['memberID'];
		 		
		 $sth = $this->db->prepare("delete from member where member_id = $memberID");			 			
							
		 if( $sth->execute() ){			 
		 	 return true;	  
		 } else {			
			 return false;			
		 }	  	
	}
    
	

	
	
}