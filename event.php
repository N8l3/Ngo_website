<?php include"header.php"; ?>        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Events</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Events</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Events</p>
                    <h2>Be ready for our upcoming charity events</h2>
                </div>
                <div class="row">
                    <?php 

                    $sql = $conn->query("SELECT * FROM event");
                    while($row = mysqli_fetch_array($sql)):

                     ?>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/myfiles/cause/<?php echo $row[1]; ?>" alt="Image">
                            <div class="event-content">
                     
                                <div class="event-text">
                                    <h3><?php echo $row[2]; ?></h3>
                            
                                    <a class="btn btn-custom col-12 " href="donate.php">Donate Now</a>
                                    <a class="btn btn-custom col-12 " href="gallery.php" >View Gallery</a> <!-- href="Food_Distribution.php" -->
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php endwhile; ?>

                      

                </div>
            </div>
        </div>
        <!-- Event End -->


        <!-- Footer Start -->
<?php include"footer.php"; ?>