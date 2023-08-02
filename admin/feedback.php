<?php
  
  include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style type="text/css">
    	body
    	{
    		background-image: url("photos/feedback-image.jpg");
            background-size:cover;
            background-repeat:no-repeat;
    	}
        .wapper{
            width:1972px;
            height: 1060px;
            
        }
    	.wrapper
    	{
    		padding: 10px;
    		margin: -20px auto;
    		width:900px;
    		height: 600px;
    		background-color: black;
    		opacity: .8;
    		color: white;
    	}
    	.form-control
    	{
    		height: 70px;
    		width: 60%;
    	}
    	.scroll
    	{
    		width: 100%;
    		height: 300px;
    		overflow: auto;
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



            <div class="wrapper">
                <h4>If you have any suggesions or questions please comment below.</h4>
                <form style="" action="" method="post">
                    <input class="form-control" type="text" name="comment" placeholder="Write something..."><br>	
                    <input class="btn btn-default" type="submit" name="submit" value="Comment" style="width: 100px; height: 35px;">		
                </form>
            
                <br><br>
                <div class="scroll">
                    <?php
                        if(isset($_POST['submit']))
                        {
                            $sql="INSERT INTO `comments` VALUES('','$_POST[comment]');";
                            if(mysqli_query($database,$sql))
                            {
                                $q="SELECT * FROM comments ORDER BY comments.id DESC";
                                $res=mysqli_query($database,$q);

                                echo "<table class='table table-bordered'>";
                                while ($row=mysqli_fetch_assoc($res)) 
                                {
                                    echo "<tr>";
                                        echo "<td>"; echo $row['comment']; echo "</td>";
                                    echo "</tr>";
                                }
                            }

                        }

                        else
                        {
                            $q="SELECT * FROM comments ORDER BY comments.id DESC"; 
                                $res=mysqli_query($database,$q);

                                echo "<table class='table table-bordered'>";
                                while ($row=mysqli_fetch_assoc($res)) 
                                {
                                    echo "<tr>";
                                        echo "<td>"; echo $row['comment']; echo "</td>";
                                    echo "</tr>";
                                }
                        }
                    ?>
                </div>
             </div>
     </div>
</body>
</html>
