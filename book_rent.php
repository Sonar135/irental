<?php
    include "header.php";
    include 'calendar.php';
    $calendar = new Calendar();
?>




<?php
    if (isset($_GET['id'])) {

        $id=$_GET["id"];

    }



    $query=mysqli_query($conn,"SELECT * from rental_cars where id='$id'");{
        $row=mysqli_fetch_assoc($query);
        $car_name= $row["car_name"];
        $plate_no=$row["plate_no"];
        $price=$row["price"];
        $image=$row["image"];
    }
?>





<?php

    if(isset($_POST["book"])){
        
        $location=$_POST["location"];
        $start_date=$_POST["start_date"];
        $end_date=$_POST["end_date"];


        if($location=="" or $start_date=="" or $end_date== ""){
            echo '  <div class="message" id="message">
           please fill all fields
        </div>';
        }

        else{
            $query=mysqli_query($conn,"INSERT into rental_services (customer, car_name, plate,  start_date, end_date, location)
            values('$email', '$car_name', '$plate_no', '$start_date', '$end_date', '$location')");

            if($query){
                if($query){
                    header("location: account.php?booked");
                 }
            }
        }
    }
?>



<?php
    $rental="";
    $get_rental=mysqli_query($conn, "SELECT * from rental_cars where id!='$id' order by rand() limit 3");
    while($rent_row=mysqli_fetch_array($get_rental)){
        $car_names= $rent_row["car_name"];
        $car_ids=$rent_row["id"];
        $plate_nos=$rent_row["plate_no"];
        $prices=$rent_row["price"];
        $images=$rent_row["image"];


        $rental.= '
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
            <h4>Price: ₦'.$prices.'/day</h4>
        </div>

        
      

       <a href="book_rent.php?id='.$car_ids.'" class=""> <button>ORDER</button></a>
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

        <div class="container sec1" id="rent">
                <div class="cent">
                    <div class="img" >
                        <div class="car_img" id="rent_img">
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
                       
                     

                        <h4 id="loc">Address</h4>

                        <input type="text" name="location">

                        <div class="dates">

                        <div class="start">
                        <h4>start date</h4>

                        <input type="date" name="start_date">
                        </div>
                       

                        <div class="end">
                        <h4>end date</h4>

                        <input type="date" name="end_date">
                        </div>


                    
                        </div>

                      

                        <button name="book">book</button>
                    </div></form>
                </div>
        </div>

        <div class="container sec2" >
        <h1>MORE VEHICLES</h1>
            <div class="cent">
            <div class="taxis">
                  <?php echo $rental?>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
</body>
</html>






