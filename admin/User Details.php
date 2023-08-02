<?php

	include "connection.php";

?>



<!DOCTYPE html>
<html>
<head>
	<title>user details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <style type="text/css">
    	
    		

section .stu
{
	margin-top:-20px; 
    width: 1972px;
    height: 1060px;
    

}
section .book_img
{
    margin: 0px 0px 0px  0px;
    height: 1000px;
    width: 1972px;
	background-size:cover;
    background-repeat:no-repeat;
    background-image: url(images/11.jpg);
}



.box3
{
     height: 580px;
    width:800px;
    padding-top: 40px;
    margin: 20px auto;
    background:rgba(0,0,0,0.7); 
    float: center;
    color: white;
    padding: 20px;
  

}
    </style>	
    	

  
</head>
<body>
	
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

		<section class="stu">

			<div class="sech"style="float: right;">
				<form class="navbar-form" method="post" name="form1">
					<input class="form-control"type="text" name="search" placeholder="search books.." required="" style="background-color: lightgray">
					<button class="btn btn-default" style="background-color: red;" type="submit" name="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>

				</form>
				
			</div>


			
			<div class ="book_img">
							<br><br>
						<div class ="box3">
								
								<h1 style ="text-align: center;font-size: 37px ; "> User Details  </h1>
								<br>



 	<?php
				if(isset($_POST['submit']))
				{
					$q=mysqli_query($database,"SELECT *FROM user where username like '%$_POST[search]%' ");
					if(mysqli_num_rows($q)==0)
					{
						echo "sorry! no user found. try seaching agin.";
					}
					else
					{
						$res=mysqli_query($database,"SELECT * FROM 'user' ORDER BY 'user.first' ASC;");

							echo "<table class='table table-bordered table-hover' >";
								echo "<tr style='background-color: white;color:red;'>";
									//Table header
									echo "<th>"; echo "First name";	echo "</th>";
									echo "<th>"; echo "Last Name";  echo "</th>";
									echo "<th>"; echo "User Name";  echo "</th>";
									echo "<th>"; echo "Password";  echo "</th>";
									echo "<th>"; echo "Email";  echo "</th>";
									echo "<th>"; echo "Address";  echo "</th>";
									echo "<th>"; echo "Contact";  echo "</th>";
								echo "</tr>";	

								while($row=mysqli_fetch_assoc($q))
								 {
									echo "<tr style='background-color: gray;color:white;'>";
									echo "<td>"; echo $row['first']; echo "</td>";
									echo "<td>"; echo $row['last']; echo "</td>";
									echo "<td>"; echo $row['username']; echo "</td>";
									echo "<td>"; echo $row['password']; echo "</td>";
									echo "<td>"; echo $row['email']; echo "</td>";
									echo "<td>"; echo $row['address']; echo "</td>";
									echo "<td>"; echo $row['contact']; echo "</td>";

									echo "</tr>";
								}
							echo "</table>";
					}
				}
				/* if button is not pressed*/
				else
				{
					$res=mysqli_query($database,"SELECT * FROM user ORDER BY user.first ASC;");

							echo "<table class='table table-bordered table-hover' >";
								echo "<tr style='background-color: white;color:red;'>";
									//Table header
									echo "<th>"; echo "First name";	echo "</th>";
									echo "<th>"; echo "Last Name";  echo "</th>";
									echo "<th>"; echo "User Name";  echo "</th>";
									echo "<th>"; echo "Password";  echo "</th>";
									echo "<th>"; echo "Email";  echo "</th>";
									echo "<th>"; echo "Address";  echo "</th>";
									echo "<th>"; echo "Contact";  echo "</th>";
								echo "</tr>";	

								while($row=mysqli_fetch_assoc($res))
								 {
									echo "<tr style='background-color: gray;color:white;'>";
									echo "<td>"; echo $row['first']; echo "</td>";
									echo "<td>"; echo $row['last']; echo "</td>";
									echo "<td>"; echo $row['username']; echo "</td>";
									echo "<td>"; echo $row['password']; echo "</td>";
									echo "<td>"; echo $row['email']; echo "</td>";
									echo "<td>"; echo $row['address']; echo "</td>";
									echo "<td>"; echo $row['contact']; echo "</td>";

									echo "</tr>";
								}
							echo "</table>";
				}

			?>

						</div>	
			</div>	
		</section>


	

</body>
</html>








