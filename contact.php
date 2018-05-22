<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />		
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />	
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" media="all" />
		<title>Twitter Bootstrap Basic set-up</title>
		
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
	
			<div class="container" id="header">
			<div class="row">
				<div class="col-md-4">
					<img src="images/logo.png" alt="missing image" />
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-8">
						</div>
						<div class="col-md-4">
              
              			<button class="btn btn-success" onclick="window.location.href='login.php'">Login</button>
							<button type="signup" class="btn btn-success" onclick="window.location.href='signup.php'">Signup</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<ul class="nav nav-pills">
							  <li role="presentation" class="active"><a href="Home.php">Home</a></li>
							  <li role="presentation"> <a href="form.php">Admission</a> </li> 
                              <li role="presentation"><a href="search.php">Student Info</a></li>
     					 	  <li role="presentation"><a href="view.php">All Student</a></li>
							  <li role="presentation"><a href="library.html">Library</a></li>
							  <li role="presentation"><a href="about.html">About</a></li>
							  <li role="presentation"><a href="contact.html">Contact us</a></li>
							</ul>
						</div>
					</div>
				</div>
		</div>
		
	
	
		<section class="map">
	<div class="container map-responsive">
		<div class="row">
			<div class="col-md-6 col-xs-12 col-sm-12">
					<div style="width:500px;overflow:hidden;height:500px;max-width:100%;"><div id="gmap_canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Dhaka,+Dhaka+Division,+Bangladesh&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-maps-code" rel="nofollow" href="https://www.dog-checks.com" id="enable-map-info">dog checks</a><style>#gmap_canvas img{max-width:none!important;background:none!important;}</style></div><script src="https://www.dog-checks.com/google-maps-authorization.js?id=a1a54afc-8f49-299f-b830-7ddbeda49a11&c=google-maps-code&u=1462947380" defer="defer" async="async"></script>
			</div>
			
			<div class="col-md-6 col-xs-12 col-sm-12">
						<h2>Contact us</h2>
						<form class="form-horizontal">
						
							<div class="form-group">
							<label for="text" class="col-sm-4 control-label">First Name:</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control" id="inputPassword3" placeholder="first name">
							</div>
						  </div>
						  
						  <div class="form-group">
							<label for="text" class="col-sm-4 control-label">Last Name:</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control" id="inputPassword3" placeholder="last name">
							</div>
						  </div>
							
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Email:</label>
							<div class="col-sm-8">
							  <input type="email" class="form-control" id="inputEmail3" placeholder="exm@email.com">
							</div>
						  </div>
						  <div class="form-group">
							<label for="text" class="col-sm-4 control-label">Phone No:</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control" id="inputPassword3" placeholder="+88.....">
							</div>
						  </div>
						  <div class="form-group">
							<label for="text" class="col-sm-4 control-label">Location</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control" id="inputPassword3" placeholder="Dhaka, Bangladesh">
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-2 col-sm-8">
							  <button type="submit" class="btn btn-primary">Submit</button>
							</div>
						  </div>
						</form>
					</div>
			
			</div>
		</div>
	</section>
	
		
	<div class="container" id="footer">
				<div class="row">
					<div class="col-md-12">
						<hr><p><center>&copy; 
						designed by Imran Hossain
						</center></p><hr>
					</div>
				</div>
			</div>
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	</body>
	
</html>