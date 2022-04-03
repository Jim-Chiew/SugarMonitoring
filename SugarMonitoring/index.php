<?php
session_start();
?>

<!DOCTYPE html>
<!--
Allows user to login or register. You can choose to have a separate registration page.
This page is deliberately left blank.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login & Registration</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>

        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <script src="js/animation.js" type="text/javascript"></script>

        <style>
            h1.fontSize{
                font-size: 60px;
            }

            p.fontSize{
                font-size: 17px;
            }

            h3{
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
    <!-- NavBar  -->
    <?php include "NavbarMain.php" ?>

    <!-- Jumbotron  -->
    <div class="jumbotron">
        <h1 class="custom_font">Sugar Monitor</h1>
        <p class="custom_font">A Web page that helps monitor your sugar intake.</p>
        <hr class="my-4">
        <a href="#form">Create a free account with us now!</a>
    </div>

    <!-- Information 1 -->
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-lg-4 pl-5 pt-5">
                <h1 class="aniText1 show-on-scroll fontSize">Simplistic design</h1>
                <p class="aniText1 show-on-scroll fontSize">A simplistic user interface for ease of use.</p>
            </div>

            <div class="col-lg-8 pr-5">
                <img class="inline-photo show-on-scroll" style="width: inherit;" src="images/sample.png">
            </div>
        </div>
    </div>

    <!-- Information 2 -->
    <div class="mb-5 aniBg show-on-scroll">
        <div id="inform2">
            <h1 class="fontSize">Free Registration</h1>
            <p class="fontSize">We believe your health should not come at a cost</p>
        </div>
    </div>

    <!-- __________________ Sign up and Contact us ________________________ -->
    <?php include "signUpAndContactInfo.php"?>
    </body>
</html>
