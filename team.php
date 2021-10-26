<?php include"header.php"; ?>
        <!-- Nav Bar End -->
     
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Team Member</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Team</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
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


        <!-- Footer Start -->
<?php include"footer.php"; ?>