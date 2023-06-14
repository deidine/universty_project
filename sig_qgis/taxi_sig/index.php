<!--Author: Muhamad Miguel Emmara-->
<!--Student ID: 18022146-->
<!--Email: ryf2144@autuni.ac.nz-->

<!--
    Description of File:
    Main / Home page
-->

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=#&libraries=places"></script>

</head>
<?php

/*
|--------------------------------------------------------------------------
| Access Restriction
|--------------------------------------------------------------------------
|
| Here is the declaration that user or visitor
| can access the page
| all the define('MY_CONSTANT', 1) meaning pages that can be access.
|
*/

define('MY_CONSTANT', 1);

/*
|--------------------------------------------------------------------------
| Title Variable
|--------------------------------------------------------------------------
|
| Title variable used to
| make dynamic title depending
| on the page where user are on.
|
*/

$title = "Cabs Online | Book A Taxi Ride With Us Today!";

/*
|--------------------------------------------------------------------------
| Require frontend/header
|--------------------------------------------------------------------------
|
| include file
| frontend/header
| for displaying the header
|
*/

require dirname(__FILE__) . "/includes/frontend/header.php"; ?>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <?php

/*
|--------------------------------------------------------------------------
| Require frontend/nav
|--------------------------------------------------------------------------
|
| include file
| frontend/nav
| for displaying the navbar
|
*/

    require 'includes/frontend/nav.php';
    ?> 
    <!-- Start: Header Blue -->
    <header class="header-blue">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container-fluid"><a class="navbar-brand" href="#">
Taxis en ligne</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Hidden Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                </div>
            </div>
        </nav>
        <div class="container hero">
            <div id="image-taxi-row" class="row">
                <!-- Start: Text -->
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1 text-center">
                    <h1 data-aos="zoom-in" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" style="color: #3b3b3b;font-weight: bold;">
      
 <strong>PAS CHER &amp;  FIABLE </strong><br>
                    <strong>COMPAGNIE DE TAXIS </strong><br></h1>
                    <p data-aos="zoom-in" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" style="color: #3b3b3b;font-weight: bold;"><strong><em>Profitez de votre voyage confortable avec nous !</em></strong><br></p>
                    <a class="btn btn-light btn-lg action-button" role="button" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000" data-aos-once="true" href="index.php#about" style="background: #f6b800;">Learn More</a>
                    <a class="btn btn-dark btn-lg" role="button" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000" data-aos-once="true" href="booking.html" style="border-radius: 40px;">Book A Ride</a>
                    <div class="container mt-3">
                        <img data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="img-fluid max-width: 70% taxi-image" src="assets/img/taxi-header.png" width="304" height="236">
                    </div>

                </div><!-- End: Text -->

            </div>
        </div>
    </header>
    <!-- End: Header Blue -->
    <section id="about" style="margin-top: -75px;">
        <div class="container">
            <div class="row row-about">
                <div class="col-lg-12 text-center" data-aos="zoom-in" data-aos-duration="500" data-aos-once="true">
                    <h3 class="text-muted section-subheading"><i class="fa fa-dot-circle-o" style="color: rgb(254,209,54);"></i><br><strong>Cabs Online Services</strong><br></h3>
                    <div id="div-about" class="text-center">
                        <h2 class="text-uppercase"><strong>HOW IT WORK</strong><br></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group timeline">
                        <li class="list-group-item" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/tap.png"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"><strong>Réservez en seulement 2 onglets</strong><br></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Cliquez simplement sur Réserver un trajet> Remplissez vos informations> Cliquez sur Réserver et vous êtes prêt à partir!</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/taxi-driver.png"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"><strong>Obtenez un chauffeur</strong><br></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Bientôt, le chauffeur vous attribuera votre livre et vous rejoindra !</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/car.png"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"><strong>Suivez votre chauffeur</strong><br></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Que vous ramassiez ou déposiez des fournitures, vous pouvez suivre tous vos trajets</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/arrived.png"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"><strong>Arriver en sécurité</strong><br></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">La route à parcourir peut être longue et sinueuse, mais vous y arriverez sain et sauf !</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                            <div class="timeline-image">
                                <h4>Be Part<br>&nbsp;Of Your Journey!<br></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Start: Highlight Phone -->
    <section class="highlight-phone" style="background: rgb(255,192,0);">
        <div id="booking-cta" class="container text-center">
            <h3>Book A Ride Now</h3>
            <form class="row g-3" method="POST" action="booking.php">
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked required>
                            <img src="./assets/img/cars/Scooter.png" alt="Car 1">
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                            <img src="./assets/img/cars/Hatchback.png" alt="Car 2">
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" required>
                            <img src="./assets/img/cars/Suv.png" alt="Car 3">
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" required>
                            <img src="./assets/img/cars/Sedan.png" alt="Car 4">
                        </label>

                    </div>
                    <div class="form-check form-check-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5" required>
                            <img src="./assets/img/cars/Van.png" alt="Car 5">
                        </label>
                    </div>
                </div>

                <div class="col-md-3">
                    <input type="text" class="form-control" id="sbname" placeholder="🏡 From Address..." name="sbname">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="dsbname" placeholder="🏡 To..." name="dsbname">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="☎️ Phone Number" name="phone">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" id="pickUpDate" name="pickUpDate">
                </div>
                <div class="col-12">
                    <input class="btn btn-dark btn-lg" type="submit" name="book-button" style="border-radius: 40px;;" value="Book A Ride">
                </div>
            </form>
        </div>
    </section><!-- End: Highlight Phone -->
    <!-- Start: Highlight Phone -->
    <section class="highlight-phone" style="background: rgb(254,251,240);">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Start: Intro -->
                    <div class="intro">
                        <div class="div-title">
                            <h2>About us</h2>
                        </div>
                        <p style="color: rgb(0,0,0);"><strong><em>Services de cabine de confiance dans le monde entier</em></strong><br></p>
                        <p>Cabs en ligne, les fonceurs. Nous sommes une entreprise technologique qui connecte les mondes physique et numérique pour aider à faire bouger les choses d'une simple pression sur un bouton. Parce que nous croyons en un monde où le mouvement devrait être accessible. Vous pouvez donc vous déplacer et gagner de l'argent en toute sécurité. D'une manière durable pour notre planète. Chez Cabs Online, la poursuite de la réimagination n'est jamais terminée, ne s'arrête jamais et ne fait que commencer.

                        </p><a class="btn btn-primary" role="button" href="booking.html" style="margin-left: -4px;background: rgb(59,59,59);">Book A RIDE</a>
                    </div><!-- End: Intro -->
                </div>
                <div class="col-sm-4">
                    <!-- Start: Smartphone -->
                    <div class="d-none d-md-block phone-mockup taxi-about-img"><img class="device" src="assets/img/taxi-1.jpg">
                        <div class="screen"></div>
                    </div><!-- End: Smartphone -->
                </div>
            </div>
        </div>
    </section>
    <!-- End: Highlight Phone -->
    <section data-aos="zoom-in" data-aos-duration="1150" data-aos-once="true" class="py-5">
        <h3 id="seen" class="text-center">As Seen On</h3>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3"><a href="https://www.google.com/" target="_blank"><img class="img-fluid d-block mx-auto" src="assets/img/clients/google.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="https://www.facebook.com/" target="_blank"><img class="img-fluid d-block mx-auto" src="assets/img/clients/facebook.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="https://www.airbnb.co.nz/" target="_blank"><img class="img-fluid d-block mx-auto" src="assets/img/clients/airbnb.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="https://www.netflix.com/" target="_blank"><img class="img-fluid d-block mx-auto" src="assets/img/clients/netflix.jpg"></a></div>
            </div>
        </div>
    </section>
    <!-- Start: Highlight Phone -->
    <section class="highlight-phone" style="background: rgb(255,192,0);">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Start: Intro -->
                    <div class="intro">
                        <h5 style="color: rgb(0,0,0);">Join The Team<br></h5>
                        <h2><strong>Become Our Driver, Work On Your Term!</strong><br></h2>
                    </div><!-- End: Intro -->
                </div>
                <div class="col-sm-4">
                    <a class="btn btn-lg btn-dark driver-btn" role="button" href="register.php">Become A Driver</a>
                </div>
            </div>
        </div>
    </section>
    
    <div class="col-lg-5">
                    <section id="map-head" class="map-clean" id="ride-map" style="margin-top: 70px;">
                        <div class="container">
                            <div class="intro">
                                <h3 class="text-center">Location </h3>
                                <p class="text-center">Une carte pour votre commodité </p>
                            </div>
                        </div><iframe allowfullscreen frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB3YYb5sin7I3vXQiaX02RIp9zQn91ClLY&amp;q=Point rond centre ville atar&amp;zoom=15"
                            width="200%" height="450"></iframe>
                    </section>
</div>
    <!-- End: Highlight Phone -->
    <section id="services" style="padding-top: 90px;background: #111111;color: rgb(255,255,255);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: -20px;">
                    <h3 class="text-muted section-subheading"><i class="fa fa-dot-circle-o" style="background: rgba(254,209,54,0);color: rgb(254,209,54);"></i><br><strong>Cabs Online benefit list</strong><br></h3>
                    <h2 class="text-uppercase section-heading benefit-space">Why choose us</h2>
                </div>
            </div>
            <div class="row text-center align-up">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fas fa-child fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Safety Guarantee</h4>
                    <p class="text-muted">Tell your loved ones where you are. Keep your contact details confidential. Get help at the tap of a button.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-drivers-license-o fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Clear Drivers</h4>
                    <p class="text-muted">All our drivers with background checks to real-time verification, safety is a top priority every single day.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-dollar fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Cheap Rate</h4>
                    <p class="text-muted">Compare prices on every kind of ride, from daily commutes to special evenings out.</p>
                </div>
            </div>
        </div>
    </section>

    <?php

/*
|--------------------------------------------------------------------------
| Require frontend/footer
|--------------------------------------------------------------------------
|
| include file
| frontend/footer
| for displaying the footer
|
*/

    require 'includes/frontend/footer.php';

    ?>

    <script>
        let map = new google.maps.Map(document.getElementById("maps"), {
            mapId: '8e0a97af9386fef',
            center: { lat: 0.4764885246421527, lng: 101.38129313475055}, 
            zoom: 17,
            disableDefaultUI: true
        });
        // 18.113821, -15.999571
        const markers = [
            ["<b>Hendy Saputra 2003113132</b>",20.518596023025236, -13.053905340657941, "./img/male.svg", 38, 31, google.maps.Animation.BOUNCE], 
            ["<b>Seteven 2003114203</b>", 20.518186559047493, -13.053701492778698, "./img/boy.svg", 26, 29, google.maps.Animation.BOUNCE], 
            ["<b>Elvina Carolina 2003111123</b>",20.518814570832536, -13.0531033601883, "./img/girl.svg", 24, 30, google.maps.Animation.BOUNCE],
            ["<marquee><b>centre du ville atar mauritanie </hb></marquee>", 20.51859351097246, -13.05389058850339, "./img/flag.svg", 25, 31, google.maps.Animation.DROP]
        ]; 

        for (let i = 0; i < markers.length; i++) {
            const currMarker = markers[i];

            const marker = new google.maps.Marker({
                position: {lat: currMarker[1], lng: currMarker[2]},
                map,
                title: currMarker[0],
                icon: {
                    url: currMarker[3],
                    scaledSize: new google.maps.Size(currMarker[4], currMarker[5])
                },
                animation: currMarker[6]
            });

            const infowindow = new google.maps.InfoWindow({
                content: currMarker[0]
            });

            if (i == 3) {
                infowindow.open(map, marker);
            }

            marker.addListener("click", () => {
                infowindow.open(map, marker);
            })
        }
    </script>

</body>

</html>