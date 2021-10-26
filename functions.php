<?php include"db.php"; ?>

<?php 



/*================================================================================*/
						/* volunteer */
/*================================================================================*/
	
	if (isset($_POST['vol'])) 
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];
// INSERT INTO  VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
		
		$conn->query("INSERT INTO `vol`(`name`, `email`, `msg`) VALUES ('$name','$email','$msg')");

		header("location:index.php");

	}

/*================================================================================*/
						/* Contact */
/*================================================================================*/

	if (isset($_POST['btn-ctn'])) 
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$sub = $_POST['sub'];
		$msg = $_POST['msg'];

		$conn->query("INSERT INTO `contact`(`name`, `email`, `sub`, `msg`) VALUES ('$name','$email','$sub','$msg')");

		header("location:index.php");
	}



















?>