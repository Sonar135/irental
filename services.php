<?php
    include "header.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/services.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">
    <div class="img_container">
            <div class="overlay">
            <div class="cent">
           <h1>Services</h1>
                    <div class="navigation">
                        <a href="main.php">Home</a>
                        <i class="fa-solid fa-right-long"></i>
                        <h4>Services</h4>
                    </div>
           </div>
            </div>
        </div>

        <div class="container sec1">
            <div class="cent">
                <div class="some_t">
                    <h1>Looking To Save More On Your Cab?</h1>
                    <h4>discover rental car rental options in nigeria with cardoor.</h4>
                    <h4>select from a range of car options</h4>

                   <a href="vehicles.php"> <button>Go Now</button></a>
                </div>

                <div class="img">
                    <img src="images\p90386151_highres-removebg-preview.png" alt="">
                </div>
            </div>
        </div>

        <div class="container sec1">
            <div class="cent">
                <div class="some_t">
                    <h1>Looking To Save More On Your Cargo?</h1>
                    <h4>discover rental car rental options in nigeria with cardoor.</h4>
                    <h4>select from a range of car options</h4>

                    <a href="vehicles.php"> <button>Go Now</button></a>
                </div>

                <div class="img" id="orange">
                    <img src="images\3d-rendering-orange-truck-for-cargo-transportation-on-white-background-with-shadow-2E4Y5DE-removebg-preview.png" alt="">
                </div>
            </div>
        </div>

        <div class="container sec1">
            <div class="cent">
                <div class="some_t">
                    <h1>Looking To Save More On Your Rent?</h1>
                    <h4>discover rental car rental options in nigeria with cardoor.</h4>
                    <h4>select from a range of car options</h4>

                    <a href="vehicles.php"> <button>Go Now</button></a>
                </div>

                <div class="img" id="red">
                    <img src="images\modern-family-hybrid-car-red-white-background-shadow-ground-d-rendering-118172674-removebg-preview.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <?php
        include "footer.php";
    ?>
</body>
</html>