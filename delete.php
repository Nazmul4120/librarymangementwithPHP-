<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<?php
if(isset($_GET['id'])){
	
	$sql = "delete from stdinf where id = '".MS($db, $_GET['id'])."'";
	echo $sql;
	if($db->query($sql)){
		unlink("files/info_" . MS($db, $_GET['id']) . ".txt");
		header("Location: view.php?msg=Delete Success.");
	}
	else{
		header("Location: view.php?msg=Some error occurs.");
		//echo $db->error;		
	}
}
else{
	echo "Invalid URL";	
}
?>
</body>
</html>