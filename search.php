<?php require_once("config.php"); ?>

 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
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
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form action="search_function.php" method="POST" class="form-horizontal">
          <!--06. search-->
            <div class="form-group">
              <label for="mname" class="col-sm-2 control-label">Search For Student</label>
              <div class="col-sm-10">
                <label>Student ID</label>
                       <input type="text" class="form-control" name="se_roll" placeholder="Enter Student ID" required>
              </div>
            </div>
            
            <!--button groups-->
            <div class="buts">
              <button type="submit" class="btn btn-success" Value="Insert" name="sub">Search</button>
              <button type="reset" class="btn btn-success">Reset</button>
            </div>
          
          </form>

</body>
</html>