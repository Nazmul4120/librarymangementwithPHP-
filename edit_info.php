<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>input</title>
</head>
<body>
<table cellspacing="10">
<?php
	$sql = "select * from stdinf where id = '".MS($db, $_GET['id'])."'";
	$sql = $db->query($sql);
  	while($d = $sql->fetch_assoc()){
?>
	<form action="update_info.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $d['id'] ?>" />
		<tr>
			<td>Student Name</td>
			<td><input type="text" name="stdname" value="<?php echo $d['stdname']; ?>"></td>
		</tr>
		<tr>
			<td>ID</td>
			<td><input type="text" name="stdid" value="<?php echo $d['stdid']; ?>"></td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td><input type="text" name="dob" value="<?php echo $d['dob']; ?>"></td>
		</tr>
		<tr>
			<td>Father`s Name</td>
			<td><input type="text" name="fatname" value="<?php echo $d['fatname']; ?>"></td>
		</tr>
		
		<tr>
			<td>Mother`s Name</td>
			<td><input type="text" name="momname" value="<?php echo $d['momname']; ?>"></td>
		</tr>
		
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contct" value="<?php echo $d['contct']; ?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="addrs" value="<?php echo $d['addrs']; ?>"></td>
		</tr>
		<tr>
			<td>Nationality</td>
			<td><input type="text" name="national" value="<?php echo $d['national']; ?>"></td>
		</tr>
		<tr>
			<td>School Name</td>
			<td><input type="text" name="schol" value="<?php echo $d['schol']; ?>"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="text" name="sexopt" value="<?php echo $d['sexopt']; ?>"></td>
		</tr>
		
		<tr>
			<td><input type="reset" name="reset" value="clear"></td>
			<td><input type="submit" name="sub" value="Update"></td>
		</tr>
		
	</form>
	 <?php
	}
  ?>
</table>
</body>
</html>