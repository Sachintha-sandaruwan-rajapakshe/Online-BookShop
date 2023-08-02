

<?php
	include "connection.php";
    session_start();
	
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
            margin-top: 000px;
            background-color:gray;
            width:200px;
            height: 200px;
            float: center ;
            border-radius:50%;
            margin-left:600px;
        }

        .item
        {
            width:300px;
            height: 800px;
            margin-top: 100px;
            margin-left: 50px;
            background-color:white;
           
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

                <div class="item">
                    
                     
                </div>

			</div>
            <div class="part02">
                <br>
                <h1 style="text-align:center;">Your Profile</h1>
                <br>

                <div class="box">
                    <img src="photos/oner.jpeg" style="height: 200px;width: 200px;border-radius:50%">

                </div>

                <div style="float:center;" >
                    <h4>
                </div>

                <br>
                <br>
                <div style="margin-left:450px;color:black;font-size :20px;background-color:gray;width:600px;height:400px;">

                


                    <?php
                        
                        $res=mysqli_query($database,"SELECT * FROM 'admin' where username='$_SESSION[login_user]';");
                    

                            echo "<table class='table table-bordered table-hover' style='width:600px;height:400px;border-size:0;'>";
                               	

                                while($row=mysqli_fetch_assoc($res))
                                {
                                    echo "<tr>";
                                    echo "<th style='text-align:center;'>"; echo "First name :";	echo "</th>";
                                    echo "<td>"; echo $row['first']; echo "</td>";
                                    echo "</tr>";

                                    echo "<tr >";
                                    echo "<th style='text-align:center;'>"; echo "Last Name :";  echo "</th>";
                                    echo "<td>"; echo $row['last']; echo "</td>";
                                    echo "</tr>";

                                    echo "<tr>";
                                    echo "<th style='text-align:center;'>"; echo "User Name :";  echo "</th>";	
                                    echo "<td>"; echo $row['username']; echo "</td>";
                                    echo "</tr>";

                                    echo "<tr>";
                                    echo "<th style='text-align:center;'>"; echo "Email &nbsp &nbsp &nbsp &nbsp  :";  echo "</th>";		
                                    echo "<td>"; echo $row['email']; echo "</td>";
                                    echo "</tr>";	

                                    echo "<tr>";
                                    echo "<th style='text-align:center;'>"; echo "Address &nbsp &nbsp :";  echo "</th>";	
                                    echo "<td>"; echo $row['address']; echo "</td>";
                                    echo "</tr>";	

                                    echo "<tr>";
                                    echo "<th style='text-align:center;'>"; echo "contact &nbsp &nbsp &nbsp :";  echo "</th>";	
                                    echo "<td>"; echo $row['contact']; echo "</td>";
                                    

                                    echo "</tr>";
                                }
                            echo "</table>";

                     ?>


     

                </div>	
			</div>		



		</section>
 
	</DIV>

</body>
</html>