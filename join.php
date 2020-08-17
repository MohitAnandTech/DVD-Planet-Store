<?php 
	include_once ("header.php");
	include_once ("../controller/join.php");
 ?>
 
   <script type = "text/javascript">
          document.getElementById("joinNav").className = "currentpage";  
      </script> 
      <div id = "leftcol">
         <h2> Popular Movies </h2>
         <fieldset>
       <legend>Twilight</legend>
       <img class='moviePoster' src='../public/images/Twilight.jpg' alt='Movie poster' height='150' width='105'>
       <span class='movieHeading'>Genre: </span>Drama/Romance<br>
       <span class='movieHeading'>Director: </span>Catherine Hardwick<br>
       <span class='movieHeading'>Classification: </span>M<br>
       <span class='movieBold'>Starring: </span>Kristen Stewart, Sarah Clarke and Matt Bushell.
       
       </fieldSet><br><br><fieldset>
       <legend>The Avengers</legend>
       <img class='moviePoster' src='../images/1436181707avengers.jpg' alt='Movie poster' height='150' width='105'>
       <span class='movieHeading'>Genre: </span>Action<br>
       <span class='movieHeading'>Director: </span>Angela Robinson<br>
       <span class='movieHeading'>Classification: </span>G<br>
       <span class='movieBold'>Starring: </span>Aaron Eckhart, Bai Ling, Ashley Greene and Arnold Schwarzenegger.
       
       </fieldSet>      </div>
      <div id = "rightcol">
         <!--
The form HTML for the join page
-->
<h2>Sign-up now</h2>  
  <div id = "compnote">
     <p>* = Compulsory field</p>
  </div>   
  <form method="post" id="joinform">
  <input type="hidden" name="search" value="join"/>
     <fieldset id="formnameandemail">
        <legend>Name</legend>
        <div> <!-- simply holds names apart -->
           <label>Surname:</label>
           <input type="text" name="surname" id="surname" size = "50" maxlength = "50" required>
           <span class = "requiredmarker">*</span>
        </div>
        <label>Other names:</label>
        <input type="text" name="othername" id="othername" size = "50" maxlength = "60" required >
        <span class = "requiredmarker">*</span>
     </fieldset>
     
     <fieldset id="preferredcontact">
        <legend>Preferred Contact Method:</legend>
        Mobile phone:
        <input type="radio" name="contactmethod" id="contactMobile" value="mobile">
        &nbsp;&nbsp;Landline phone:
        <input type="radio" name="contactmethod" id="contactPhone" value="landline">
        &nbsp;&nbsp;Email:
        <input type="radio" name="contactmethod" id="contactEmail" value="email" checked="checked">
        <div class="popup" id = "contacthelp">
           <p>Please select your preferred contact method.</p>
        </div>
     </fieldset>
     
     <fieldset id="formcontact">
        <legend>Contact details</legend>
        <div id ="mobilerow">
           <label>Mobile:</label>
           <input type="text" name="mobilenum" id="mobilenum" size = "13" maxlength = "12" />
           <span class = "requiredmarker" id = "mobilemarker">*</span>
           <div class="popup" id = "mobilehelp">
              Enter mobile number in following format:<br>
              0[4 or 5]XX XXX XXX where X is a digit
           </div>                           
        </div>
        <div id ="phonerow">
           <label>Landline:</label>
           <input type="text" name="phonenum" id="phonenum" size = "13" maxlength = "13" />
           <span class = "requiredmarker" id = "phonemarker">*</span>  
           <div class="popup" id = "phonehelp">
              Enter phone number in following format:<br>
              (0[2,3,6,7,8 or 9]) XXXXXXXX where X is a digit
           </div>                               
        </div>
        <div id ="emailrow">
           <label>Email:</label>
           <input type="email" name="email" id="email" size = "50" maxlength = "50"/>
           <span class = "requiredmarker" id = "emailmarker">*</span>                             
           <div class="popup" id = "emailhelp">
              Please enter valid email address
           </div>                               
        </div>
     </fieldset>
     <script type = "text/javascript">
   <!--
    //turn off visibility of mobile and Landline (as email checked)
    mobilemarker.style.visibility = "hidden";
    phonemarker.style.visibility = "hidden";
   -->
</script>
     <fieldset id="occupationlist">
        <legend>Choose Your Occupation</legend>
        <label>Occupation:</label>
        <select name="occupation" id = "occupation">
           <option value="blank"></option>                        
           <option value="Student">Student</option>
           <option value="Manager">Manager</option>
           <option value="Healthcare">Medical worker</option>
           <option value="Trades">Trades worker</option>
           <option value="Educator">Education</option>
           <option value="Technician">Technician</option>
           <option value="Clerical">Clerical worker</option>
           <option value="Retail">Retail worker</option>
           <option value="Researcher">Researcher</option>
           <option value="Other">Other</option>
        </select>
        <span class = "requiredmarker">*</span>                        
     </fieldset>
 
     <fieldset id="formaddress">
        <legend>Address:</legend>
        <div id = "checkboxrow">
           <input type="checkbox" name="magazine" id="magazine" value="yes" checked ="checked" />
           Do you want to receive our monthly magazine?<br><br>
        </div>   
        <div id ="streetrow">
            <label>Street address:</label>
            <input type="text" name="streetaddr" id="streetaddr" size = "50" maxlength = "50" />
            <span class = "requiredmarker" id = "streetmarker">*</span>                              
            <div class="popup" id = "streethelp">
                Please enter house number and street address
            </div>                                  
        </div>
        <div id ="suburbrow">
            <label>Suburb and State:</label>
            <input type="text" name="suburbstate" id="suburbstate" size = "50" maxlength = "50" />
            <span class = "requiredmarker" id = "suburbmarker">*</span>
            <div class="popup" id = "suburbhelp">
                Please enter suburb and state<br>
                Suburb, State
            </div>                                  
        </div>                     
        <div id ="postcoderow">
            <label>Postcode:</label>
            <input type="text" name="postcode" id="postcode" size = "4" maxlength = "4"/>
            <span class = "requiredmarker" id = "postcodemarker">*</span>                              
            <div class="popup" id = "postcodehelp">
                Please enter postcode maximum 4 digits
            </div>                                  
         </div>                                             
     </fieldset>        

     <fieldset id="username"><legend>Username and Password:</legend>
        <div id ="usernamerow">
           <label>Username:</label>
           <input type="text" name="joinusername" id="joinusername" size = "14" maxlength = "10"/>
           <span class = "requiredmarker">*</span>                           
           <div class="popup" id = "usernamehelp">
              Please enter username<br>minimum 6 characters - maximum 10 characters
           </div>                               
        </div>
        <div id ="passwordrow">
           <label>Password:</label>
           <input type="password" name="userpass" id="userpass" size = "15" maxlength = "10"/>
           <span class = "requiredmarker">*</span>                           
           <div class="popup" id = "passwordhelp">
              10 characters maximum containing at minimum<br>one uppercase letter,<br>
              one lowercase letter,<br>one number and<br>one special character<br> 
              with no whitespace allowed
           </div>                               
        </div>                     
        <div id ="verifypassrow">
           <label>Verify password:</label>
           <input type="password" name="verifypass" id="verifypass" size = "15" maxlength = "40"/>
           <span class = "requiredmarker">*</span>                           
           <div class="popup" id = "verifypasshelp">
              <p>Enter password again for verification</p>
           </div>                               
        </div>                     
     </fieldset>                                                          
            
     <div id="formbuttons">
        <input type="submit" name = "submit" id = "submit" value="Join DVD Planet Store"/>&nbsp;&nbsp;
        <input type="reset" />
     </div>
  </form>
     </div>
        <footer>    
    Copyright &copy; Mohit Anand 2019 <br>
         <a href="http://infotech.scu.edu.au/~manand10">Link to the InfoTech site</a><br> 
</footer>       </div>
</body>
</html>