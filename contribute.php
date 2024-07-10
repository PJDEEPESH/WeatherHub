<?php


$conn = mysqli_connect("localhost", "root", "", "");
// if ($conn){
//     echo "Connection established<br>";
// }
// else{
//     echo "Connection not established<br>";
// }

$username = $_POST["username"];
$mobile = $_POST["phoneNo"];
$city = $_POST["city"];
$email = $_POST["emailId"];
$description = $_POST["textarea"];
$github = $_POST["githubLink"];
$linkedin = $_POST["linkedin"];
$profession = $_POST["profession"];


// $query1="create database weatherhub";
// if($conn->query($query1)){
//     echo "Database created";
// }
// else{
//     echo "Database not created";
// }

$query2 = "use weatherhub";

$conn->query($query2);

//     echo "Using Weatherhub<br>";
// } else {
//     echo "Error Occured<br>";
// }

// $query3 = "create table contributions (username varchar(30),mobileno int(13),city varchar(20),description text,githuburl varchar(200),email varchar(200),profession varchar(200));";
// if($conn->query($query3)){
//     echo "Table created <br>";
// }
// else{
//     echo "Table not created <br>";
// }
// $query = "ALTER TABLE contributions ADD COLUMN linkedin VARCHAR(200)";
// $conn->query($query);


$query4 = "INSERT INTO contributions (username, mobileno, city, description, githuburl, linkedin, email, profession) VALUES ('$username', '$mobile', '$city', '$description', '$github', '$linkedin', '$email', '$profession')";
if ($conn->query($query4)) {
    ?>
    <!DOCTYPE html>

    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Arvo&family=Libre+Baskerville&family=Open+Sans:wght@500&family=Playfair+Display:wght@700&family=Roboto+Slab&family=Signika+Negative:wght@300&display=swap');

            *{
                user-select: none;
            }

            h3 {
                font-family: 'Libre Baskerville', serif;
            }

            p {
                font-size: large;
                font-family: 'Roboto Slab', serif;
            }

            .thankyou {
                background-color: #b4dbba;
                border: 1px solid green;
            }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="./assets/favicon_io/site.webmanifest">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <title>Thank you</title>
    </head>

    <body>
    <header class="p-3 bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <div class="logo d-flex">
                    <a href="./home.html" style="cursor: pointer; text-decoration: none;"><span class="fs-1"
                            style="color: orange;font-family:'Playfair Display', serif;text-shadow: 0 0 1px white;">weather
                        </span><span class="fs-1"
                            style="color: yellow;font-family:'Playfair Display', serif;text-shadow: 0 0 1px white;">
                            hub</span></h1></a>
                </div>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-4 px-5 my-2 justify-content-center mb-md-0">
                    <li style="margin-left: 2px;"><a href="./home.html" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="./home.html#features" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="./home.html#headlines" class="nav-link px-2 text-white">Headlines</a></li>
                    <li><a href="./home.html#services" class="nav-link px-2 text-white">Services</a></li>
                    <li><a href="./faqs.html" class="nav-link px-2 text-white">FAQs</a></li>
                </ul>

                <div class="text-end d-flex gap-3 justify-content-center align-items-center">
                    <a style="text-decoration: none;color:aliceblue"
                        href="https://www.google.com/maps/place/@14.3353797,78.5373097,17z?entry=ttu" target="_blank"
                        class=""><img src="./assets/location.png" width="15px" height="20px"><span
                            style="margin-left: 6px;" title="Click here to visit IIIT">IIIT RK Valley ,
                            Vempalli</span></a>
                    <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" id="offCanvas" aria-controls="offcanvasRight">
                        <img src="./assets/notification.png" width="30px" height="30px"></button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Notifications</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <hr>
                            Up to now , there are no notifications recieved yet.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <div class="container py-5 text-center">
            <div class="p-5 thankyou">
                <h3>Thank you for your contribution</h3>
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 col-sm-10">
                        <div class="container">
                            <p align="left">We're over the moon with gratitude for your contribution to our weather
                                website! Your ideas are pouring in
                                like
                                raindrops, nurturing our platform to grow and evolve. Just as weather patterns change, your
                                input is
                                changing
                                the way we operate. Thank you!
                            </p>
                            <p align="right">
                            <span style="margin-right:80px">With love ❤️,</span><br>
                            <a href="./home.html" style="cursor: pointer; text-decoration: none;"><span class="fs-1"
                            style="color: orange;font-family:'Playfair Display', serif;text-shadow: 2px 2px 1px black;">weather
                        </span><span class="fs-1"
                            style="color: yellow;font-family:'Playfair Display', serif;text-shadow: 2px 2px 1px black;">
                            hub</span></h1></a></p>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
                <div class="justify-content-center">
                    <a type="button" class="btn btn-outline-primary btn-lg" href="./home.html">Go
                        Home</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a type="button" class="btn btn-outline-success btn-lg" href="./main.html">Explore</a>
                </div>
            </div>
        </div>

        <?php
} else {
    echo "Values not inserted";
}

?>

</body>

<footer class="text-center text-white bg-dark">
    <div class="bg-dark">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <h1 class="my-3"><span class="fs-1"
                    style="color: orange;font-family:'Playfair Display', serif;text-shadow: 0 0 2px black;">weather
                </span><span class="fs-1"
                    style="color: yellow;font-family:'Playfair Display', serif;text-shadow: 0 0 2px black;">
                    hub</span></h1>

            <ul class="nav justify-content-center border-bottom pb-3 mb-3 gap-2">
                <li class="nav-item"><a href="./home.html" class="btn btn-outline-light">Home</a></li>
                <li class="nav-item"><a href=".home.html#features" class="btn btn-outline-light">Features</a></li>
                <li class="nav-item"><a href="./home.html#headlines" class="btn btn-outline-light">Headlines</a></li>
                <li class="nav-item"><a href="./faqs.html" class="btn btn-outline-light">FAQs</a></li>

                <a class="btn btn-outline-secondary" id="contribute" href="./contribute.html">Contribute to Us...</a>
            </ul>
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-light btn-floating m-1" href="https://www.facebook.com/manikumarpula"
                    target="_blank" role="button" title="Facebook"><img src="./assets/facebook.svg"></a>

                <!-- Twitter -->
                <a class="btn btn-light btn-floating m-1" href="https://x.com/Manihemsworth" role="button"
                    target="_blank" title="Twitter"><img src="./assets/twitter.svg"></a>

                <!-- Google -->
                <a class="btn btn-light btn-floating m-1" href="https://wa.me/919866773003" role="button"
                    target="_blank" title="WhatsApp"><img src="./assets/whatsapp.svg"></a>

                <!-- Instagram -->
                <a class="btn btn-light btn-floating m-1" href="https://www.instagram.com/always_hemsworth?igsh=M245OW95djFsOXhm"
                    target="_blank" role="button" title="Instagram"><img src="./assets/instagram.svg"></a>

                <!-- Linkedin -->
                <a class="btn btn-light btn-floating m-1"
                    href="https://www.linkedin.com/in/manikumarpula/" target="_blank" role="button"
                    title="LinkedIn"><img src="./assets/linkedin.svg"></a>

                <!-- Github -->
                <a class="btn btn-light btn-floating m-1" href="https://github.com/manikumarpula" role="button"
                    target="_blank" title="Github"><img src="./assets/github.svg"></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Company,Inc: Discover the Unmatched Trust of 98% Accurate Weather Forecasts
        </div>
        <!-- Copyright -->
    </div>
    <!-- End of .container -->
</footer>
</html>