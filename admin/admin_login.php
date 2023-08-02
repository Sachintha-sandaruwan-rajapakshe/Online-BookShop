<?php
	include "connection.php";
    session_start();
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>admin login page</title>
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
        .sec{
           
            width: 1972px;
            height: 1000px;
            margin-top:-20px; 
        }

        .image{
            width: 1972px; 
            height: 1000px;
            background-size:cover;
            background-repeat:no-repeat;
            background-image: url(photos/login-background.jpg);
            
            margin-top: 0px;
              
               
        }

        .box3
        {
           
            height: 400px;
            width:450px;
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
            <li><a href="atlespage.php">Catogery</a></li>
            <li><a href="aboutpage.php">About</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="cart.php">Cart</a></li>
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
            <section class="sec">
                
                <div class ="image">
                                <br><br><br><br>
                            <div class ="box3">
                                    
                                    <h1 style ="text-align: center;font-size: 37px ; "> Admin Login  </h1>
                                    <br>
                                
                                    <form name="login" action="" method="POST">
                                        <div class="login">
                                            <input class="form-control" type="text" name="username" placeholder="username" required=""><br>
                                            <input class="form-control" type="password" name="password" placeholder="password" required=""><br>

                                            <input class="btn btn-default" type="submit" name="submit" value="Login" style="height:30px ;color: black;width: 60px; float: center;background-color: #29cece;">
                                        </div>

                                        <p style="color:white;">
                                            <br><br>
                                            <a style="color:red;margin-left: 20px;text-decoration: none;" href="update_password.php">Forgot password?</a>&nbsp &nbsp &nbsp &nbsp 
                                            new to this website? &nbsp  <a style="color: red;text-decoration: none;" href="registrationpage.php">Sign-up</a>
                                        </p>
                                    </form>
                            </div>


                	
            


            <?php

                if(isset($_POST['submit']))
                {
                    $count=0;
                    $res = mysqli_query($database," SELECT * FROM admin  WHERE username='$_POST[username]' && password='$_POST[password]';");
                    $count=mysqli_num_rows($res);
                   
                    

                    if($count==0)
                    {
                        ?>
                        <script type="text/javascript">
                                alert("the admin and password does not match.");
                        </script>
                        
                

                        <div class="alert alert-waring " style="width:800px; margin-left: 600px;margin-top: 200px; color: white; background-color: red; text-align: center;">
                            <strong >The username and password doesn't match</strong>
                        </div>

                        <?php
                    }
                    else
                    {
                        $_SESSION['login_user']=$_POST['username'];
                        ?>
                        <script type="text/javascript">
                            window.location="homepage.php"

                        </script>
                        <?php
                    }

                }		

            ?>

            </div> 
        </section>   

    </div>    
        

</body>
</html>








