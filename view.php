<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	
	<style>
	body{
	background-image: url('img/back.jpg');
	background-repeat: no-repeat;
    background-size: 100% 100%;
    color: #000000;
    background-attachment: fixed;
	}
	</style>
	
</head>
<body>
<table width="600" border="1" cellpadding="10" cellspacing="5">
  <tr>
    <th>Name</th>
    <th>Id No.</th>
    <th>Gender</th>
    <th>Date of Birth</th>
    <th>Father`s Name</th>
    <th>Mother`s Name</th>
    <th>Contact No.</th>
    <th>Address</th>
    <th>Nationality</th>
    <th>School's name</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
	$sql = "select * from stdinf";
	$sql = $db->query($sql);
  	while($d = $sql->fetch_assoc()){
  ?>
  <tr>
      <td><?php echo $d['stdname']; ?></td>
      <td><?php echo $d['stdid']; ?></td>
      <td><?php echo $d['dob']; ?></td>
      <td><?php echo $d['fatname']; ?></td>
      <td><?php echo $d['momname']; ?></td>
      <td><?php echo $d['contct']; ?></td>
      <td><?php echo $d['addrs']; ?></td>
      <td><?php echo $d['national']; ?></td>
      <td><?php echo $d['schol']; ?></td>
      <td><?php echo $d['sexopt']; ?></td>
      
      <td><a href="edit_info.php?id=<?php echo $d['stdid'] ?>">Edit</a></td>
     <td><a href="delete.php?id=<?php echo $d['id'] ?>">Delete</a></td>
    </tr>
  <?php
	}
  ?>
</table>
</body>
</html>
