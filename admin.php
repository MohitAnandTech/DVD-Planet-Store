<?php
 include ("../controller/admin.php");
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<title>Admin - DVD Planet Store</title>
<meta charset = "utf-8" />
<link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
<div id = "admin_wrapper">
  <header> 
     <h1 style="color:#ffc300;">The MoviesZone - Administration</h1>
  </header>
  <!--
<div id = "green"> </div>   
-->
  <div id="admin_leftcol">
    <h2>Admin Menu</h2>
    <div class='admin_nav'>
      <ul>
        <li><a href='moviezone.php?'>Exit to MovieZone</a></li>
      </ul>
    </div>
  </div>
  <div id="admin_rightcol">
    <p class="centre"> The username or password you entered was incorrect.</p>
    <div id='login_centered'>
      <div id="login">
        <form method="post" id="login" name="login" action="../controller/admin.php">
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
      </div>
    </div>
  </div>
  <footer>  Copyright &copy; Mohit Anand 2019 <br>
         <a href="http://infotech.scu.edu.au/~manand10">Link to the InfoTech site </footer>
</div>
</body>
</html>