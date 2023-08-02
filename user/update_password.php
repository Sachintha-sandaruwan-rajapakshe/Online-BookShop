<?php
	include "connection.php";
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>update password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <style type="text/css">
       .wapper{
            width:1972px;
            height: 1060px;
       }
    	    /*-------------------------------------update password page -------------------------------*/


section .update
{
    
   
           
     width: 1972px;
     height: 1000px;
     margin-top:-20px; 
      
}
section .update_img
{
    margin-top:-20px;
    
    height: 1000px;
    width: 1972px;
    background-image: url(photos/upgatePage.jpg);

}

.box1
{
     height: 400px;
    width:400px;
    margin: 20px auto;
    background:rgba(0,0,0,0.7); 
    float: center;
    color: white;
    padding: 20px;
   


}
form .login
{
    margin:auto 100px;
}
input
{
    height: 25px;
    width: 200px;
}

    </style>	
    	

  
</head>
<body>
	
    <div class="wapper">

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand active">online bookshop </a>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="homepage.php">Home</a></li>
                    <li><a href="#">Catogery</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="user_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                    <li><a href="user_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                    <li><a href="registrationpage.php"><span class="glyphicon glyphicon-user"> SIGN-UP</span></a></li>
                </ul>

            </div>
            </nav>
                
        <!--
                <header style="height: 100px;">
                    <div class="logo">
                        
                        
                        <h1 style="font-size: 30px;margin-top: 20px;word-spacing: 10px;line-height: 80px;">*** Online Library ***</h1>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="">BOOK</a></li>
                            <li><a href="student_login.html">STUDENT-LOGIN</a></li>
                            <li><a href="admin_login.html">ADMIN-LOGIN</a></li>
                            <li><a href="">FEEDBACK</a></li>
                        </ul>
                    </nav>
                    
                </header>
            -->
                <section class="update">
                    
                    <div class ="update_img">
                                    <br><br><br><br>
                                <div class ="box1">
                                        
                                        <h1 style ="text-align: center;font-size: 30px ; "> Change new password  </h1>
                                        <br>
                                    
                                        <form name="login" action="" method="POST">
                                            <div class="login">
                                                <input class="form-control" type="text" name="username" placeholder="username" required=""><br>
                                                <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
                                                <input class="form-control" type="password" name="newpassword" placeholder="new password" required=""><br>

                                                <input class="btn btn-default" type="submit" name="submit" value="update" style="height:30px ;color: black;width: 60px; float: center;background-color: #29cece;">
                                            </div>

                                        </form>
                                </div>


                    </div>	
                </section>


                <?php

                    if(isset($_POST['submit']))
                    {
                        
                        if(mysqli_query($database,"UPDATE user  SET  password='$_POST[newpassword]'WHERE username='$_POST[username]' && email='$_POST[email]';"))
                        {
                        

                        ?>
                            

                            <div class="alert alert-waring " style="width:700px; margin-left: 650px; margin-top: 300px;color: white; background-color: red; text-align: center;">
                                <strong >The password updated sucessfully..!</strong>
                            </div>

                            <?php
                        }
                        else
                        {
                            ?>
                             <div class="alert alert-waring " style="width:700px; margin-left: 450px; color: white; background-color: red; text-align: center;">
                                <strong >The password updated not sucessfully..!</strong>
                            </div>

                            <?php
                        }

                        

                    }	

                ?>

    </div>        
	

</body>
</html>








