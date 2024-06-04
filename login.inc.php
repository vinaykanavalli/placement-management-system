<?php
	include_once 'includes/db.inc.php';
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd1'];
	session_start(); // Start session

if(isset($_POST['login'])) {
    include 'db_connection.php'; // Include your database connection file

    // Sanitize user input
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

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
        header("Location: index_alumni.php");
        exit();
    }

    // If no matching user found, redirect to login page with error message
    ?>
    <script>
        alert("Username and Password Incorrect!");
        window.location.replace("login.php");
    </script>
    <?php
}
?>

		
