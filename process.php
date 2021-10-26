<?php 

session_start();


require_once('db.php');



    if(isset($_POST['login']))
    {
       if(empty($_POST['uname']) || empty($_POST['pass']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admin where user='".$_POST['uname']."' and pass='".$_POST['pass']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['uname'];
                header("location:Admin/index.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>