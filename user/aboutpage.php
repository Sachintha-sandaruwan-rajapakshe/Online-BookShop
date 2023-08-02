

<?php
	include "connection.php";
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>about page</title>
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

     
        section .part01
        {
            background-color:#AC8383;
            width:500px;
            height: 1000px;
            float: left ;

        }
        .part02
        {
            background-color:white;
            width:1472px;
            height: 1000px;
            float: right ;

        }
        .box{
            margin-top: 200px;
            background-color:gray;
            width:200px;
            height: 200px;
            float: center ;
            border-radius:50%;
            margin-left:500px;
        }

        .address
        {
            width:300px;
            height: 800px;
            margin-top: 200px;
            margin-left: 50px;
           
        }

       

       
    </style>	
  
</head>
<body>
	<DIV class="wapper">

	<nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">online bookshop </a >
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
			
			
                
				


			<div class="part01">

                <div class="address">
                    <address style="font-size:20px;">
                        
                        Address: <br>
                        No.96, Parakrama Road, <br>Peliyagoda, 11830,<br> Sri Lanka

                    </adress>
                    <br>
                    <br>
                    <p>
                        Hotline: +94 77 141 0410

                    </p>
                    <br>
                    <p>
                    Email: <br>customer.care@atlasaxillia.com

                    </p>
                    <br>
                    <br>
                    <div style="margin-left:40px;">
                         <a href=""style="color: white;text-decoration: none;" ><img src="photos/whatapp.png" style="width:40px;height:50px;border-radius:50%;">&nbsp &nbsp WhatApp</a><br><br>
                         <a href=""style="color: white;text-decoration: none;" ><img src="photos/facebook.jpeg"style="width:40px;height:50px;border-radius:50%;">&nbsp &nbsp Facebook</a><br><br>
                         <a href=""style="color: white;text-decoration: none;" ><img src="photos/instragram.jpeg"style="width:40px;height:50px;border-radius:50%;">&nbsp &nbsp Instragram</a><br><br>

                    </div>

                </div>

			</div>
            <div class="part02">

                <div class="box">
                    <img src="photos/oner.jpeg" style="height: 200px;width: 200px;border-radius:50%">

                </div>
                <br>
                <br>
                <div style="margin-left: 40px;">

                    <p style="font-size: 20px;">
                        WHO ARE WE?<br>
                        We are Sri Lanka’s largest local stationery and school supplies company, helping every child craft their way to success!<br>
                        Our story started over 60 years ago in September 1959  by the late Mr. D. S. Madanayake, who was our first Chairman and a visionary of his time.<br><br>

                        As with many stories, ours began with pencils. Our pencils soon found their way into school bags, onto desks and even behind little ears(!) throughout <br>
                        Sri Lanka.<br><br>

                        With the encouragement we received from Sri Lankan families, we began creating a full range of stationery beginning with pens in the 1980s,<br>
                        colour products and more school stationery,<br>
                        like school accessories, mathematical instrument boxes and glue in the 1990s and exercise books in the 2000s. <br>
                        With the support of our young learners, our flagship brand, Atlas, soon became the most loved stationery brand in the country. And we had only just<br>
                        begun!<br>
                    </p>

                </div>	
			</div>		



		</section>
 
	</DIV>

</body>
</html>