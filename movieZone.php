<?php
include('header.php');
include "../controller/movieZone.php";


if( isset( $_GET['search']  )){
	 $_SESSION[ 'qString'] = $_GET['search'];
 }
 $qString =  $_SESSION[ 'qString']; 
  
  if( $_POST ){
	  
	 $_SESSION['ids'][] =  $_POST['id'];
	 // array_push( $_SESSION['ids'], $_POST['id']);
      $movieSelection = count($_SESSION ['ids']);
	 
	  if( $movieSelection == 5 ){
		  
		header('location:booking.php?q=selection');
	  }	
	 
   }
//session_destroy();

 ?>
 <link rel="stylesheet" type="text/css" href="../public/css/style2.css"> 
<div id="wrapper"> 
  <script type="text/javascript">
         document.getElementById("movieZoneNav").className = "currentpage";  
      </script>
  <div id="leftcol">
    <h2>Search Menu</h2>
    <div class="moviezone_nav">
      <ul>
        <li><a href="movieZone.php?search=show_all">Show All Movies</a></li>
        <li><a href="movieZone.php?search=new_release">New Releases</a></li>
        <li><a href="movieZone.php?search=actor">Search by Actor</a></li>
        <li><a href="movieZone.php?search=director">Search by Director</a></li>
        <li><a href="movieZone.php?search=genre">Search by Genre</a></li>
        <li><a href="movieZone.php?search=classification">Search by Classification</a></li>
      </ul>
      <h2>User Menu</h2>
      <ul>
        <li><a href="booking.php?q=Login">Log In</a></li>
        <li><a href="logoutUser.php?q=logout">Logout</a></li>
      </ul>
      <br>
      <ul>
        <li><a href="admin.php?q=admin">Admin</a></li>
      </ul>
    </div>
  </div>
  <div id="rightcol">
   
   <?php
   
   if( !empty( $_SESSION['MEMBERID'] )){		
  
   echo "  Logged in : ". $_SESSION['SURNAME'] ." <br>
	 $movieSelection Movie Selected ";
   
   }
   if( $queryString == $check ){
	      
	   if( $queryString == 'actor') { ?>         
        
        <h4><?php echo $title; ?></h4>
        
       	  <form method="get">
              <input type = 'hidden' name='search' value='actor' />
            	<select name="name">
                <option value="">Select</option>
            	<?php foreach( $actorList as $key => $value) :?>
            	 	<option value="<?php echo $value['actor_name']  ?>"> <?php echo $value['actor_name']  ?> </option>           
            	<?php endforeach; ?>                
                </select>                
                <input type="submit" value="search" />
            </form>
            
          <?php   
            
            foreach( $resultSet as $key => $value) :?>
				
				 <fieldset>
                 
				  <legend><?php echo $value['title'] ?></legend>
                  
					  <img class="moviePoster" src="<?php echo '../images/'.$value['thumbpath']?>" alt="Movie poster" height="150" width="105">
					  <span class="movieBold"><?php echo $value['rental_period'] ?> </span><br>
					  <span class="movieHeading">Genre: <?php echo $value['genre'] ?></span><br>
					  <span class="movieHeading">Year: <?php echo $value['year'] ?></span><br>
					  <span class="movieHeading">Director: <?php echo $value['director'] ?></span> <br>
					  <span class="movieHeading">Classification: </span><?php echo $value['classification'] ?><br>
					  <span class="movieBold">Starring: </span><?php echo  $value['star1']	. "," . 
																		   $value['star2']	. "," . 
																		   $value['star3']	. "," . 
																		   $value['costar1']	. "," . 
																		   $value['costar2']	. "," . 
																		   $value['costar3']	?><br>
                                                                            
					  <span class="movieHeading">Studio: </span> <?php echo $value['studio'] ?><br>
					  <span class="movieHeading">Tagline: </span><?php echo $value['tagline'] ?> <br>
					  <p> <?php echo $value['plot'] ?></p>
					  <span class="movieHeading">Rental: </span>DVD - <?php echo $value['DVD_rental_price']?> &nbsp;   BluRay - <?php echo $value['BluRay_rental_price']?><br>
					  <span class="movieHeading">Purchase: </span>DVD -  <?php echo $value['DVD_purchase_price']; ?>   &nbsp; BluRay -  <?php echo $value['BluRay_purchase_price']; ?><br>
					  <span class="movieHeading">Availability: </span> DVD - <?php echo ( $value['numDVD'] -  $value['numDVDout']); ?> &nbsp; BluRay - <?php echo ( $value['numBluRay'] -  $value['numBluRayOut']);?>
                      
			</fieldset>	
            	 
		  <?php endforeach;
		  			
		} if( $queryString == 'director') { ?>	
		
            <h4><?php echo $title; ?></h4>
            
              <form method="get">
                  <input type = 'hidden' name='search' value='director' />
                    <select name="name">
                    <option value="">Select</option>
                    <?php foreach( $directorList as $key => $value) :?>
                        <option value="<?php echo $value['director_name']  ?>"> <?php echo $value['director_name']  ?> </option>           
                    <?php endforeach; ?>                
                    </select>                
                    <input type="submit" value="search" />
                </form>
                
              <?php   
                
                foreach( $resultSet as $key => $value) :?>
                    
                     <fieldset>
                     
                      <legend><?php echo $value['title'] ?></legend>
                      
                          <img class="moviePoster" src="<?php echo '../images/'.$value['thumbpath']?>" alt="Movie poster" height="150" width="105">
                          <span class="movieBold"><?php echo $value['rental_period'] ?> </span><br>
                          <span class="movieHeading">Genre: <?php echo $value['genre'] ?></span><br>
                          <span class="movieHeading">Year: <?php echo $value['year'] ?></span><br>
                          <span class="movieHeading">Director: <?php echo $value['director'] ?></span> <br>
                          <span class="movieHeading">Classification: </span><?php echo $value['classification'] ?><br>
                          <span class="movieBold">Starring: </span><?php echo  $value['star1']	. "," . 
                                                                               $value['star2']	. "," . 
                                                                               $value['star3']	. "," . 
                                                                               $value['costar1']	. "," . 
                                                                               $value['costar2']	. "," . 
                                                                               $value['costar3']	?><br>
                                                                                
                          <span class="movieHeading">Studio: </span> <?php echo $value['studio'] ?><br>
                          <span class="movieHeading">Tagline: </span><?php echo $value['tagline'] ?> <br>
                          <p> <?php echo $value['plot'] ?></p>
                          <span class="movieHeading">Rental: </span>DVD - <?php echo $value['DVD_rental_price']?> &nbsp;   BluRay - <?php echo $value['BluRay_rental_price']?><br>
                          <span class="movieHeading">Purchase: </span>DVD -  <?php echo $value['DVD_purchase_price']; ?>   &nbsp; BluRay -  <?php echo $value['BluRay_purchase_price']; ?><br>
                          <span class="movieHeading">Availability: </span> DVD - <?php echo ( $value['numDVD'] -  $value['numDVDout']); ?> &nbsp; BluRay - <?php echo ( $value['numBluRay'] -  $value['numBluRayOut']);?>
                          
                </fieldset>	
            	 
		  <?php endforeach; 
          
        }if( $queryString == 'classification') { ?>	
		
            <h4><?php echo $title; ?></h4>
            
              <form method="get">
                  <input type = 'hidden' name='search' value='classification' />
                    <select name="name">
                    <option value="">Select</option>
                    <?php foreach( $classificationList as $key => $value) :?>
                        <option value="<?php echo $value['classification_name']  ?>"> <?php echo $value['classification_name']  ?> </option>           
                    <?php endforeach; ?>                
                    </select>                
                    <input type="submit" value="search" />
                </form>
                
              <?php   
                
                foreach( $resultSet as $key => $value) :?>
                    
                     <fieldset>
                     
                      <legend><?php echo $value['title'] ?></legend>
                      
                          <img class="moviePoster" src="<?php echo '../images/'.$value['thumbpath']?>" alt="Movie poster" height="150" width="105">
                          <span class="movieBold"><?php echo $value['rental_period'] ?> </span><br>
                          <span class="movieHeading">Genre: <?php echo $value['genre'] ?></span><br>
                          <span class="movieHeading">Year: <?php echo $value['year'] ?></span><br>
                          <span class="movieHeading">Director: <?php echo $value['director'] ?></span> <br>
                          <span class="movieHeading">Classification: </span><?php echo $value['classification'] ?><br>
                          <span class="movieBold">Starring: </span><?php echo  $value['star1']	. "," . 
                                                                               $value['star2']	. "," . 
                                                                               $value['star3']	. "," . 
                                                                               $value['costar1']	. "," . 
                                                                               $value['costar2']	. "," . 
                                                                               $value['costar3']	?><br>
                                                                                
                          <span class="movieHeading">Studio: </span> <?php echo $value['studio'] ?><br>
                          <span class="movieHeading">Tagline: </span><?php echo $value['tagline'] ?> <br>
                          <p> <?php echo $value['plot'] ?></p>
                          <span class="movieHeading">Rental: </span>DVD - <?php echo $value['DVD_rental_price']?> &nbsp;   BluRay - <?php echo $value['BluRay_rental_price']?><br>
                          <span class="movieHeading">Purchase: </span>DVD -  <?php echo $value['DVD_purchase_price']; ?>   &nbsp; BluRay -  <?php echo $value['BluRay_purchase_price']; ?><br>
                          <span class="movieHeading">Availability: </span> DVD - <?php echo ( $value['numDVD'] -  $value['numDVDout']); ?> &nbsp; BluRay - <?php echo ( $value['numBluRay'] -  $value['numBluRayOut']);?>
                          
                </fieldset>	
            	 
		  <?php endforeach; 
		  
		   } else if( $queryString == 'genre') { ?>
		   
		   
		   
		    <h4><?php echo $title; ?></h4>
            
              <form method="get">
                  <input type = 'hidden' name='search' value='genre' />
                    <select name="name">
                    <option value="">Select</option>
                    <?php foreach( $geneeList as $key => $value) :?>
                        <option value="<?php echo $value['genre_name']  ?>"> <?php echo $value['genre_name']  ?> </option>           
                    <?php endforeach; ?>                
                    </select>                
                    <input type="submit" value="search" />
                </form>
                
              <?php   
                
                foreach( $resultSet as $key => $value) :?>
                    
                     <fieldset>
                     
                      <legend><?php echo $value['title'] ?></legend>
                      
                          <img class="moviePoster" src="<?php echo '../images/'.$value['thumbpath']?>" alt="Movie poster" height="150" width="105">
                          <span class="movieBold"><?php echo $value['rental_period'] ?> </span><br>
                          <span class="movieHeading">Genre: <?php echo $value['genre'] ?></span><br>
                          <span class="movieHeading">Year: <?php echo $value['year'] ?></span><br>
                          <span class="movieHeading">Director: <?php echo $value['director'] ?></span> <br>
                          <span class="movieHeading">Classification: </span><?php echo $value['classification'] ?><br>
                          <span class="movieBold">Starring: </span><?php echo  $value['star1']	. "," . 
                                                                               $value['star2']	. "," . 
                                                                               $value['star3']	. "," . 
                                                                               $value['costar1']	. "," . 
                                                                               $value['costar2']	. "," . 
                                                                               $value['costar3']	?><br>
                                                                                
                          <span class="movieHeading">Studio: </span> <?php echo $value['studio'] ?><br>
                          <span class="movieHeading">Tagline: </span><?php echo $value['tagline'] ?> <br>
                          <p> <?php echo $value['plot'] ?></p>
                          <span class="movieHeading">Rental: </span>DVD - <?php echo $value['DVD_rental_price']?> &nbsp;   BluRay - <?php echo $value['BluRay_rental_price']?><br>
                          <span class="movieHeading">Purchase: </span>DVD -  <?php echo $value['DVD_purchase_price']; ?>   &nbsp; BluRay -  <?php echo $value['BluRay_purchase_price']; ?><br>
                          <span class="movieHeading">Availability: </span> DVD - <?php echo ( $value['numDVD'] -  $value['numDVDout']); ?> &nbsp; BluRay - <?php echo ( $value['numBluRay'] -  $value['numBluRayOut']);?>
                          
                </fieldset>	
            	 
		  <?php endforeach;  
		  
		 } else { 	?>
        <h1><?php echo $title; ?></h1>
        <?php		   
				foreach( $resultSet as $key => $value) : 
				
				
				if( !empty( $_SESSION['MEMBERID'] )){			
				
				  $dvdStock = ( $value['numDVD'] - $value['numDVDout']); 
				  $blurRay = ( $value['numBluRay'] - $value['numBluRayOut']);
				  
				  
				  if( ( $dvdStock > 0 )  &&  ( $blurRay > 0 )) {
					  $rental_purchase = " <form method='post' action='movieZone.php?search=".$qString."'><input type='hidden' name='id' value='".  $value['movie_id'] ."'>
                      <input type='submit' name='submit' id='submit' value='Rent/Purchase' />                      
                      </form>";
				  } else if( ( $dvdStock > 0 )) {
					  $rental_purchase = " <form method='post' action='movieZone.php".$qString."'><input type='hidden' name='id' value='".  $value['movie_id'] ."'>
                      <input type='submit' name='submit' id='submit' value='Only DVD In Stock ' />                      
                      </form>";
				  } else if( ( $blurRay > 0 )) {
					  $rental_purchase = " <form method='post' action='movieZone.php".$qString."'><input type='hidden' name='id' value='".  $value['movie_id'] ."'>
                      <input type='submit' name='submit' id='submit' value='Only Blu Ray In Stock ' />                      
                      </form>";
				  }	  else {
					  
					  $rental_purchase = " <form method='' action=''><input type='hidden' name='id' value='".  $value['movie_id'] ."'>
                      <input type='button' name='submit' id='submit' value='Currently Out Of Stock' />                      
                      </form>";
					}
				}	
					
				?>
				
				 <fieldset>
                
				  <legend><?php echo $value['title'] ?></legend>
					  <img class="moviePoster" src="<?php echo '../images/'.$value['thumbpath']?>" alt="Movie poster" height="150" width="105">
                      
                      <?php echo $rental_purchase; ?>
        
                      <br><br><span class="movieBold">Overnight Rental</span><br>
					  <span class="movieBold"><?php echo $value['rental_period'] ?> </span><br>
					  <span class="movieHeading">Genre: <?php echo $value['genre'] ?></span><br>
					  <span class="movieHeading">Year: <?php echo $value['year'] ?></span><br>
					  <span class="movieHeading">Director: <?php echo $value['director'] ?></span> <br>
					  <span class="movieHeading">Classification: </span><?php echo $value['classification'] ?><br>
					  <span class="movieBold">Starring: </span><?php echo  $value['star1']	. "," . 
																		   $value['star2']	. "," . 
																		   $value['star3']	. "," . 
																		   $value['costar1']	. "," . 
																		   $value['costar2']	. "," . 
																		   $value['costar3']	?><br>
                                                                            
					  <span class="movieHeading">Studio: </span> <?php echo $value['studio'] ?><br>
					  <span class="movieHeading">Tagline: </span><?php echo $value['tagline'] ?> <br>
					  <p> <?php echo $value['plot'] ?></p>
					  <span class="movieHeading">Rental: </span>DVD - <?php echo $value['DVD_rental_price']?> &nbsp;   BluRay - <?php echo $value['BluRay_rental_price']?><br>
					  <span class="movieHeading">Purchase: </span>DVD -  <?php echo $value['DVD_purchase_price']; ?>   &nbsp; BluRay -  <?php echo $value['BluRay_purchase_price']; ?><br>
					  <span class="movieHeading">Availability: </span> DVD - <?php echo ( $value['numDVD'] -  $value['numDVDout']); ?> &nbsp; BluRay - <?php echo ( $value['numBluRay'] -  $value['numBluRayOut']);?>
                      
			</fieldset>
             
		  <?php endforeach; 
		  
   }// end of inner if
   
 } //if( $queryString == $check )
  
?>
    
    
    
 
 
  </div>
  <footer>  Copyright &copy; Mohit Anand 2019 <br>
         <a href="http://infotech.scu.edu.au/~manand10">Link to the InfoTech site</a><br> </footer>
</div>
</body></html>