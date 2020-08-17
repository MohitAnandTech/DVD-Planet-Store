<?php
include('header.php');
include "../controller/report.php";
 ?>

<div id = "admin_wrapper">
  <div id="admin_leftcol">
    <h2>Admin Menu </h2>
    <div class='admin_nav'>
      <ul>
        <li><a href='movieOper.php?search=show_all'>Movies</a></li>
        <li><a href='member.php?search=show_all'>Members</a></li>
        <li><a href='report.php?search=show_all'>Report</a></li>
        <li><a href='movieZone.php?search=new_release'>Exit to MovieZone</a></li>
      </ul>
    </div>
  </div>
  <table border="1" cellpadding="10" cellspacing="0">

  <form method="post">
  <select name="genre">
  	<option value=""> Selcet </option>      
   <?php foreach( $resultSet as $value):   
   		if( $_REQUEST['genre'] == $value['genre_name'] ){			
			$selected = "selected=selected";			
		} else {
			 $selected = "";
		}  
   ?>   
   	<option <?php echo $selected ?> value="<?php echo  $value['genre_name'] ?>"> <?php echo $value['genre_name'] ?> </option>  
  	<?php endforeach; ?>   
  </select>  
<input type="submit" name="submit" value="show_all"/>
<br>
<br>
 </form> 
    
    <tr>
      <th> Poster </th>
      <th> Genre </th>
      <th> DVD InStock </th>
      <th> BluRay InStock</th>
      <th> DVD Rental Price</th>
      <th> BluRay Rental Price</th> 
    </tr>
    <?php 
	foreach($genResultSet as $key => $value) :?>
    <tr>
      <td><img src="<?php echo '../images/'.$value['thumbpath']?>" width="102" height="150" /></td>
      <td><?php echo  $value['genre']  ?></td>
      <td><?php echo ($value['numDVD'] -$value['numDVDOut']  )?></td>
      <td><?php echo ($value['numBluRay'] - $value['numBluRayOut'] )?></td>
      <td><?php echo  $value['DVD_rental_price']  ?></td>
      <td><?php echo  $value['BluRay_rental_price']  ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
  <footer> Copyright &copy; Mohit Anand 2019 <br>
         <a href="http://infotech.scu.edu.au/~manand10">Link to the InfoTech site </footer>
</div>
