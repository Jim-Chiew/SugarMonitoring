<?php
/*
This page is the main page. It allows user to enter sugar level readings, and view previous entries entered.
This page is deliberately left blank.

*/
session_start();

//If session is invalid, redirect to login page.
if (!isset($_SESSION['user_id'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sugar Monitoring</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>

        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <script src="js/customFunction.js" type="text/javascript"></script>

        <style>
            input{
                width: 100%;
            }
        </style>

    </head>
    <body>
    <!-- NavBar  -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <!-- Logo and name -->
            <a class="navbar-brand" href="index.php">
                <img src="images/signs.png" class="d-inline-block align-text-top logo">
                Sugar Monitor
            </a>

            <!--Sign Out Button -->
            <a href="doLogOut.php" class="btn btn-outline-danger">Sign Out</a>
        </div>
    </nav>

    <!-- Main Body  -->
    <div class="container-fluid px-5 pt-4">
        <div class="row">
            <!-- Inserting Penal -->
            <div class="col-lg-3">
                <h1 class="mt-5">Blood Sugar Level Reading</h1>
                <hr>

                <form method="post" action="insertReading.php">
                    <h3>Reading Taken After:</h3>

                    <select name="readingTimes" style="width: 100%" required>
                        <option selected disabled hidden></option>
                        <option value="breakfast" >Breakfast</option>
                        <option value="lunch" >Lunch</option>
                        <option value="dinner" >Dinner</option>
                    </select>
                    Readings are to be taken 2 hours after each meal.
                    <br><br>

                    <h3>Blood Sugar Readings (mmol/L):</h3>
                    <input type="number" name="readingLvl" step="any" style="height: 30px" required/>

                    <br><br>
                    <input class="btn btn-primary" type="submit" value="Enter" style="height: 40px">
                </form>

                <br><br>
            </div>

            <div class="col-lg-9">
                <!-- ____________________ Filter Options _____________________ -->
                <select id="filter">
                    <option hidden selected>Filter Option:</option>
                    <option value="all">Show All</option>
                    <option value="normal">Normal Reading</option>
                    <option value="elevated">Elevated Reading</option>
                    <option value="high">High Reading</option>
                </select>

                <!-- Table  -->
                <div class="my-custom-scrollbar table-wrapper-scroll-y">
                    <table class="table table-striped">
                        <thead class="sticky-top bg-white">
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">After-Meals Readings</th>
                            <th scope="col">Reading</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>`
        </div>
    </div>

    </body>
</html>
