<div class="container-fluid custom_container_main mb-5">
    <div class="row">

        <div class="col-lg-5 border border-secondary custom_container_sub">
            <!-- Sign Up  -->
            <form id="form" action="doRegister.php" method="post">
                <h3>Register With Us:</h3> <br>

                <div class="input-group mb-3">
                    <label for="username">Username: </label>
                    <input class="ml-2 resize" id="username" name="username" size="30" required>
                </div>

                <div class="input-group mb-3">
                    <label for="password">Password:</label>
                    <input class="ml-2 resize" type="text" id="password" name="password" required>
                </div>

                <div class="input-group mb-3">
                    <label for="height">Height: </label>
                    <input class="ml-4 resizeWithIcon" type="number" id="height" name="height" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">cm</span>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <label for="weight">Weight: </label>
                    <input class="ml-4 resizeWithIcon" type="number" step="any" id="weight" name="weight" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">kg</span>
                    </div>
                </div>

                <input class="btn btn-primary" type="submit" value="Sign Up">
                <br>
            </form>
        </div>

        <div class="col-lg-7 custom_container_last">
            <h3>Contact Us</h3><br>

            Email: <a href="mailto:20004713@myrp.edu.sg">20004713@myrp.edu.sg</a> <br>
            Phone: 6510 3000 <br>
            Website: <a href="https://www.rp.edu.sg/" target="_blank">RP Website</a> <br>

        </div>
    </div>
</div>
