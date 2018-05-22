<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>signup</title>

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
					<form action="signup_insert.php" method="POST" class="form-horizontal">
                     
                      <!--01. Name-->
            <div class="form-group" id="fchild">
              <label for="sname" class="col-sm-2 control-label">UserName</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="sname" placeholder="User Name" name="username">
              </div>
            </div>

            <!--02. password-->
            <div class="form-group">
              <label for="sid" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="sid" placeholder="password" name="userpasword">
              </div>
            </div>
            
             <!--button groups-->
            <div class="buts">
              <button type="submit" class="btn btn-success" Value="Insert" name="insert_admin">Submit</button>
            </div>
 </form>
					 
				   </div>
      </div>
    </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
