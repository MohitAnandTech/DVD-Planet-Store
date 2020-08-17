<?php 
ob_start();

include('header.php'); 
 include_once ("../controller/booking.php");
?>

<div id = "wrapper"> 
  <script type = "text/javascript">
         document.getElementById("indexNav").className = "currentpage";  
      </script>
  <div id = "leftcol">
    <h2> New Releases</h2>
    <fieldset>
      <legend>Twilight</legend>
      <img class='moviePoster' src='../public/images/Twilight.jpg' alt='Movie poster' height='150' width='105'> <span class='movieHeading'>Genre: </span>Drama/Romance<br>
      <span class='movieHeading'>Director: </span>Catherine Hardwick<br>
      <span class='movieHeading'>Classification: </span>M<br>
      <span class='movieBold'>Starring: </span>Kristen Stewart, Sarah Clarke and Matt Bushell.
      
    </fieldSet>
    <br>
    <br>
    <fieldset>
     <legend>The Avengers</legend>
      <img class='moviePoster' src='../images/1436181707avengers.jpg' alt='Movie poster' height='150' width='105'> <span class='movieHeading'>Genre: </span>Action<br>
      <span class='movieHeading'>Director: </span>Angela Robinson<br>
      <span class='movieHeading'>Classification: </span>G<br>
      <span class='movieBold'>Starring: </span> Aaron Eckhart, Bai Ling, Ashley Greene and Arnold Schwarzenegger.
 
    </fieldSet>
  </div>
  <div id = "rightcol"> 
  
  <?php if( $queryString == 'Login'):  ?>
  
  <h2>Log-in </h2>
   <p class='centre'>You can select 5 movies only.</p><div id="login">
   <form method="post" id="login" name="login" action="">
     <fieldset>
        <legend>Login</legend>
         <div> 
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" size = "39" maxlength = "10" required>
         </div>
         <div>
           <label for="password">Password:</label>
           <input type="password" name="password" id="password" size = "40" maxlength = "10" required>
         </div>
     </fieldset>
     <div id="formbuttons">
        <input type="submit" value = "Login" />
     </div>
   </form>
<?php elseif(  $queryString == 'selection'): ?>
  
  
  
<!--  <span style = "float:left;">Bill Smarttt<br>
    logged-in<br>
    5 movies selected</span><br>
    <br>-->
    <h1>Checkout</h1>
   
    <form id='joinform' name='joinform' method='' action=''>
    
    <?php  foreach (  $filer as $value): 
	?>
      <fieldset>
        <legend> Movies </legend>
        <img class='moviePoster' src='imgs/movies/1420787270guardians.jpg' alt='Movie poster' 
                         height='150' width='105'>
        <div>
          <label for='title'>Title:</label>
          <input type='text' name='title' size = '45' value="<?php echo $value[0]['title'] ?>" disabled>
        </div>
        <div>
          <label for='year'>Year:</label>
          <input type='text' name='year' size = '4' value="<?php echo $value[0]['year'] ?>" disabled>
        </div>
        <div>
          <label for='tagline'>Tag line:</label>
          <input type='text' name='tagline' size = '60' value="<?php echo $value[0]['tagline'] ?>" disabled>
        </div>
      
      </fieldset>
      <?php endforeach; ?>
 
    </form>
  </div>
  
  <?php endif; 
  
  
  ob_flush();?>
  <footer>  
    Copyright &copy; Mohit Anand 2019 <br>
         <a href="http://infotech.scu.edu.au/~manand10">Link to the InfoTech site</a><br> </footer>
</div>
