<?php
    include "header.php";
    include 'calendar.php';
    $calendar = new Calendar();
?>



<?php
    if (isset($_GET['id'])) {

        $id=$_GET["id"];

    }



    $query=mysqli_query($conn,"SELECT * from cargo where id='$id'");{
        $row=mysqli_fetch_assoc($query);
        $car_name= $row["car_name"];
        $plate_no=$row["plate_no"];
        $driver_no=$row["driver_no"];
        $price=$row["price"];
        $image=$row["image"];
    }
?>


<?php

    if(isset($_POST["book"])){
        
        $pick_location=$_POST["pick_location"];
        $drop_location=$_POST["drop_location"];
        $time=$_POST["time"];
        $date=$_POST["date"];

        if($pick_location=="" or $drop_location=="" or $time=="" or $date== ""){
            echo '  <div class="message" id="message">
           please fill all fields
        </div>';
        }

        else{
            $query=mysqli_query($conn,"INSERT into cargo_services (customer, car_name, plate, arrival_date, arrival_time, pickup_location, drop_location)
            values('$email', '$car_name', '$plate_no', '$date', '$time', '$pick_location', '$drop_location')");

            if($query){
                echo '  <div class="message" id="message">
                success
             </div>';
            }
        }
    }
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

        <div class="container sec1 car_sec">
                <div class="cent">
                    <div class="img">
                        <div class="car_img">
                            <img src="./cargo_images/<?php echo $image?>" alt="">
                        </div>
                    </div>
                    <form action="" method="post">
                        
                       
                    <div class="other">
                        <h1><?php echo $car_name?></h1>
                        <h4>Plate no: <?php echo $plate_no?></h4>
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

                        <h4 id="loc">pickup location</h4>

                        <input type="text" name="pick_location">

                        <h4 id="loc">Drop location</h4>

                        <input type="text" name="drop_location">

                        <h4>select a time</h4>

                        <input type="time" name="time">
                        <input type="radio" name="date" hidden value="" checked>
                        <button name="book">book</button>
                    </div></form>
                </div>
        </div>

        <div class="container sec2">
            <h1>MORE VEHICLES</h1>
            <div class="cent">
            <div class="taxis">
                    <div class="card">
                        <div class="car">
                            <img src="images\lrjol.png" alt="">
                        </div>

                        <div class="star_array">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        </div>

                        <div class="data">
                            <h4>Toyota camry</h4>
                        </div>

                        <div class="data">
                            <h4>Plate no: KRT110PR</h4>
                        </div>

                        <div class="data">
                            <h4>Price: ₦1000/hr</h4>
                        </div>

                        <div class="data">
                            <h4>phone number 08091934582</h4>
                        </div>

                        <button>ORDER</button>
                    </div>

                    <div class="card">
                    <div class="car">
                            <img src="images\lrjol.png" alt="">
                        </div>

                        <div class="star_array">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        </div>

                        <div class="data">
                            <h4>Toyota camry</h4>
                        </div>

                        <div class="data">
                            <h4>Plate no: KRT110PR</h4>
                        </div>

                        <div class="data">
                            <h4>Price: ₦1000/hr</h4>
                        </div>

                        <div class="data">
                            <h4>phone number 08091934582</h4>
                        </div>

                        <button>ORDER</button>
                        </div>

                        <div class="card">
                        <div class="car">
                            <img src="images\lrjol.png" alt="">
                        </div>

                        <div class="star_array">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        </div>

                        <div class="data">
                            <h4>Toyota camry</h4>
                        </div>

                        <div class="data">
                            <h4>Plate no: KRT110PR</h4>
                        </div>

                        <div class="data">
                            <h4>Price: ₦1000/hr</h4>
                        </div>

                        <div class="data">
                            <h4>phone number 08091934582</h4>
                        </div>

                        <button>ORDER</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>






