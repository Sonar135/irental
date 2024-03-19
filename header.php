
<?php
  ob_start();
  session_start();
  include 'connect.php';
  if(isset($_SESSION["id"])){
    $email=$_SESSION['email'];
    $user_phone=$_SESSION['phone'];
    $user_name=$_SESSION['name'];
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/b782cf5553.js" crossorigin="anonymous"></script>  
    <link rel="icon" type="image/x-icon" href="images\kisspng-babcock-university-university-of-ibadan-academic-d-5b1c90eb26da71.7889147215285987631592-removebg-preview.png">
    <link rel="stylesheet" href="css/header.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irental</title>
</head>
<body>

<div class="loader">
  <img src="images\8-removebg-preview.png" alt="">
</div>
    <div class="nav">
      <div class="upper_nav">
        <div class="upper_cent">
          <div class="contact">
            <div class="contact_card " id="address">
              <div class="ico">
              <i class="fa-solid fa-location-dot"></i>
              </div>

             Babcock University
            </div>

            <div class="contact_card phone" >
              <div class="ico">
              <i class="fa-solid fa-phone"></i>
              </div>

            08109495127
            </div>

            <div class="contact_card email" >
              <div class="ico">
              <i class="fa-regular fa-envelope"></i>
              </div>

          vefidi135@gmail.com
            </div>

          
          </div>

          <div class="social">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-google-plus-g"></i>
          <i class="fa-brands fa-pinterest"></i>
          </div>
        </div>
      </div>



      <div class="lower_nav">
        <div class="lower_cent">
          <div class="logo">

          </div>

          <div class="menu">
            <ul>
              <li>
              <a href="main.php"> Home</a> 
              </li>

              <li>
               <a href="about.php">About Us</a> 
              </li>

              <li>
               <a href="vehicles.php"> Vehicles</a>
              </li>

              <li>
                <a href="blog.php">     Blog</a>
              </li>

              <li>
             <a href="">  Contact</a>
              </li>

            <?php
             if(isset($_SESSION["id"])){
            echo ' <li class=""> <a href="logout.php"> Logout</a></li>';
            }

            else{
              echo ' <li class=""><a href="auth.php">   Register/Login</a></li>';
            }
            ?>

            
            </ul>
          </div>
        </div>
      </div>
    </div>
</body>
<script src="js/min.js"></script>
<script src="js/dom.js"></script>

<script>
  $(window).on("load", ()=>{
    $(".loader").fadeOut("slow")
    $("body").css("overflow-y", "scroll");
  });
</script>
</html>






