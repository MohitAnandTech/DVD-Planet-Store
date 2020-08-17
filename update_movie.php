<?php
	include('header.php');
	include "../controller/addMovie.php";	
?>
 
<div id = "admin_wrapper"> 
  <div id="admin_leftcol">
    <h2>Admin Menu</h2>
    <div class='admin_nav'>
      <ul> 
        <li><a href='movieOper.php?search=show_all'>Movies</a></li> 
        <li><a href='member.php?search=show_all'> Member </a></li>
        <li><a href='report.php?search=show_all'>Report</a></li>  
        <li><a href='movieZone.php?search=new_release'>Exit to MovieZone</a></li>
      </ul>
    </div>
  </div>
  <div id="admin_rightcol">
    <p class="centre"> </p>
    <div id='login_centered'>
      <div id="login">
      
        <form method="post" id="updateMovie" name="updateMovie">
                
        	<input type="hidden" name="search" value="updateMovie"/> 
            <input type="hidden" name="mID" value="<?php echo $resultSet[0]['movie_id']?>"/>       
            <legend> Update Movie </legend>
            <div>
              <label for="Title">Title:</label>
              <input type="text" name="title" id="title" size = "39" maxlength = "10" value="<?php echo $resultSet[0]['title']?>" required>
            </div>
            <div>
              <label for="Tagline">Tagline:</label>
              <input type="text" name="tagline" id="tagline" size = "40" maxlength = "10" value="<?php echo $resultSet[0]['tagline']?>"required>
            </div>
            
            <div>
              <label for="plot">Plot:</label>
              <textarea type="text" name="plot" id="plot"required><?php echo $resultSet[0]['plot']?></textarea>
            </div>
                        
            <div>
              <label for="Director">Director:</label>
              <select name="directorId">
                    <option value="">Select</option>
                    <?php foreach( $dirResultSet as $key => $value) :
                    	if( $value['director_id'] == $resultSet[0]['director_id'] ){
                        	$selected =  "selected='selected'"; 
                        } else {
							$selected = "";
						}
                    ?>		
                        <option <?php echo $selected ?>   value="<?php echo $value['director_id']  ?>"> <?php echo $value['director_name']  ?> </option>           
                    <?php endforeach; ?>                
                    </select>                
            </div>
            
             <div>
              <label for="Studio">Studio:</label>
              <select name="studio">
                    <option value="">Select</option>
                    <?php foreach( $studioResultSet as $key => $value) :
					if( $value['studio_id'] == $resultSet[0]['studio_id'] ){
                        	$selected =  "selected='selected'"; 
                        } else {
							$selected = "";
						}
					
					?>
                        <option <?php echo $selected ?>  value="<?php echo $value['studio_id']  ?>"> <?php echo $value['studio_name']  ?> </option>           
                    <?php endforeach; ?>                
                    </select>                
            </div>
            
            <div>
              <label for="Genere">Genere:</label>
              <select name="genere">
                    <option value="">Select</option>
                    <?php foreach( $GenereResultSet as $key => $value) :
						if( $value['genre_id'] == $resultSet[0]['genre_id'] ){
                        	$selected =  "selected='selected'"; 
                        } else {
							$selected = "";
						}
					
					?>
                        <option <?php echo $selected ?> value="<?php echo $value['genre_id']  ?>"> <?php echo $value['genre_name']  ?> </option>           
                    <?php endforeach; ?>                
                    </select>                
            </div>
            
             <div>
              <label for="classification">Classification:</label>
              <select name="classification">
                    <option value="">Select</option>
                    <option value="PG"> PG </option>
 					<option value="G"> G </option>
					<option value="M"> M </option>  
					<option value="G"> G </option>
					<option value="R"> R </option> 
              </select>                
            </div>
             <div>
              <label for="rental_period">Rental Period:</label>
              <select name="rental_period">
                    <option value="">Select</option>
                    <option value="3 Day">3 Day	</option>
 					<option value="Weekly"> Weekly	</option>
					<option value="Overnight">Overnight	</option>			 
              </select>             
            </div>
                        
            <div>
              <label for="Year">Year:</label>
              <input type="text" name="year" id="year" value="<?php echo $resultSet[0]['year'] ?>"  required />
            </div>
            
            <div>
              <label for="rentalprice">DVD Rental Price:</label>
              <input type="text" name="rentalprice" id="rentalprice" value="<?php echo $resultSet[0]['DVD_rental_price'] ?>"  required />
            </div>
                        
            <div>
              <label for="DVD_purchase_price">DVD Purchase Price:</label>
              <input type="text" name="dvd_purchase_price" id="dvd_purchase_price" value="<?php echo $resultSet[0]['DVD_purchase_price'] ?>"   required />
            </div>        
            
             <div>
              <label for="num_dvd">Num DVD :</label>
              <input type="text" name="num_dvd" id="num_dvd" value="<?php echo $resultSet[0]['numDVD'] ?>"   required />
            </div>
            <div>
              <label for="BluRay_rental_price">BluRay Rental:</label>
              <input type="text" name="bluRay_rental_price" id="bluRay_rental_price" value="<?php echo $resultSet[0]['BluRay_rental_price'] ?>"  required />
            </div>
            
             <div>
              <label for="bluRay_purchase_price">BluRay Purchase:</label>
              <input type="text" name="bluRay_purchase_price" id="bluRay_purchase_price" value="<?php echo $resultSet[0]['BluRay_purchase_price'] ?>"  required />
            </div>
               <div>
              <label for="numBluRay">Num BluRay:</label>
              <input type="text" name="numBluRay" id="numBluRay" value="<?php echo $resultSet[0]['numBluRay'] ?>"  required />
            </div> 
     
          <div id="formbuttons">
            <input type="submit" name="update" value = "Update Movie"  />
          </div>
        </form>
        
      </div>
    </div>
  </div>
  <footer> Copyright &copy; Mohit Anand 2019 <br>
         <a href="http://infotech.scu.edu.au/~manand10">Link to the InfoTech site</footer>
</div>
 