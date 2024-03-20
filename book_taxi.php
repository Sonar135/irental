<?php
    include "header.php";
    include 'calendar.php';
    $calendar = new Calendar();
?>



<?php
    if (isset($_GET['id'])) {

        $id=$_GET["id"];

    }



    $query=mysqli_query($conn,"SELECT * from taxi_cars where id='$id'");{
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
        
        $location=$_POST["location"];
        $time=$_POST["time"];
        $date=$_POST["date"];

        if($location=="" or $time=="" or $date== ""){
            echo '  <div class="message" id="message">
           please fill all fields
        </div>';
        }

        else{
            $query=mysqli_query($conn,"INSERT into taxi_services (customer, car_name, plate, arrival_date, arrival_time, location)
            values('$email', '$car_name', '$plate_no', '$date', '$time', '$location')");

            if($query){
               header("location: account.php?booked");
            }
        }
    }
?>



<?php
    $output="";
    $get=mysqli_query($conn, "SELECT * from taxi_cars where id!='$id' order by rand() limit 3");
    while($row2=mysqli_fetch_array($get)){
        $car_names= $row2["car_name"];
        $car_ids=$row2["id"];
        $plate_nos=$row2["plate_no"];
        $driver_nos=$row2["driver_no"];
        $prices=$row2["price"];
        $images=$row2["image"];


        $output.= '
        <div class="card">
        <div class="car">
            <img src="./uploads/'.$images.'" alt="">
        </div>

        <div class="star_array">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        </div>

        <div class="data">
            <h4>'.$car_names.'</h4>
        </div>

        <div class="data">
            <h4>Plate no: '.$plate_nos.'</h4>
        </div>

        <div class="data">
            <h4>Price: ₦'.$prices.'/hr</h4>
        </div>

        <div class="data">
            <h4>phone number: '.$driver_nos.'</h4>
        </div>

        <a href="book_taxi.php?id='.$car_ids.'" class=""><button>ORDER</button></a>
    </div>
        ';
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
            <div class="cent">
           <h1>vehicles</h1>
                    <div class="navigation">
                        <a href="main.php">Home</a>
                        <i class="fa-solid fa-right-long"></i>
                        <h4>Vehicles</h4>
                    </div>
           </div>
            </div>
        </div>

        <div class="container sec1">
                <div class="cent">
                    <div class="img">
                        <div class="car_img">
                            <img src="./uploads/<?php echo $image?>" alt="">
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

                        <h4 id="loc" >location</h4>

                        <input type="text" name="location">

                        <h4>select a time</h4>
                        <input type="radio" name="date" hidden value="" checked>
                        <input type="time" name="time">

                        <button name="book">book</button>
                    </div></form>
                </div>
        </div>

        <div class="container sec2">
            <div class="cent">
            <div class="taxis">
                <?php echo $output?>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>






