

<?php
	include "connection.php";
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>registration page</title>
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
            background-image: url(photos/register.jpg);
            
            margin-top: 0px;
              
               
        }

        .box2
        {
            height: 700px;
            width:700px;
            margin: 20px auto;
            background:rgba(0,0,0,0.7); 
            float: center;
            color: white;
            padding: 20px;

        }

       
    </style>	
  
</head>
<body>
	<DIV class="wapper">

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

	

		<section class="sec">
			
			<div class ="image">
                <br><br><br><br>
				<div class ="box2">
				
				<h1 style ="text-align: center;font-size: 37px ;color: white; "> <b>User Registration </b></h1>
				<br>
				
				<form name="Registration" action ="" method="POST" >

					<div class="login">
						<input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
						<input class="form-control" type="text" name="last" placeholder="Last name"  required="">   <br>
						<input class="form-control" type="text" name="username" placeholder="User Name" required=""><br>
						<input class="form-control" type="Password" name="password" placeholder="Password" required=""><br>
						<input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
                        <input class="form-control" type="text" name="address" placeholder="address" required=""><br>
						<input class="form-control" type="text" name="contact" placeholder="Contact" required=""><br>

					<input class="btn btn-default"style="height: 25px ; width: 65px;color: black;background-color:#c5dede; margin: 2px;" type="submit" name="submit" value="Sign up">&nbsp &nbsp &nbsp &nbsp 
					<input class="btn btn-default" type="reset" name="reset" value="reset" style="height:25px ;color: black;width: 60px;background-color: #c5dede;">

					</div>
				</form>

				


			</div>

			</div>	



		</section>
  <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `admin`";
        $res=mysqli_query($database,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($database,"INSERT INTO `admin` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[email]','$_POST[address]', '$_POST[contact]');");
        
       
        ?>
         <script type="text/javascript">
           alert("Registration successful");
         </script>
      
      		

        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>


		

	</DIV>

</body>
</html>