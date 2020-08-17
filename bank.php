<?php
include('header.php');
include "../controller/bank.php";?>
 
<form method="get" action="bank.php">
 <input type="hidden" name="q" value="getActorsList"/>
    <select name="actorName">
    <?php  foreach($resultSet as $key => $value) :?>
    	<option value="<?php echo $value['actor_name']?>"><?php echo $value['actor_name']?></option>
    <?php endforeach; ?>
    </select>   <br>
 
    <input type="submit" value="Get Movie"/>
</form>
  <div id = "thumbnails">

<?php 
  
  if( !empty( $movieByStar  )){
  
	foreach($movieByStar as $key => $value) :?>
    
      <fieldset>
    <legend><?php echo $value['title'] ?></legend>
    <img class='moviePoster' src='<?php echo '../images/'.$value['thumbpath']?>' alt='Movie poster' height='150' width='105'> <span class='movieHeading'>Genre: </span>Thriller<br>
    <span class='movieHeading'>Tag Line: </span><?php echo $value['tagline'] ?><br>
    <span class='movieHeading'>Plot: </span><?php echo $value['plot'] ?><br>
    <span class='movieBold'>Year: </span><?php echo $value['year'] ?>
    <p><span class='movieBold'> Price: </span><?php echo $value['DVD_purchase_price'] ?></p>    
  </fieldSet>   
   <hr align="left" width="50%">  
	  <?php endforeach;  }?>
</div>      
