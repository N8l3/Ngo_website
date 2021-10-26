
<!doctype html>
<html lang="en-US">
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

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="Admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="Admin/assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="Admin/assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="Admin/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

	</head>
	<!--
		.boxed = boxed version
	-->
	<body>


		<div class="padding-10">
			<div class="text-center" >
						<div class="text-center">
							<img width="170px" class="img-thumbnail rounded mx-auto d-block" src="img/myfiles/logo.png">
						</div>
						<h3 class="h3 text-center text-uppercase" style="font-weight: 900;">
							Welcome To Sneh Samarpan Foundation</h3>
						
					</div>

			<div class="login-box">

				<!-- login form -->
				<form action="process.php" method="post" class="sky-form boxed">
					<header><i class="fa fa-users"></i> Sign In</header>


					<fieldset>	
						<section>

					<?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
							
						</section>
					
						<section>
							<label class="label">Username</label>
							<label class="input">
								<i class="icon-append fa fa-envelope text-black"></i>
								<input type="text" name="uname" required>
								<span class="tooltip tooltip-top-right">Username</span>
							</label>
						</section>
						
						<section>
							<label class="label">Password</label>
							<label class="input">
								<i class="icon-append fa fa-eye text-black" onclick="myFunction()"></i>
								<!-- <i class="icon-append fa fa-lock"></i> -->
								<input type="password" name="pass" id="myInput" required>
								<b class="tooltip tooltip-top-right">Type your Password</b>
							</label>
						</section>

					</fieldset>

					<footer>
						<button type="submit" name="login" class="btn btn-success pull-right">Sign In</button>
						<a href="index.php" class="btn btn-info pull-right" >Close</a>
					
					</footer>
				</form>
				<!-- /login form -->

				

			

			</div>

		</div>

		<script>

			function myFunction() {
			  var x = document.getElementById("myInput");
			  if (x.type === "password") {
			    x.type = "text";
			  } else {
			    x.type = "password";
			  }
			}

		</script>


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'Admin/assets/plugins/';</script>
		<script type="text/javascript" src="Admin/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="Admin/assets/js/app.js"></script>
	</body>
</html>