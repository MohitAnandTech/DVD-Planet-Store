<?php

$queryString  = $_REQUEST['search'];

if( $queryString == 'join'){
	
	echo $surname = $_REQUEST['surname']; echo "<br>";
	echo $othername = $_REQUEST['othername']; echo "<br>";
	echo $othername = $_REQUEST['contactmethod']; echo "<br>";
	echo $mobilenum = $_REQUEST['mobilenum']; echo "<br>";
	echo $phonenum = $_REQUEST['phonenum']; echo "<br>";
	echo $phonenum = $_REQUEST['email']; echo "<br>";
	echo $occupation = $_REQUEST['occupation']; echo "<br>";
	echo $magazine = $_REQUEST['magazine']; echo "<br>";
	echo $streetaddr = $_REQUEST['streetaddr']; echo "<br>";
	echo $suburbstate = $_REQUEST['suburbstate']; echo "<br>";
	echo $postcode = $_REQUEST['postcode']; echo "<br>";
	echo $joinusername = $_REQUEST['joinusername']; echo "<br>";
	echo $userpass = $_REQUEST['userpass']; echo "<br>";
	echo $verifypass = $_REQUEST['verifypass']; echo "<br>";
	
	
	 exit; 
 }
 ?>
 <script>
$(document).ready(function(){
$('input[name=com_method]').click(function() {
   if($('#com-email').is(':checked')) { $("#email").attr("required","required"); }else{ $("#email").removeAttr( "required" );}
   if($('#com-mobile').is(':checked')) { $("#mobile").attr("required","required"); }else{ $("#mobile").removeAttr( "required" );}
      if($('#com-landline').is(':checked')) { $("landline").attr("required","required"); }else{ $("#landline").removeAttr( "required" );}
});


function ISODateString(d){
    function pad(n){return n<10 ? '0'+n : n}
    return d.getUTCFullYear()+'-'
    + pad(d.getUTCMonth()+1)+'-'
    + pad(d.getUTCDate())+'T'
    + pad(d.getUTCHours())+':'
    + pad(d.getUTCMinutes())+':'
    + pad(d.getUTCSeconds())+'Z'
}



var d = new Date();

var new_date=ISODateString(d);
$("#join-date").attr("value",new_date);




});


function emailfun()
{
	$("#email").show();
	$("#mobile").hide();
	$("#landline").hide();
}

function mobilefun()
{
	$("#email").hide();
	$("#mobile").show();
	$("#landline").hide();
}

function telfun()
{
	$("#email").hide();
	$("#mobile").hide();
	$("#landline").show();
}
</script>
 