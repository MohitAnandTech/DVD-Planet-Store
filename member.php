<?php
include('header.php');
include "../controller/member.php";
 
 ?>

<div id = "admin_wrapper">
  <div id="admin_leftcol">
    <h2>Admin Menu </h2>
    <div class='admin_nav'>
      <ul>
        <li><a href='movieOper.php?search=show_all'>Movies</a></li>
        <li><a href='member.php?search=show_all'> Member </a></li>
        <li><a href='report.php?search=show_all'>Report</a></li>
        <li><a href='movieZone.php?search=show_all'>Exit to MovieZone</a></li>
      </ul>
    </div>
  </div>
  <table border="1" cellpadding="10" cellspacing="0">
    <a href="add_member.php?search=show_all"> Add Memeber </a>
    <tr>
      <th> Surname </th>
      <th> Other Name </th>
      <th> Contact Method </th>
      <th> Email </th>
      <th> Mobile</th>
      <th> join_date </th>
      <th> Action</th>
    </tr>
    <?php 
	foreach($memberResultSet as $key => $value) :?>
    <tr>
      <td><?php echo $value['surname'] ?></td>
      <td><?php echo $value['other_name'] ?></td>
      <td><?php echo $value['contact_method'] ?></td>
      <td><?php echo $value['email'] ?></td>
      <td><?php echo $value['mobile'] ?></td>
      <td><?php echo $value['join_date'] ?></td>
      <td width="80"><a href="update_member.php?search=getMemberData&edit=<?php echo $value['member_id'] ?>"> edit</a> / <a href="update_member.php?search=delMem&edit=<?php echo $value['member_id'] ?>">Del </a></td>
    </tr>
    <?php endforeach; ?>
  </table>
  <footer>Copyright &copy; Mohit Anand 2019 <br>
         <a href="http://infotech.scu.edu.au/~manand10">Link to the InfoTech site </footer>
</div>
