<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <!-- Logo and name -->
            <a class="navbar-brand" href="index.php">
                <img src="images/signs.png" class="d-inline-block align-text-top logo">
                Sugar Monitor
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <!--Sign in Button/To Monitor Page-->
                <?php
                //If session is invalid, show login.
                if (!isset($_SESSION['user_id'])) { ?>
                    <form method="post" action="doLogin.php" class="ml-auto d-flex">
                        <input class="form-control mr-2" type="text" name="entered_username" placeholder="Username"/>
                        <input class="form-control mr-2" type="password" name="entered_password" placeholder="Password"/>
                        <button class="btn btn-outline-success" type="submit">Sign in</button>
                    </form>
                <?php } else { ?>
                    <a href="sugarMonitoring.php" class="btn btn-outline-success ml-auto mr-2">View Reading</a>
                    <a href="doLogOut.php" class="btn btn-outline-danger mr-2">Sign Out</a>
                <?php } ?>
            </div>
        </div>
    </nav>
    <br><br>