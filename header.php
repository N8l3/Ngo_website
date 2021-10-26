<?php include"db.php";?>


<?php 
    $sql =$conn->query("SELECT * FROM topnav");
    $row = mysqli_fetch_array($sql);
 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sneh Samarpan Foundation</title>
        <link rel="shortcut icon" href="img/myfiles/favicon (1).ico">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
       
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">



        <style type="text/css">


        <?php 
    $bg4 =$conn->query("SELECT * FROM `web_bg_img` WHERE id =4");
     $imbg4=mysqli_fetch_array($bg4);



         ?>
        .page-header{


             background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/myfiles/web_bg_img/<?php echo $imbg4[2]; ?>)no-repeat center fixed;
              background-size: cover;
        }

        </style>
        
    </head>

    <body>
   
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <a href="callto:+91-<?php echo $row[1]; ?>"><p>+91-<?php echo $row[1]; ?></p></a>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:<?php echo $row[2]; ?>"><p><?php echo $row[2]; ?></p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">

                            <div class="social">

                                <a href="<?php echo $row[3]; ?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo $row[4]; ?>"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?php echo $row[5]; ?>"><i class="fab fa-linkedin-in"></i></a>
                                <a href="<?php echo $row[6]; ?>"><i class="fab fa-instagram"></i></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand"><img src="img/myfiles/logo.png"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
<!-- <h4 style="color: #F22F05; text-align: center; font-weight: 600;">&nbsp;&nbsp;&nbsp;&nbsp;Sneh Samarpan Foundation</h4> -->
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <!-- <a href="causes.php" class="nav-item nav-link">Causes</a> -->
                        <a href="team.php" class="nav-item nav-link">Team</a>
                        <a href="event.php" class="nav-item nav-link">Events</a>
                        <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>

                        <!--<a href="login.php" class="nav-item nav-link fa fa-user">  Login</a>-->
                    </div>
                </div>
            </div>
        </div>

<!--  -->
<?php $row =NULL; ?>
