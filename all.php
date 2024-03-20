<?php
    include "header.php";
?>


<?php

    if(isset($_GET["taxi"])){

        $output="";
        $get=mysqli_query($conn, "SELECT * from taxi_cars order by rand()");
        while($row=mysqli_fetch_array($get)){
            $car_name= $row["car_name"];
            $car_id=$row["id"];
            $plate_no=$row["plate_no"];
            $driver_no=$row["driver_no"];
            $price=$row["price"];
            $image=$row["image"];
    
    
            $output.= '
            <div class="card">
            <div class="car">
                <img src="./uploads/'.$image.'" alt="">
            </div>
    
            <div class="star_array">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            </div>
    
            <div class="data">
                <h4>'.$car_name.'</h4>
            </div>
    
            <div class="data">
                <h4>Plate no: '.$plate_no.'</h4>
            </div>
    
            <div class="data">
                <h4>Price: ₦'.$price.'/hr</h4>
            </div>
    
            <div class="data">
                <h4>phone number: '.$driver_no.'</h4>
            </div>
    
            <a href="book_taxi.php?id='.$car_id.'" class=""><button>ORDER</button></a>
        </div>
            ';
        }
    }




    if(isset($_GET['rental'])){
        $output="";
        $get_rental=mysqli_query($conn, "SELECT * from rental_cars order by rand()");
        while($rent_row=mysqli_fetch_array($get_rental)){
            $car_name= $rent_row["car_name"];
            $car_id=$rent_row["id"];
            $plate_no=$rent_row["plate_no"];
            $price=$rent_row["price"];
            $image=$rent_row["image"];
    
    
            $output.= '
            <div class="card">
            <div class="car">
                <img src="./uploads/'.$image.'" alt="">
            </div>
    
            <div class="star_array">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            </div>
    
            <div class="data">
                <h4>'.$car_name.'</h4>
            </div>
    
            <div class="data">
                <h4>Plate no: '.$plate_no.'</h4>
            </div>
    
            <div class="data">
                <h4>Price: ₦'.$price.'/day</h4>
            </div>
    
            
          
    
           <a href="book_rent.php?id='.$car_id.'" class=""> <button>ORDER</button></a>
        </div>
            ';
        }
    }



    if(isset($_GET['cargo'])){
        $output="";
        $get_cargo=mysqli_query($conn, "SELECT * from cargo order by rand()");
        while($cargo_row=mysqli_fetch_array($get_cargo)){
            $car_name= $cargo_row["car_name"];
            $car_id=$cargo_row["id"];
            $plate_no=$cargo_row["plate_no"];
            $price=$cargo_row["price"];
            $image=$cargo_row["image"];
            $driver_no=$cargo_row["driver_no"];
    
    
            $output.= '
            <div class="card">
            <div class="car">
                <img src="./cargo_images/'.$image.'" alt="">
            </div>
    
            <div class="star_array">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            </div>
    
            <div class="data">
                <h4>'.$car_name.'</h4>
            </div>
    
            <div class="data">
                <h4>Plate no: '.$plate_no.'</h4>
            </div>
    
            <div class="data">
                <h4>Price: ₦'.$price.'/day</h4>
            </div>
    
    
            <div class="data">
                 <h4>phone number: '.$driver_no.'</h4>
            </div>
          
    
           <a href="book_cargo.php?id='.$car_id.'" class=""> <button>ORDER</button></a>
        </div>
            ';
        }
    }
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/all.css?v=<?php echo time();?>">
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
                <?php echo $output?>
            </div>
        </div>
    </div>

    <?php
        include "footer.php";
    ?>
</body>
</html>