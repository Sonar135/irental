<?php
    include "header.php";
?>



<?php

if(isset($_GET["booked"])){
  echo '  <div class="message" id="message">
  Booked Successfully
</div>';
}

$taxi="";


  $get_taxi=mysqli_query($conn, "SELECT * FROM taxi_services where customer='$email'");

  while($taxi_row=mysqli_fetch_assoc($get_taxi)){
    $car_name=$taxi_row["car_name"];
    $plate=$taxi_row["plate"];
    $date=$taxi_row["arrival_date"];
    $time= $taxi_row["arrival_time"];
    $location= $taxi_row["location"];


   



    $taxi.='    <tr>
 
    <td><h3>'.$car_name.'</h3> </td>
    <td><h3>'.$plate.'</h3></td>
    <td><h3>'.$date.' </h3></td>
    <td><h3>'.$time.'</h3></td>
    <td><h3>'.$location.'</h3></td>

  
  </tr>';
  }


?>










<?php

$cargo="";


  $get_cargo=mysqli_query($conn, "SELECT * FROM cargo_services where customer='$email'");

  while($taxi_row=mysqli_fetch_assoc($get_cargo)){
    $car_name=$taxi_row["car_name"];
    $plate=$taxi_row["plate"];
    $date=$taxi_row["arrival_date"];
    $time= $taxi_row["arrival_time"];
    $pick_location= $taxi_row["pickup_location"];
    $drop_location= $taxi_row["drop_location"];


   



    $cargo.='    <tr>
 
    <td><h3>'.$car_name.'</h3> </td>
    <td><h3>'.$plate.'</h3></td>
    <td><h3>'.$date.' </h3></td>
    <td><h3>'.$time.'</h3></td>
    <td><h3>'.$pick_location.'</h3></td>
    <td><h3>'.$drop_location.'</h3></td>

  
  </tr>';
  }


?>



<?php

$rental="";


  $get_rental=mysqli_query($conn, "SELECT * FROM rental_services where customer='$email'");

  while($taxi_row=mysqli_fetch_assoc($get_rental)){
    $car_name=$taxi_row["car_name"];
    $plate=$taxi_row["plate"];
    $start_date=$taxi_row["start_date"];
    $end_date=$taxi_row["end_date"];
    $location= $taxi_row["location"];


   



    $rental.='    <tr>
 
    <td><h3>'.$car_name.'</h3> </td>
    <td><h3>'.$plate.'</h3></td>
    <td><h3>'.$start_date.' </h3></td>
    <td><h3>'.$end_date.' </h3></td>
    <td><h3>'.$location.'</h3></td>

  
  </tr>';
  }


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/account.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">
    <div class="img_container">
            <div class="overlay">
            <div class="cent">
           <h1>Account</h1>
                    <div class="navigation">
                        <a href="main.php">Home</a>
                        <i class="fa-solid fa-right-long"></i>
                        <h4>Account</h4>
                    </div>
           </div>
            </div>
        </div>

                <div class="container sec1">
                    <div class="cent">
                <h1>Booked Taxi Services</h1>

            <section>
  <!--for demo wrap-->

  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Car</th>
          <th>Plate no</th>
          <th>Pick up date</th>
          <th>Pick up time</th>
          <th>Location</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody id="lock">
      <tr>
 
        <?php echo $taxi?>

  </tr>




      </tbody>
    </table>
  </div>
</section>
                    </div>
                </div>


                <div class="container sec2">
                    <div class="cent">
                                      <h1>Booked cargo Services</h1>

            <section>
  <!--for demo wrap-->

  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Car</th>
          <th>Plate no</th>
          <th>Pick up date</th>
          <th>Pick up time</th>
          <th>pickup Location</th>
          <th>drop Location</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody id="lock">
      <tr>
 
        <?php echo $cargo?>

  </tr>




      </tbody>
    </table>
  </div>
</section>
                    </div>
                </div>


                <div class="container sec3">
                    <div class="cent">
                <h1>Booked Rental Services</h1>

            <section>
  <!--for demo wrap-->

  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Car</th>
          <th>Plate no</th>
          <th>commencement date</th>
          <th>Expiry date</th>
          <th>Address</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody id="lock">
      <tr>
 
        <?php echo $rental?>

  </tr>




      </tbody>
    </table>
  </div>
</section>
                    </div>
                </div>

           </div>


           <?php
            include "footer.php";
           
           ?>
  
</body>
</html>