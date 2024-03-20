<?php
    include "header.php";

    if(!isset($_SESSION["id"])){
        header("location: auth.php?contact");
       }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/contact.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="hero">
<div class="img_container">
            <div class="overlay">
            <div class="cent">
           <h1>Contact</h1>
                    <div class="navigation">
                        <a href="main.php">Home</a>
                        <i class="fa-solid fa-right-long"></i>
                        <h4>Contact</h4>
                    </div>
           </div>
            </div>
        </div>


    
    <div class="container auth">
            <div class="cent signup">
                <div class="left" id="super">
                    <div class="overlay">

                    </div>
                </div>

           <form action="" method="post" id="lock"   enctype="multipart/form-data">  <div class="right">
                    <h1>Contact Admin</h1>

                    <div class="n_e">
                        <input type="text" placeholder="Full Name" name="name" value="<?php echo $user_name?>">
                        <input type="email"  name="email" value="<?php echo $email?>" placeholder="email">

                    </div>

                    <div class="n_e">

                    <input type="text" placeholder="phone" name="end" value="<?php echo $user_phone?>">
                  

                    
                    
                    </div>

                  

                 
               
                        <textarea name="message" id="" cols="30" rows="10" placeholder=" message"></textarea>
                 

                    <button name="submit">submit</button>
                </div></form>  
            </div>



  
        </div>


     
</div>

       <?php 
        include "footer.php";
       ?>
</body>
</html>