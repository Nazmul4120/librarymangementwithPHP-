<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Page</title>
</head>
<body>
<?php
	if(isset($_POST['insert_Admin'])){
		$msg="";
		$err=0;
		$ext="";
	
		if($_POST['username'] == ""){
			$msg .= ++$err . ". Admin Name Required<br />";	
			}
		if($_POST['userpasword'] == ""){
			$msg .= ++$err . ". Password required<br />";
			}
			
		if($err==0){
			$sql1= "INSERT INTO admin (localusername,localpassword) values (
						'". MS($db, $_POST['username'])."',
						'". MS($db, $_POST['userpasword'])."')";

			//echo $sql;

			if($db->query($sql1)){
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
