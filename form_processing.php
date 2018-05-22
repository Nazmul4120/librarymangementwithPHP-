<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Page</title>
</head>
<body>
<?php
	if(isset($_POST['insert_post'])){
		$msg="";
		$err=0;
		$ext="";
	
		if($_POST['stdname'] == ""){
			$msg .= ++$err . ". Student Name Required<br />";	
			}
		if($_POST['stdid'] == ""){
			$msg .= ++$err . ". Student ID Required<br />";
			}
			if($_POST['dob'] == ""){
			$msg .= ++$err . ". Date Of Birth Required<br />";
			}
		if($_POST['fatname'] == ""){
			$msg .= ++$err . ". Student Father's Name Required<br />";
			}
		if($_POST['momname'] == ""){
			$msg .= ++$err . ". Student Mother's's Name Required<br />";
			}
		if($_POST['contct'] == ""){
			$msg .= ++$err . ". Contact Required<br />";
			}
		
		if($_POST['addrs'] == ""){
			$msg .= ++$err . ". Address Required<br />";
			}
		if($_POST['national'] == ""){
			$msg .= ++$err . ". Nation Required<br />";
			}
		if($_POST['schol'] == ""){
			$msg .= ++$err . ". School Required<br />";
			}
		if($_POST['sexopt'] == ""){
			$msg .= ++$err . ". Gender Required<br />";
			}
	

		if($err==0){
			$sql= "INSERT INTO stdinf (stdname,stdid,dob,fatname,momname,contct,addrs,national,schol,sexopt) values (
						'". MS($db, $_POST['stdname'])."',
						'". MS($db, $_POST['stdid'])."',
						'". MS($db, $_POST['dob'])."',
						'". MS($db, $_POST['fatname'])."',
						'". MS($db, $_POST['momname'])."',
						'". MS($db, $_POST['contct'])."',
						'". MS($db, $_POST['addrs'])."',
						'". MS($db, $_POST['national'])."',
						'". MS($db, $_POST['schol'])."',
						'". MS($db, $_POST['sexopt'])."'

			)";

			//echo $sql;

			if($db->query($sql)){
				echo "Save Success";	
			}
			else{
				echo "Some error occurs";
				//echo $db->error;		
			}
			
		}
		else{
			echo $msg;
	}
}
	else{

		echo "Invalid";
	}
?>
</body>
</html>