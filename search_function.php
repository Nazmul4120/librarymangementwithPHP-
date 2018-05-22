<?php require_once("config.php"); ?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Search Me</title>
   <link href="css/result.css" rel="stylesheet">
    
  </head>
  <body>
    <div class="wrapper">
        <div class="wrapper-main">
        <?php
        $search= $_POST["se_roll"] ;
        $sql = "SELECT * FROM stdinf WHERE stdid= $search;";
        /* Like oparetor :
            $sql = "SELECT * FROM info WHERE student_id LIKE '%$search%';"; 
        */
    $sql = $db->query($sql);
    while($d = $sql->fetch_assoc()){
  ?>
            <div class="first-step">
                <div class="details">

                   <h2> ID  : <?php echo $d['stdname']; ?> <br></h2>
                    <h2>Roll : <?php echo $d['stdid']; ?> <br></h2>
                    <h2>Name : <?php echo $d['dob']; ?> <br></h2>
                    <h2>Father Name : <?php echo $d['fatname']; ?> <br></h2>
                    <h2>Class : <?php echo $d['momname']; ?> <br></h2>
                    <h2>Date of Birth : <?php echo $d['contct']; ?> <br></h2>
                    <h2>Institute : <?php echo $d['addrs']; ?><br></h2>
                    <h2>Result : <?php echo $d['national']; ?> <br></h2> 
                    <h2>Result : <?php echo $d['schol']; ?> <br></h2>
                    <h2>Result : <?php echo $d['sexopt']; ?> <br></h2> 
                </div>
        
        <?php
             }
        ?>
        </div>
    </div>
    
</body>


</html>