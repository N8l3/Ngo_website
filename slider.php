<?php include"db.php";?>





        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <?php 
                        $sql=mysqli_query($conn,"SELECT * FROM slide");
                        $i=0;
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
                    <div class="carousel-item">
                        <div class="carousel-img">

                            <img src="img/myfiles/slider/<?php echo $row[1]; ?>"
                            style="min-height: 300px;" alt="Image">
                        </div>
                        <div class="carousel-text mt-lg-5 mb-lg-n5">
                            <h1 style="background-color: #E0E0E0; opacity: 0.5; color: black;"><?php echo $row[2]; ?></h1>
                          <!--   <p>
                               
                            </p> -->
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">Donate Now</a>
                                <!-- <a class="btn btn-custom btn-play" data-toggle="modal"  data-target="#videoModal">Watch Video</a> -->
                            </div>
                        </div>
                    </div>
                    <?php
                        $i++;
                         }
                    ?>
                
                </div>
            </div>
        </div>
        <!-- Carousel End -->


