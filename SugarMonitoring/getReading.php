<?php
/*
This page is to used to Retrieve previous sugar-reading entries.
This page is deliberately left blank.
*/
session_start();
$user_id = $_SESSION['user_id'];

include 'dbFunction.php';

$sql = "SELECT readingDate, readingTimes, readingLvl 
FROM sugarreading 
WHERE userID = $user_id";

$result = mysqli_query($link, $sql);
$reading = Array();

while ($row = mysqli_fetch_assoc($result)){
    $reading[] = $row;
}

mysqli_close($link);
echo json_encode($reading);