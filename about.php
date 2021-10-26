<?php include"header.php"; ?>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <?php 
    $bg1 =$conn->query("SELECT * FROM `web_bg_img` WHERE id =1");
     $imbg1=mysqli_fetch_array($bg1);


      $bg2 =$conn->query("SELECT * FROM `web_bg_img` WHERE id =2");
     $imbg2=mysqli_fetch_array($bg2);

         ?>

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/myfiles/web_bg_img/<?php echo $imbg1[2]; ?>"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
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


<?php $row=NULL; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
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
                                <h3 class="facts-plus" data-toggle="counter-up">800</h3>
                                <p>Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">1000</h3>
                                <p>Edcuated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Awesome guys behind our charity activities</h2>
                </div>
                <div class="row">
                    <?php 
            $sql6 =$conn->query("SELECT * FROM team");
            while($team=mysqli_fetch_array($sql6)):
        ?> 
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/myfiles/teams/<?php echo $team['img']; ?>" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2><?php echo $team['name']; ?></h2>
                                <p><?php echo $team['post']; ?></p>
                                <div class="team-social">
                                    <a href="<?php echo $team['tw']; ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo $team['fb']; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?php echo $team['insta']; ?>"><i class="fab fa-instagram"></i></a>
                                    Warning: Trying to access array offset on value of type null in C:\Xampp8\htdocs\Ngo\team.php on line 41

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>



                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
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
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
<?php include"footer.php"; ?>

<?php 
$imbg1=NULL;
$imbg2=NULL;
// $imbg3=NULL;
// $imbg4=NULL;
?>
