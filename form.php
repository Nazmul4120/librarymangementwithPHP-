
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admission Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
  </head>
  <body>


    <div class="main">
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form action="form_processing.php" method="POST" class="form-horizontal">

          <!--01. Name-->
            <div class="form-group" id="fchild">
              <label for="sname" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="sname" placeholder="Student Name" name="stdname">
              </div>
            </div>

            <!--02. id-->
            <div class="form-group">
              <label for="sid" class="col-sm-2 control-label">ID No.</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="sid" placeholder="Student ID" name="stdid">
              </div>
            </div>

           
            
            <div class="form-group">
              <label for="bdaytime" class="col-sm-2 control-label">Sex</label>
              <div class="col-sm-10">
                <input type="datetime-local" class="form-control" id="school" name="sexopt" placeholder="Gender">
              </div>
            </div>

            <!--04. dob-->
            
            <div class="form-group">
              <label for="bdaytime" class="col-sm-2 control-label">Date Of Birth</label>
              <div class="col-sm-10">
                <input type="datetime-local" class="form-control" id="school" name="dob" placeholder="Date Of Birth">
              </div>
            </div>

            <!--05. father-->
            <div class="form-group">
              <label for="fname" class="col-sm-2 control-label">Father's Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="fname" placeholder="Father's Name" name="fatname">
              </div>
            </div>
            
            <!--06. mother-->
            <div class="form-group">
              <label for="mname" class="col-sm-2 control-label">Mother's Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="mname" placeholder="Mother's Name" name="momname">
              </div>
            </div>
            
            <!--07. contact-->
            <div class="form-group">
              <label for="cntc" class="col-sm-2 control-label">Contact No.</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="cntc" placeholder="Mobile/Phone" name="contct">
              </div>
            </div>

            <!--08. address-->
            <div class="form-group">
              <label for="add" class="col-sm-2 control-label">Address</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="addr" name="addrs"></textarea>
              </div>
            </div>

            <!--09. nationality-->

            <div class="form-group">
              <label for="nation" class="col-sm-2 control-label">Nationality</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nation" placeholder="Nationality" name="national">
              </div>
            </div>

            <!--10. school-->


            <div class="form-group">
              <label for="school" class="col-sm-2 control-label">School's Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="school" placeholder="School1"  name="schol">
              </div>
            </div>

            <!--button groups-->
            <div class="buts">
              <button type="submit" class="btn btn-success" Value="Insert" name="insert_post">Submit</button>
              <button type="reset" class="btn btn-success">Reset</button>
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
