<?php
/*
This page is to used to insert sugar reading into the table sugarreading (mySQL)
This page is deliberately left blank.
*/
session_start();
include "dbFunction.php";

date_default_timezone_set("Asia/Singapore");
$date = date('y-m-d'); // Retreive the current date of user's entry

//Retrieve user's readingTimes and readinglevel
$readingTimes = $_POST['readingTimes'];
$readingLvl = $_POST['readingLvl'];
$user_id = $_SESSION['user_id'];

//Write insert SQL statement to database
$query = "INSERT INTO sugarreading 
(userID, readingDate, readingTimes, readingLvl) 
VALUES ($user_id, '$date', '$readingTimes', $readingLvl)";

//Execute SQL statement 
$result = mysqli_query($link, $query) or die(mysqli_error($link));

//Close db
mysqli_close($link);

header("location: sugarMonitoring.php");


