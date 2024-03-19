<?php
    include "header.php";
    include 'calendar.php';
    $calendar = new Calendar();
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/book.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/calendar.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">
    <div class="img_container">
            <div class="overlay">
               
            </div>
        </div>

        <div class="container sec1">
                <div class="cent">
                    <div class="img">
                        <div class="car_img">
                            <img src="images\lrjol.png" alt="">
                        </div>
                    </div>
                    <form action=" ">
                        
                       
                    <div class="other">
                        <h1>TOYOTA CAMRY</h1>
                        <h4>Plate no: QRT983LK</h4>
                        <div class="star_array">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        </div>
                       
                        <div class="calendar_box">
                        <?php
            
                         echo $calendar->show();
                           ?>
                        </div>

                        <h4 id="loc">location</h4>

                        <input type="text">

                        <h4>select a time</h4>

                        <input type="time">

                        <button>book</button>
                    </div></form>
                </div>
        </div>

        <div class="container sec2">
            
        </div>
    </div>
</body>
</html>






