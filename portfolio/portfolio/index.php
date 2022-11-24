<?php

// checking if the message is send
//if(isset($_POST['send'])){
    //$Name = $_POST['name'];
    //$Email =  $_POST['email'];
    //$Subject =  $_POST['subject'];
    //$Message =  $_POST['message'];

    //$to             = "eshanasangeeth11@gmail.com";
    //$mail_subject   = "Message from website";
   // $email_body     = "Message drom contact us page of the web site: <br>";
    //$email_body     .= "<b>From:</b> {$Name} <br>";
    //$email_body     .= "<b>Subject:</b> {$Subject} <br>";
    //$email_body     .= "<b>Message:</b><br>" . nl2br(strip_tags($Message));
   
    //$header         = "From: {$Email}\r\nContent-Type: text/html;";

    //$send_mail_result = mail($to,$mail_subject,$email_body,$header);

    //if($send_mail_result){
       // echo "Message Successfully Sent..!";
  //  }else{
       // echo "Message Unsuccessfully Sent..!";
   // }

//}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio Website</title>

    <!--add a title icon-->
	<link rel = "shortcut icon" type="images/JPG" href = "port.jpg" />
    
    <link rel = "stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class = "navbar">
        <div class="max-width">
            <div class="logo"> <a href="#"> Portfo<span>lio.</span></a> </div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contacts</a></li>
                
            </ul>
        <div class="menu-btn">
            <i class="fa fa-bars"></i>
        </div>
        </div>
    </nav>

        <!-- home section starts -->
        <section class="home" id="home">
            <div class="max-width">
               <div class="home-content">
                   <div class="text-1"> Hello! My Name is </div>
                   <div class="text-2"> Eshana Sangeeth </div>
                   <div class="text-3"> And I'm a <span class="typing"></span></div>
                   <a href = "#"> Hire me </a>
            
               </div>
            </div>
        </section>

         <!-- about section starts -->
            <section class="about" id="about">
                <div class="max-width">
                        <h2 class="title"> About me </h2>
                        <div class="about-content">
                                <div class="column left">
                                    <img src="Images/profile.JPG" alt="">
                                </div>
                                    <div class="column right">
                                        <div class="text">I'm Eshana and I'm a <span class="typing-2"></span> </div>
                                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                                optio, eaque rerum! Provident similique accusantium nemo autem. 
                                            </p>
                                        <a href="download.php?file=cv" target="_thapa"> Download CV </a>

                                    </div>
                            
                        </div>
                </div>
            </section>
            

            <!-- services section starts -->
            <section class="services" id="services">
                <div class="max-width">
                        <h2 class="title"> My Services </h2>
                        <div class="serv-content">
                            <div class = "card">
                                <div class = "box">
                                    <i class='fas fa-paint-brush'></i>
                                    <div class="text"> Web Design </div>
                                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo sed quos eligendi pariatur laborum eius!</p>
                                </div>
                            </div>
                            
                            <div class = "card">
                                <div class = "box">
                                    <i class="fa-solid fa-laptop-code"></i>
                                    <div class="text"> Programming </div>
                                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo sed quos eligendi pariatur laborum eius!</p>
                                </div>
                            </div>

                            <div class = "card">
                                <div class = "box">
                                    <i class='fas fa-code'></i>
                                    <div class="text"> App Develop </div>
                                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo sed quos eligendi pariatur laborum eius!</p>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
            
             <!-- skill section starts -->
             <section class="skills" id="skills">
                 <div class="max-width">
                     <h2 class="title"> My Skills </h2>
                     <div class="skills-content">
                        <div class="column left">
                             <div class="text"> My Creative Skills & Experiences. </div>
                             <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad velit sequi voluptate non vel laudantium labore ea cupiditate quaerat! Natus quibusdam qui ullam laborum assumenda error aliquid ut, illum debitis! </p>
                             <a href="#"> Read more </a>
                            
                        </div>
                        <div class="column right">
                            <div class="bars">
                                <div class="info">
                                    <span> HTML </span>
                                    <span> 90% </span>
                                </div>  
                                <div class="line html"></div>  
                            </div>

                            <div class="bars">
                                <div class="info">
                                    <span> CSS </span>
                                    <span> 60% </span>
                                </div>
                                <div class="line css"></div>      
                            </div>

                            <div class="bars">
                                <div class="info">
                                    <span> JavaScript </span>
                                    <span> 55% </span>
                                </div>    
                                <div class="line javascript"></div>  
                            </div>

                            <div class="bars">
                                <div class="info">
                                    <span> PHP </span>
                                    <span> 50% </span>
                                </div>  
                                <div class="line php"></div>    
                            </div>

                            <div class="bars">
                                <div class="info">
                                    <span> MySQL </span>
                                    <span> 70% </span>
                                </div>   
                                <div class="line mysql"></div>   
                            </div>

                            <div class="bars">
                                <div class="info">
                                    <span> Java </span>
                                    <span> 40% </span>
                                </div> 
                                <div class="line java"></div>     
                            </div>

                            <div class="bars">
                                <div class="info">
                                    <span> Power Apps </span>
                                    <span> 45% </span>
                                </div> 
                                <div class="line powerapps"></div>     
                            </div>

                            <div class="bars">
                                <div class="info">
                                    <span> Power BI </span>
                                    <span> 50% </span>
                                </div> 
                                <div class="line powerbi"></div>     
                            </div>

                        </div>

                     </div>
                 </div>

             </section>
       
        <!-- teams section starts -->
        <section class="teams" id="teams">
            <div class="max-width">
                <h2 class="title"> My Teams </h2>
                <div class="teams-content">
                    <div class="carousel owl-carousel">
                        <div class="card">
                            <div class="box">
                                <img src="images/profile 1.jfif" alt="">
                                <div class="text"> David Jane </div>
                                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error culpa, hic maxime illum iusto accusamus ipsa repellat enim fuga corrupti delectus eos nesciunt similique autem totam mollitia vel praesentium corporis? </p>     
                            </div>
                        </div>

                        <div class="card">
                            <div class="box">
                                <img src="images/profile 2.jfif" alt="">
                                <div class="text"> David Jane </div>
                                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error culpa, hic maxime illum iusto accusamus ipsa repellat enim fuga corrupti delectus eos nesciunt similique autem totam mollitia vel praesentium corporis? </p>     
                            </div>
                        </div>

                        <div class="card">
                            <div class="box">
                                <img src="images/profile 3.jfif" alt="">
                                <div class="text"> David Jane </div>
                                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error culpa, hic maxime illum iusto accusamus ipsa repellat enim fuga corrupti delectus eos nesciunt similique autem totam mollitia vel praesentium corporis? </p>     
                            </div>
                        </div>

                        <div class="card">
                            <div class="box">
                                <img src="images/profile 4.jfif" alt="">
                                <div class="text"> David Jane </div>
                                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error culpa, hic maxime illum iusto accusamus ipsa repellat enim fuga corrupti delectus eos nesciunt similique autem totam mollitia vel praesentium corporis? </p>     
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="box">
                                <img src="images/profile 5.jfif" alt="">
                                <div class="text"> David Jane </div>
                                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error culpa, hic maxime illum iusto accusamus ipsa repellat enim fuga corrupti delectus eos nesciunt similique autem totam mollitia vel praesentium corporis? </p>     
                            </div>
                        </div>

                        <div class="card">
                            <div class="box">
                                <img src="images/profile 6.jfif" alt="">
                                <div class="text"> David Jane </div>
                                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error culpa, hic maxime illum iusto accusamus ipsa repellat enim fuga corrupti delectus eos nesciunt similique autem totam mollitia vel praesentium corporis? </p>     
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- contacts section starts -->
        <section class="contact" id = "contact">
            <div class="max-width">
                <h2 class ="title"> Contact Me </h2> 
                <div class="contact-content">
                    <div class="column left">
                        <div class="text"> Get in Touch </div>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ratione, cumque nesciunt accusantium voluptas odio id asperiores. Aliquam quaerat voluptatum sit id ducimus magni autem necessitatibus sapiente, inventore atque quas!</p>
                        <div class="icons">
                            <div class="row">
                                <i class="fa fa-user"></i>
                                <div class="info">
                                    <div class="head"> Name </div>
                                    <div class = "sub-title"> Eshana Sangeeth </div>
                                </div>
                            </div>

                            <div class="row">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head"> Address </div>
                                    <div class = "sub-title"> Colombo, Srilanka. </div>
                                </div>
                            </div>

                            <div class="row">
                                <i class="fa fa-envelope"></i>
                                <div class="info">
                                    <div class="head"> Email </div>
                                    <div class = "sub-title"> eshanasangeeth11@gmail.com </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="column right">
                        <div class="text"> Message me </div>
                       
                        <form action="database.php" method="post">
                            <div class="fields">
                                <div class="field name">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>

                                <div class="field email">
                                    <input type="text" name="email" placeholder="Email" required>
                                </div>
                            </div>

                                <div class="field">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="field textarea">
                                    <textarea cols="30" rows="10" name="message" placeholder="Message" required></textarea>
                                </div>

                                <div class="button">
                                    <button type="submit" name="send"> Send Message </button>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

         <!-- footer section starts -->
         <footer>
             <span> Created By <a> EshSang </a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span> 
         </footer>



        <script src="script.js"></script>
</body>
</html>