<?php include"header.php"; ?>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Gallery</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Gallery</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <!-- <p>Gallery</p> -->
                    <h2>Gallery</h2>
                </div>
                <div class="row">
<?php 

    $sql=mysqli_query($conn,"SELECT * FROM gallery");
            while($row=mysqli_fetch_array($sql)):
 ?>

                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/myfiles/portfolio/<?php echo $row[1]; ?>" alt="Image">
                            </div>
                        </div>
                    </div>

<?php endwhile; ?>

                </div>
            
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
<?php include"footer.php"; ?>