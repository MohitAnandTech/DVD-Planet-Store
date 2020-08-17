<?php
	include('header.php');
	include "../controller/member.php";
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
      
        <form method="post" id="updateMember" name="updateMember">
                
        	<input type="hidden" name="search" value="updateMember"/> 
                    
            <legend> Update Memeber </legend>
            <div>
              <label for="Surname">Surname:</label>
              <input type="text" name="surname" id="surname" value="<?php echo $resultSet[0]['surname'] ?>" size = "39" maxlength = "10" required>
            </div>
            <div>
              <label for="othername">Other Name:</label>
              <input type="text" name="othername" id="othername" value="<?php echo $resultSet[0]['other_name'] ?>" size = "40" maxlength = "10" required>
            </div>
            
            <div>
              <label for="conatctmethod">Contact Method:</label>
              <input type="text" name="conatctmethod" id="conatctmethod" value="<?php echo $resultSet[0]['contact_method'] ?>"  required />
            </div>                       
             
                        
            <div>
              <label for="Email">Email:</label>
              <input type="text" name="email" id="email" value="<?php echo $resultSet[0]['email'] ?>"  required />
            </div>
            
            <div>
              <label for="mobile">Mobile:</label>
              <input type="text" name="mobile" id="mobile" value="<?php echo $resultSet[0]['mobile'] ?>"   required />
            </div>
                        
            <div>
              <label for="Landline">Landline:</label>
              <input type="text" name="landline" id="landline" value="<?php echo $resultSet[0]['landline'] ?>"  required />
            </div>        
            
             <div>
              <label for="street">Street:</label>
              <input type="text" name="street" id="street" value="<?php echo $resultSet[0]['street'] ?>"  required />
            </div>
            <div>
              <label for="Suburb">Suburb:</label>
              <input type="text" name="suburb" id="suburb" value="<?php echo $resultSet[0]['suburb'] ?>"  required />
            </div>
            
             <div>
              <label for="postcode">Postcode:</label>
              <input type="text" name="postcode" id="postcode" value="<?php echo $resultSet[0]['postcode'] ?>"   required />
            </div>
            <div>
              <label for="username">Username:</label>
              <input type="text" name="username" id="username" value="<?php echo $resultSet[0]['username'] ?>"  required />
            </div>
            <div>
              <label for="password">Password:</label>
              <input type="text" name="password" id="password" value="<?php echo $resultSet[0]['password'] ?>" required />
            </div> 
               <div>
              <label for="occupation">Occupation:</label>
              <input type="text" name="occupation" id="occupation" value="<?php echo $resultSet[0]['occupation'] ?>" required />
            </div> 
             <div>
              <label for="join_date">Join Date:</label>
              <input type="text" name="join_date" id="join_date" value="<?php echo $resultSet[0]['join_date'] ?>"  required />
            </div> 
     
          <div id="formbuttons">
            <input type="submit" name="updateMember" value = "Update Member"  />
          </div>
        </form>
        
      </div>
    </div>
  </div>
  <footer> Copyright &copy; Mohit Anand 2019 <br>
         <a href="http://infotech.scu.edu.au/~manand10">Link to the InfoTech site </footer>
</div>
 