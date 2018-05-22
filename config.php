<?php
	function MS($link, $data){
		return trim(mysqli_real_escape_string($link, $data));
	}
	$db = new mysqli("localhost", "root", "", "main_project");
?>