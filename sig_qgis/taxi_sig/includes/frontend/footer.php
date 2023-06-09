<?php

/*
|--------------------------------------------------------------------------
| Access Restriction
|--------------------------------------------------------------------------
|
| Here is the declaration that user or visitor
| can access the page
| all the (!defined('MY_CONSTANT')) meaning pages that CANNOT be access.
|
*/

if (!defined('MY_CONSTANT')) {
    // You can show a message
    die('Access not allowed!');
    exit;  // This line is needed to stop script execution
}

?>
<!-- Start: Footer Dark -->
<footer class="footer-dark">
    <div class="container">
        <div class="row">
            <!-- Start: Services -->
            <div class="col-sm-6 col-md-3 item">
                <h3>Services</h3>
                <ul>
                    <li><a href="booking.html">Book A Ride</a></li>
                    <li><a href="register.php">Become A Driver</a></li>
                    <li><a href="login.php">Driver Login</a></li>
                    <li><a href="admin.php">Admin Page</a></li>
                </ul>
            </div>
            <!-- End: Services -->

            <!-- Start: About -->
            <div class="col-sm-6 col-md-3 item">
                <h3>About</h3>
                <ul>
                    <li><a href="about.php">Cabs Online</a></li>
                    <li></li>
                    <li><a href="register.php">Careers</a></li>
                </ul>
            </div>
            <!-- End: About -->

            <!-- Start: Footer Text -->
            <div class="col-md-6 item text">
                <h3><i class="fa fa-taxi" style="color: rgb(254,209,54);"></i>&nbsp;Cabs Online</h3>
                <p>Wherever you are, GrabTaxi will take you to your destination. Making it a safer and more efficient means of transport we can all be proud of.</p>
                <p>Forward Together.</p>
            </div>
            <!-- End: Footer Text -->

            <!-- Start: Social Icons -->
            <div class="col item social"><a href="https://github.com/MiguelEmmara-ai" target="_blank"><i class="icon ion-social-github"></i></a></div><!-- End: Social Icons -->
        </div>
        <!-- Start: Copyright -->
        <p class="copyright">Muhamad Miguel Emmara © 2022 - Made With <i class="fas fa-heart"></i></p>
        <!-- Version Note -->
        <p class="copyright">V2.7</p>
        <!-- End: Copyright -->
    </div>
</footer>
<!-- End: Footer Dark -->

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="assets/js/script.min.js"></script>