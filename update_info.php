<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<?php	
	if(isset($_POST['sub'])){
		$msg = "";
		$err = 0;
		
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
						
			$sql = "update stdinf set
						stdname = '".MS($db, $_POST['stdname'])."',
						stdid = '".MS($db, $_POST['stdid'])."',
						dob = '".MS($db, $_POST['dob'])."',
						fatname = '".MS($db, $_POST['fatname'])."',
						momname = '".MS($db, $_POST['momname'])."',
						contct = '".MS($db, $_POST['contct'])."',
						addrs = '".MS($db, $_POST['addrs'])."',
						national = '".MS($db, $_POST['national'])."',
						schol = '".MS($db, $_POST['schol'])."',
						sexopt = '".MS($db, $_POST['sexopt'])."' where 
						id = '".MS($db, $_POST['id'])."'";
						
		
			//echo $sql;
			
			if($db->query($sql)){
				echo "Update Success";	
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
		echo "Invalid URL";	
	}
?>
</body>
</html>