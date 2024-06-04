<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMC | Welcome</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/font.css"> -->
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    <?php include_once 'includes/head.php' ?>
    <style>
      #a {
      display: none;
    }
    </style>
</head>
<body>

    <img src="images/black.png" id="img1">
    <div style="position: absolute; margin-left:56%; margin-top:175px;">
    <img src="images/task.svg" width="430px" style="z-index: 1;">
    </div>
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 160px; margin-left: 10px;">
    	<h1 style="margin-left: 30px; font-size: 64px;"><b> </b><br> PLACEMENT <br><b> MANAGEMENT </b><br> SYSTEM</h1> <br>
        <!-- <img src="images/logo1.png" width="550px"> -->
    </div>
    <div id="users" style="z-index: 1; position: relative; margin-top: 130vh;">
            <h1 align="center"><u>USERS</u></h1> <br> <br>
            <a href="login.php" class="btn btn-outline-light my-2 my-sm-0" style="border-radius: 50px; border-width: 2px; font-weight: bold;" id="loginnav">LOGIN</a>
        <div class="container">
        <div class="card-group">
          <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/admin1.svg" class="card-img-top" alt="..." style="width: 400px;">
            <div class="card-body">
              <h2 class="card-title" align="center"><a href="login.php">Admin</a></h5>
              <p class="card-text"><small class="text-muted">Placement Officer</small></p>
            </div>
          </div>
          <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/student1.svg" class="card-img-top" alt="..." style="width: 410px; margin-top: 10px;"> <br> 
            <div class="card-body">
              <h2 class="card-title" align="center"><a href="login.php">User</a></h5>
              <p class="card-text"><small class="text-muted">Student</small></p>
            </div>
          </div><br>
        </div>
      </div>
    </div>

    <div  style="z-index: 1; position: relative; bottom: 60vh;">
        <div class="container">
        <div id="alumni" class="card-group" style="position:absolute; top: 700px; left:40%">
          <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/admin1.svg" class="card-img-top" alt="..." style="width: 400px;">
            <div class="card-body">
              <h2 class="card-title" align="center"><a href="login.php">Alumni</a></h5>
              <p class="card-text"><small class="text-muted">Professionals</small></p>
            </div>
          </div>
         
          </div>
        </div>
      </div>
    </div>
    
    </div>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>