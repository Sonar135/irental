<?php

include "header.php";

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">
        <div class="container sec1">
            <div class="left_btn" data-carousel-button="prev">
            <i class="fa-solid fa-chevron-left" ></i>
            </div>

            <div class="right_btn" data-carousel-button="next">
            <i class="fa-solid fa-angle-right" ></i>
            </div>
            <div class="cent">
            <h1>THE AMAZING RIDE</h1>
            <div class="carousel_container">
            <div class="carousel">
                   

                   <div class="display" data-active>
                     <div class="text">
                         <div class="text_box">
                             <h1>SPEEDY</h1>
                             <h1>TAXI</h1>
                             <h1 class="space">₦2000/hr</h1>
                            <a href="vehicles.php"> <button>Book Now</button></a>
                         </div>
                     </div>
 
                     <div class="img">
                         <div class="car_img">
                             <img src="images\download.png" alt="">
                         </div>
                     </div>
                   </div>
 
                   <div class="display" data-active>
                     <div class="text">
                         <div class="text_box">
                             <h1>EFFICIENT</h1>
                             <h1>LOGISTICS</h1>
                             <h1 class="space">₦1500/hr</h1>
                            <a href="vehicles.php"> <button>Book Now</button></a>
                         </div>
                     </div>
 
                     <div class="img">
                         <div class="car_img">
                             <img src="images\download (2).png" alt="">
                         </div>
                     </div>
                   </div>
 
                   <div class="display" data-active>
                     <div class="text">
                         <div class="text_box">
                             <h1>RENT</h1>
                             <h1>WHEELS</h1>
                             <h1 class="space">₦9000/Day</h1>
                            <a href="vehicles.php"> <button>Book Now</button></a>
                         </div>
                     </div>
 
                     <div class="img">
                         <div class="car_img">
                             <img src="images\car1.png" alt="">
                         </div>
                     </div>
                   </div>
 
 
                 </div>
            </div>
             
            </div>
        </div>


        <div class="container sec2">
            <h1>OUR SERVICES</h1>

            <h4>We are offering a variety of cars, services, and partnerships to meet all your travel needs.</h4>
            <div class="cent">
                <div class="text_container">
                    <div class="service_card">
                        <div class="card_ico"><i class="fa-solid fa-key"></i></div>

                        <div class="service">Car Rental</div>

                        <div class="ser_desc">Flexible vehicle options for seamless travel experiences, anytime, anywhere.</div>
                    </div>

                    <div class="service_card">
                             <div class="card_ico"><i class="fa-solid fa-key"></i></div>

                        <div class="service">Taxi Service</div>

                        <div class="ser_desc">Efficient freight solutions for secure and timely delivery of goods.</div>
                        </div>
                </div>

                <div class="pic_cont">
                    <img src="images\car.png" alt="">
                </div>

                <div class="text_container right_side">
                <div class="service_card">
                        <div class="card_ico"><i class="fa-solid fa-key"></i></div>

                        <div class="service">Airport Transfers</div>

                        <div class="ser_desc">: Effortless pickups and drop-offs, connecting you seamlessly to your destination..</div>
                    </div>

                    <div class="service_card">
                             <div class="card_ico"><i class="fa-solid fa-key"></i></div>

                        <div class="service">Special Events</div>

                        <div class="ser_desc">Dedicated transport services for weddings, parties, and special occasions.</div>
                        </div>
                </div>
            </div>
        </div>


        <div class="container sec3">
            <div class="cent">
                <div class="why">
                    <h1>WHY CHOOSE US?</h1>

                    <div class="why_choose">
                    Get the lowest rental car deal and take advantage of our special deals while getting fast & quality service. Get started today!
                    </div>

                    <a href="vehicles.php"> <button>Book Now</button></a>
                </div>

                <div class="fluid_data">
                    <div class="data_box">
                        <div class="data data_1">
                            <h4>SAVE ON YOUR NEXT TRIP</h4>

                            <div class="fluid_cont">
                                <div class="fluid"></div>
                            </div>
                        </div>

                        <div class="data">
                            <h4>SAVE ON YOUR NEXT TRIP</h4>

                            <div class="fluid_cont">
                                <div class="fluid"></div>
                            </div>
                        </div>

                        
                        <div class="data">
                            <h4>SAVE ON YOUR NEXT TRIP</h4>

                            <div class="fluid_cont">
                                <div class="fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container sec4">
            <h1>MEET THE TEAM</h1>
            <div class="cent">
                <div class="team_card">
                    <h4>PETER DANIEL</h4>
                    <p>A student of Babcock University, known for their exceptional programming skills and deep understanding of computer science concepts.</p>
                    <div class="prof">
                    <i class="fa-regular fa-user"></i>
                    </div>
                </div>

                <div class="team_card">
                       <h4>CHUKWUELUGO. K</h4>
                    <p>Also a student of Babcock University, recognized for their artistic flair and keen eye for design. Bringing a unique blend of creativity.</p>
                    <div class="prof">
                    <i class="fa-regular fa-user"></i>
                    </div>
                    </div>

                    <div class="team_card">
                    <h4>OLUWATAYO .P</h4>
                    <p> Another student of Babcock University, revered for their strategic mindset and problem-solving abilities.They possess a knack for analyzing data and trends</p>
                    <div class="prof">
                    <i class="fa-regular fa-user"></i>
                    </div>
                    </div>
            </div>
        </div>
    </div>

    <?php
        include "footer.php";
    ?>
</body>
</html>