       <!-- Footer Start -->
<?php include"db.php";?>


<?php 
    $sql =$conn->query("SELECT * FROM topnav");
    $row = mysqli_fetch_array($sql);
 ?>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>स्नेह समर्पण फाउंडेशन 
B-101 Mercury Chs. Ltd.
Behind Dipak Hospital
Miraraod East 
Thane-401107</p>
                            <p><i class="fa fa-phone-alt"></i>+91-<?php echo $row[1]; ?> / +91-9833242782</p>
                            <a href="mailto:<?php echo $row[2]; ?>"><p><i class="fa fa-envelope"></i><?php echo $row[2]; ?></p></a>
                            <div class="footer-social">
                                <a class="btn btn-custom" href="<?php echo $row[3]; ?>"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href="<?php echo $row[4]; ?>"><i class="fab fa-facebook-f"></i></a>
                                <!-- <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a> -->
                                <a class="btn btn-custom" href="<?php echo $row[6]; ?>"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href="<?php echo $row[5]; ?>"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="about.php">About Us</a>
                            <a href="contact.php">Contact Us</a>
                            <a href="team.php">Team</a>
                            <a href="event.php">Upcoming Events</a>
                            <a href="gallery.php">Gallery</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                   <!--  <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn btn-custom">Submit</button>
                                <label>Don't worry, we don't spam!</label>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>
           <!--  <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
