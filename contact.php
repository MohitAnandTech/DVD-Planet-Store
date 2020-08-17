<?php include('header.php'); ?>
<script type = "text/javascript">
         document.getElementById("contactNav").className = "currentpage";  
      </script> 
      
      <div id = "leftcol">
         <h2> Popular Movies</h2>
         <fieldset>
       <legend>Twilight</legend>
       <img class='moviePoster' src='../public/images/Twilight.jpg' alt='Movie poster' height='150' width='105'>
       <span class='movieHeading'>Genre: </span>Drama/Romance<br>
       <span class='movieHeading'>Director: </span>Catherine Hardwick<br>
       <span class='movieHeading'>Classification: </span>M<br>
       <span class='movieBold'>Starring: </span>Kristen Stewart, Sarah Clarke and Matt Bushell
       </fieldSet><br><br><fieldset>
       <legend>Furious Seven</legend>
       <img class='moviePoster' src='../images/1436457000FF7.jpg' alt='Movie poster' height='150' width='105'>
       <span class='movieHeading'>Genre: </span>Thriller<br>
       <span class='movieHeading'>Director: </span>Justin Lin<br>
       <span class='movieHeading'>Classification: </span>PG<br>
       <span class='movieBold'>Starring: </span>Vin Diesel, Paul Walker, Jason Statham, Kurt Russell, Michelle Rodriguez and Dwayne Johnson.
       </fieldSet>   
       </div>
 
      <div id = "rightcol"> 
         <img class="center"src = "../public/images/dvdshop.jpg" width = "500" height = "300" border="2px black" align="auto" 
         alt = "Our extensive collection" title="Our extensive collection">
         <h2 style="color:Red"> Get in touch with us.</h2>
         <p class="contactCentered"> 
      Address: Shop 106 , Lonsdale street, Melbourne, Victoria</p>
         <div id="contactBlock">
            <label>Phone:</label> 
             0435039346<br>
            <label>Address:</label>Shop 106 ,  Lonsdale street melbourne<br>
            <label>Email:</label><a href="mailto:anandmohit.don@gmail.com">
              dvdplanetstore@gmail.com</a><br>
         </div>   
          <h2>You can find us here!!<h2>    
         <div class "span8">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8980721977227!2d144.95809231531888!3d-37.81585637975189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4b5b35cc69%3A0xe2c393719bae9eef!2sSouthern+Cross+University%2C+Melbourne+Campus!5e0!3m2!1sen!2slk!4v1502806384417" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
         
         <h3>Send us a quick message</h3>
		<form method="post" action="contact.php">
		<div class="form-group">
			  <label for="name">Name:</label>
			  <input type="text" class="form-control" id="name" placeholder="Please Enter name" name="name" required>
		</div>
		<div class="form-group">
			  <label for="email">Email:</label>
			  <input type="email" class="form-control" id="email" placeholder="Please Enter email" name="email" required>
		</div>
		<div class="form-group">
			  <label for="message">Message:</label><br>
			  <textarea name="message" required cols="45"></textarea>
		</div>
		<div id="error" style="color:red"></div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button> <button type="reset" class="btn btn-default">Reset</button>
		</form>
	</div>
         </div>            
      </div>
      <footer>    
    Copyright &copy; Mohit Anand 2019 <br>
         <a href="http://infotech.scu.edu.au/~manand10">Link to the InfoTech site</a><br>
</footer>        
   </div>     