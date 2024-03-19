<?php
    include "header.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/auth.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="hero">
  <div class="container sec1">
        <div class="cent signup">
            <div class="pic">
                <div class="pic_cont">
                    <img src="images\download-removebg-preview.png" alt="">
                </div>
            </div>

            <div class="auth">
                <h1>Sign Up</h1>

                <div class="ne">
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                </div>
                <div class="ne">
                <input type="email" placeholder="Email">
                    <input type="text" placeholder="Phone no">
                    </div>
                    <div class="ne">
                    <input type="password" placeholder="password">
                    <input type="password" placeholder="confirm password">
                    </div>

                    <button>Sign Up</button>
                    <h4 class="has_acc">I have an account</h4>
            </div>
        </div>




        <div class="cent login">
            <div class="pic">
                <div class="pic_cont">
                    <img src="images\login car.png" alt="">
                </div>
            </div>

            <div class="auth">
                <h1>Sign Up</h1>

              
                <div class="ne">
                <input type="email" placeholder="Email">
 
                    </div>
                    <div class="ne">
                    <input type="password" placeholder="password">

                    </div>

                    <button>Login</button>
                    <h4 class="no_acc">I don't have an accoun</h4>
            </div>
        </div>
    </div>
  </div>
</body>
</html>