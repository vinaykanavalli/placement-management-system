<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>
	<img src="images/lgin.png" id="img1" style="position: fixed;">
    <img src="images/jump1.png" width="560px" style="position: absolute; z-index: 1; margin-left: 56%; margin-top: 5%;">
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 100px; margin-left: 10px;">
    	<h1 class="form-row justify-content-center" style="margin-left: 70px;">Sign in to your Account</h1> <br>
    	
			<?php
	include_once 'includes/db.inc.php';
	session_start();
	if(isset($_POST['login'])) {
		include 'includes/db.inc.php'; // Include your database connection file
	
		// Sanitize user input
		$uname = mysqli_real_escape_string($conn, $_POST['uname']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd1']);
	
		// Query for admin login
		$sql = "SELECT * FROM adminlogin WHERE uname = '$uname' AND pwd = '$pwd'";
		$result = mysqli_query($conn, $sql);
		$resCheck = mysqli_num_rows($result);
	
		if($resCheck > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['uname'];
			header("Location: admin/index.php");
			exit(); // Exit to prevent further execution
		}
	
		// Query for student login
		$sql = "SELECT * FROM studentlogin WHERE uname = '$uname' AND pwd = '$pwd'";
		$result = mysqli_query($conn, $sql);
		$resCheck = mysqli_num_rows($result);
	
		if($resCheck > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['fname'];
			header("Location: student/index.php");
			exit();
		}
	
		// Query for alumni login
		$sql = "SELECT * FROM alumnilogin WHERE uname = '$uname' AND pwd = '$pwd'";
		$result = mysqli_query($conn, $sql);
		$resCheck = mysqli_num_rows($result);
	
		if($resCheck > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['fname'];
			header("Location: student/index_alumni.php");
			exit();
		}
	
		// If no matching user found, display error message
		?>
		<div class="container" style="margin-left: 58px;">
			<div class="alert alert-danger" role="alert" width="300">
				Username and Password Wrong
			</div>
		</div>
		<?php
	}
	?>

			<form action="login.php" autocomplete="off" method="POST" class="needs-validation" novalidate>
			<input type="text" style="display: none;" autocomplete="false">
		    <div class="row justify-content-center align-items-baseline">
		      <div class="center one">
		        <div class="form-row">
			        <div class="form-group">
			          <label for="cname">Username</label>
			          <input type="text" class="form-control" id="cname" name="uname" style="width: 250px;" required>
								<div class="invalid-feedback">
									Please enter username.
								</div>
			        </div>
		        </div>
		        <div class="form-row">
		        	<div class="form-group">
			          <label for="cid">Password</label>
			          <input type="password" class="form-control" id="cid" name="pwd1" style="width: 250px;" required>
								<div class="invalid-feedback">
									Please enter password.
								</div>
			        </div>
						</div>
		        	<div class="form-row">
		        		<div class="form-group">
									<button type="submit" class="btn" name="login" style="width: 250px; color: white;
									font-weight: bold; background: linear-gradient(to left, #2F07FF, #0987FF);">Login</button>
		        		</div>
		        	</div>
		        		<div class="form-group">
		        			<a href="forgot.php" class="btn text-dark" style="margin-left: 30px;">Forgot Password?</a>
		        		</div>
						<div class="form-group">
  							<div class="dropdown">
    							<a href="#" class="btn btn-light btn-sm dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><u>Don't have an account? Sign Up!</u></a>
   							 	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      								<a class="dropdown-item" href="register.php">Student</a>
      								<a class="dropdown-item" href="register_alumni.php">Alumni</a>    							</div>
  							</div>
						</div>
		      </div>
		    </div>
		  </form> 
    </div>
		<?php include_once 'includes/footer.php' ?>
		<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>