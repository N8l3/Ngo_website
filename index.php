<?php include"header.php"; ?>
        <!-- Nav Bar End -->

<!-- slider -->


<?php include"slider.php"; ?>

<!-- slider end -->
<div class="details pb-4"  data-parallax="scroll" >
    <div class="container">
        <div class="row align-items-center">
             <div class="col-lg-4 col-sm-4 my">
                 <img class="rounded mx-auto d-block" style="min-width:200px; min-height: 200px; max-height: 200px; " src="img/myfiles/d.jpeg">
             </div>

             <div class="col-lg-8 col-sm-8">
                <div class="section-header col-lg-8 col-sm-12">
                    
                    <p class="text-center">
                        पं श्री पंकज मिश्रा
                    </p>
                    <p class="text-center">
                        राष्ट्रिय अध्यक्ष <br>
                       
                    </p>
                    <p class="text-center">
                         श्री राम जानकी एवं संवेदना फाउंडेशन
                    </p>
                    <h3 class="text-center">
                        स्नेह समर्पण फाउंडेशन के समस्त सम्मानित पदाधिकारियों को इस नेक पुण्य कार्यो के लिए ढेर सारी शुभकामनाये।
                    </h3>
                    
                </div>
             </div>
        </div>
    </div>
</div>
        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">


<?php 
     $bg1 =$conn->query("SELECT * FROM `web_bg_img` WHERE id =1");
     $imbg1=mysqli_fetch_array($bg1);


      $bg2 =$conn->query("SELECT * FROM `web_bg_img` WHERE id =2");
     $imbg2=mysqli_fetch_array($bg2);

      $bg3 =$conn->query("SELECT * FROM `web_bg_img` WHERE id =3");
     $imbg3=mysqli_fetch_array($bg3);

      $bg4 =$conn->query("SELECT * FROM `web_bg_img` WHERE id =4");
     $imbg4=mysqli_fetch_array($bg4);


 ?>

                        <div class="about-img" data-parallax="scroll" data-image-src="img/myfiles/web_bg_img/<?php echo $imbg1[2]; ?>"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>About Us</p>
                            <h2>Sneh Samarpan Foundation</h2>
                        </div>


                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-0">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-1">Belive</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

            <?php 

             $sql = $conn->query("SELECT *  FROM about");
             $row=mysqli_fetch_array($sql);

             ?>


                            <div class="tab-content">
                                <div id="tab-content-0" class="container tab-pane active text-justify">
                                    <?php echo $row[1]; ?>
                                </div>
                                <div id="tab-content-1" class="container tab-pane fade text-justify">
                                    <?php echo $row[2]; ?>
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade text-justify">
                                   <?php echo $row[3]; ?>
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade text-justify">
                                    <?php echo $row[4]; ?>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>We believe that we can save more lifes with you</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-diet"></i>
                            </div>
                            <div class="service-text">
                                <h3>
                                    
                                <?php 
                                
                                 $sql1 = $conn->query("SELECT * FROM `we_do` WHERE id=1");
                                 $we=mysqli_fetch_array($sql1);

                                 echo $we[1];
                                ?>

                                </h3>
                                <p class="text-justify">
                                <?php 
                                    echo $we[2];
                                ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-water"></i>
                            </div>
                            <div class="service-text">
                                <h3>
                                    
                                <?php 
                                
                                 $sql1 = $conn->query("SELECT * FROM `we_do` WHERE id=2");
                                 $we=mysqli_fetch_array($sql1);

                                 echo $we[1];
                                ?>

                                </h3>
                                <p class="text-justify">
                                <?php 
                                    echo $we[2];
                                ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                           <div class="service-text">
                                <h3>
                                    
                                <?php 
                                
                                 $sql1 = $conn->query("SELECT * FROM `we_do` WHERE id=3");
                                 $we=mysqli_fetch_array($sql1);

                                 echo $we[1];
                                ?>

                                </h3>
                                <p class="text-justify">
                                <?php 
                                    echo $we[2];
                                ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                           <div class="service-text">
                                <h3>
                                    
                                <?php 
                                
                                 $sql1 = $conn->query("SELECT * FROM `we_do` WHERE id=4");
                                 $we=mysqli_fetch_array($sql1);

                                 echo $we[1];
                                ?>

                                </h3>
                                <p class="text-justify">
                                <?php 
                                    echo $we[2];
                                ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                           <div class="service-text">
                                <h3>
                                    
                                <?php 
                                
                                 $sql1 = $conn->query("SELECT * FROM `we_do` WHERE id=5");
                                 $we=mysqli_fetch_array($sql1);

                                 echo $we[1];
                                ?>

                                </h3>
                                <p class="text-justify">
                                <?php 
                                    echo $we[2];
                                ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                           <div class="service-text">
                                <h3>
                                    
                                <?php 
                                
                                 $sql1 = $conn->query("SELECT * FROM `we_do` WHERE id=6");
                                 $we=mysqli_fetch_array($sql1);

                                 echo $we[1];
                                ?>

                                </h3>
                                <p class="text-justify">
                                <?php 
                                    echo $we[2];
                                ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/myfiles/web_bg_img/<?php echo $imbg2[2]; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">100</h3>
                                <p>Cities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">400</h3>
                                <p>Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">60</h3>
                                <p>Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">1000</h3>
                                <p>Education</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Popular Causes</p>
                    <h2>Let's know about charity causes around the world</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <?php 

                        $sq = $conn->query("SELECT * FROM cause");
                        while($r=mysqli_fetch_array($sq)):
                     ?>

                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/myfiles/cause/<?php echo $r[1]; ?>" alt="Image">
                        </div>
                       
                        <div class="causes-text mt-2">
                            <h3 class="text-center"><?php echo $r[2]; ?></h3>
                            <!-- <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p> -->
                        </div>
                        
                    </div>
                <?php endwhile; ?>
                   
                </div>
            </div>
        </div>
        <!-- Causes End -->
        
        
   
        <!-- Volunteer Start -->
        <div class="volunteer" data-parallax="scroll" data-image-src="img/myfiles/web_bg_img/<?php echo $imbg3[2]; ?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form action="functions.php" method="POST">
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Why you want to become a volunteer?" name="msg" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit" name="vol">Become a volunteer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>Let’s make a difference in the lives of others</h2>
                            </div>
                            <div class="volunteer-text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What people are talking about our charity activities</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <?php 

                    $sql = $conn->query("SELECT * FROM feed");
                    while($row = mysqli_fetch_array($sql)):
                    ?>

                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/myfiles/teams/<?php echo $row[1]; ?>" alt="Image">
                            <div class="testimonial-name">
                                <h3><?php echo $row[2]; ?></h3>
                                <p><?php echo $row[3]; ?></p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text-justify">
                                <?php echo $row[4]; ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <!-- Testimonial End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="contact-img">
                    <img src="img/myfiles/web_bg_img/<?php echo $imbg4[2]; ?>" alt="Image" style="object-fit: fill;">
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        <form action="functions.php" method="POST" name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" name="sub" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" name="msg" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <a class="btn btn-custom" type="submit" name="btn-ctn" href="mailto:info@snehsamarpanfoundation.com" id="sendMessageButton">Send Message</a>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->
<?php 
$imbg1=NULL;
$imbg2=NULL;
$imbg3=NULL;
$imbg4=NULL;
?>


 <?php include"footer.php"; ?>