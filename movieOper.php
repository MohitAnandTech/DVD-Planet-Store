<?php
include('header.php');
include "../controller/movie.php";

 ?>

<div id = "admin_wrapper">
  <div id="admin_leftcol">
    <h2>Admin Menu </h2>
    <div class='admin_nav'>
      <ul>
        <li><a href='movieOper.php?search=show_all'>Movies</a></li>
        <li><a href='member.php?search=show_all'> Member </a></li>
        <li><a href='report.php?search=show_all'>Report</a></li>
        <li><a href='movieZone.php?search=new_release'>Exit to MovieZone</a></li>
      </ul>
    </div>
  </div>
  <table border="1" cellpadding="10" cellspacing="0">
    <a href="add_movie.php?search=form"> Add Movie </a>
    <tr>
      <th> Movie </th>
      <th> Name </th>
      <th> Tagline </th>
      <th> Plot </th>
      <th> Year</th>
      <th> Rental Price </th>
      <th> Action</th>
    </tr>
    <?php 
	foreach($resultSet as $key => $value) :?>
    <tr>
      <td><img src="<?php echo '../images/'.$value['thumbpath']?>" width="102" height="150" /></td>
      <td><?php echo $value['title'] ?></td>
      <td><?php echo $value['tagline'] ?></td>
      <td><?php echo $value['plot'] ?></td>
      <td><?php echo $value['year'] ?></td>
      <td><?php echo $value['DVD_purchase_price'] ?></td>
      <td width="80"><a href="update_movie.php?search=getMovieData&edit=<?php echo $value['movie_id'] ?>"> edit</a> / <a href="">Del </a></td>
    </tr>
    <?php endforeach; ?>
  </table>
  <footer>Copyright &copy; Mohit Anand 2019 <br>
         <a href="http://infotech.scu.edu.au/~manand10">Link to the InfoTech site </footer>
</div>
