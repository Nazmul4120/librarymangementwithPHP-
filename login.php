<?php

if(isset($_GET["id"])){
	if($_GET["id"]==0)
	echo "<script>alert('Wrong Username or Password');</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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

	
<div class="main">
     <div class="wrap">
      	 <div class="section group">
				<div class="cont span_2_of_blog">
				  <div class="login-title">
           		<h4 class="title">User Login</h4>
				<div id="loginbox" class="loginbox">
					<form action="log_in.php" method="post" name="login" id="login-form">
					  <!--<fieldset class="input"> -->
					    <p id="login-form-username">
					      <label for="modlgn_username">Username</label>
					      <input id="modlgn_username" type="text" name="localusername" class="inputbox" size="18" autocomplete="off" required >
					    </p>
					    <p id="login-form-password">
					      <label for="modlgn_passwd">Password</label>
					      <input id="modlgn_passwd" type="password" name="localpassword" class="inputbox" size="18" autocomplete="off" required>
					    </p>
					    
					    <input type="submit" name="Submit" class="button" value="Login">
					 <!-- </fieldset> -->
					 </form>
					
				</div>
			</div>   
			</div>
		  <div class="bsidebar span_1_of_blog">
					
					
	     </div>
	   </div>
	   <div class="clear"></div>
	  </div>
   </div>
    
</body>
</html>


