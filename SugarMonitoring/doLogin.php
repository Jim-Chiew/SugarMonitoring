<?php
/*
This page checks user's login credentials before directing user
to sugarMonitoring.php
This page is deliberately left blank.

*/
session_start();
include('dbFunction.php');

$entered_username = $_POST['entered_username'];
$entered_password = $_POST['entered_password'];

$query = "SELECT userid
FROM user
WHERE username = '$entered_username' AND 
password = SHA1('$entered_password');";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

mysqli_close($link);

if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);  //note: in video i say no need. This is needed
    $_SESSION['user_id'] = $row['userid'];

    header("Location: sugarMonitoring.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>

        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>

        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <?php include "NavbarMain.php" ?>

    <div class="container-fluid spacing">
        <h2>Sorry, You must enter a valid username and password to log in. </h2>
        <h5>Return to main page <a href='index.php'>here</a></h5>
    </div>

    <br><br><br>

    <!-- __________________ Sign up and Contact us ________________________ -->
    <?php include "signUpAndContactInfo.php"?>
    </body>
</html>