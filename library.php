<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet" type="text/css"/>
	
	<style>
	body{
	background-image: url('img/back.jpg');
	background-repeat: no-repeat;
    background-size: 100% 100%;
    color: #000000;
    background-attachment: fixed;
	}
	</style>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
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
		
		
		<div class="container" id="header">
			<div class="row">
				<div class="col-md-12">
					<hr><h2 style="color:blue">Library</h2>
				</div>
			</div><hr>
			<div class="row">
				<div class="col-md-12">
					<img src="images/lib.jpg" class="img-responsive" alt="Responsive image">
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12">
					<p><b>For acquiring knowledge and increasing merit, there is no other alternative of library. 
					Thus the college has a rich library. Students use the library in the break time and they can take book from 
					the library using their library card. The library is enriched with newspapers, magazines, periodicals along
					with textual, co-textual, story, novel and general knowledge books besides the text books.<br><br>
						
						Rules for Library Use:<br><br>

						# Library can be used from 9am to 5pm.<br>
						# Only those students will be able to use library who will pay library fee and security deposit.<br>
						# Library card has to be collected from the librarian to use the library.<br>
						# Students will be allowed to keep the issued book in their home for 7 days.<br>
						# If any student is unable to submit the issued book on due date he has to pay fine 5 take per day.<br>
						# If any one cause any harm to the issued book he has to compensate for the book.<br>
						# Students have to submit their bags to the librarian while entering into the library.</b></p>
				</div>
			</div>
		
		</div>
		
			<div class="container" id="footer">
				<div class="row">
					<div class="col-md-12">
						<hr><p><center>&copy; 
						designed by Raktim Sarkar
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