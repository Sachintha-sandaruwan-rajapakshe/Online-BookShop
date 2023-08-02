<?php

	include "connection.php";

?>



<!DOCTYPE html>
<html>
<head>
	<title>atles page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Shopping Cart</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 



 <style type="text/css">
    	   .wapper{
            width:1972px;
            height: 1080px;
            
        }
        .sec{
           
            width: 1972px;
            height: 1000px;
            margin-top:-20px; 
        }

     
        .part3
        {
            background-color:#AC8383;
            float:center;
            margin-left:300px;
            margin-top:100px;

        }
        .part02
        {
            background-color:white;
            width:1572px;
            height: 1000px;
          

        }
        .box{
            margin-top: 000px;
            background-color:gray;
            width:200px;
            height: 200px;
            float: center ;
            border-radius:50%;
        }

        .item
        {
            width:300px;
            height: 800px;
            margin-top: 100px;
            margin-left: 50px;
            background-color:white;
           
        }

    .atlas-logo
    {
        margin-left:50px;
        margin-top:50px;
        width:200px;
        height:100px;
    }

    
    .box3
    {
        height: 1000px;
        width:1952px;
        
        margin-left: 20px ;
        background:rgba(0,0,0,0.7); 
        float: left;
        color:white;
     
    }`

    
    .product01{
        width:300px;
        height:400px;
            border: 1px solid #eaeaec;
            margin: 2px 2px 8px 2px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }


    
        .product{
            border: 1px solid #eaeaec;
            margin: 2px 2px 8px 2px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table,th,tr{
              text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    
        .scroll
    	{
    		width: 100%;
    		height: 800px;
    		overflow: auto;
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
            <li><a href="#atlespage.php">Catogery</a></li>
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
								
								<h1 style ="text-align: center;font-size: 37px ; "> List of Goods  </h1>
								<br>



                            <?php
                                        if(isset($_POST['submit']))
                                        {
                                            $q=mysqli_query($database,"SELECT *FROM atlesbook where name like '%$_POST[search]%' ");
                                            if(mysqli_num_rows($q)==0)
                                            {
                                                echo "sorry! no book found. try seaching agin.";
                                            }
                                            else
                                            {
                                                $res=mysqli_query($database,"SELECT * FROM atlesbook ORDER BY atlesbook.id ASC;");

                                                    echo "<table class='table table-bordered table-hover' >";
                                                        echo "<tr style='background-color: white;color:red;'>";
                                                            //Table header
                                                            echo "<th>"; echo "ID";	echo "</th>";
                                                            echo "<th>"; echo "image";  echo "</th>";
                                                            echo "<th>"; echo "Book Name";  echo "</th>";
                                                            echo "<th>"; echo "State";  echo "</th>";
                                                            echo "<th>"; echo "Description"; "</th>";
                                                            echo "<th>"; echo "price";  echo "</th>";
                                                        echo "</tr>";	

                                                        while($row=mysqli_fetch_assoc($q))
                                                        {
                                                            echo "<tr style='background-color: gray;color:white;'>";
                                                            echo "<td>"; echo $row['id']; echo "</td>";
                                                            echo "<td>"; echo $row['image']; echo "</td>";
                                                            echo "<td>"; echo $row['name']; echo "</td>";
                                                            echo "<td>"; echo $row['state']; echo "</td>";
                                                            echo "<td>"; echo $row['description']; echo "</td>";
                                                            echo "<td>"; echo $row['price']; echo "</td>";
                                                            echo "</tr>";
                                                        }
                                                    echo "</table>";
                                            }
                                        }
                                        /* if button is not pressed*/
                                        else
                                        {
                                            $res=mysqli_query($database,"SELECT * FROM atlesbook ORDER BY atlesbook.id ASC;");

                                                    echo "<table class='table table-bordered table-hover' >";
                                                        echo "<tr style='background-color: white;color:red;'>";
                                                            //Table header
                                                            
                                                            echo "<th>"; echo "ID";	echo "</th>";
                                                            echo "<th>"; echo "image";  echo "</th>";
                                                            echo "<th>"; echo "Book Name";  echo "</th>";
                                                            echo "<th>"; echo "State";  echo "</th>";
                                                            echo "<th>"; echo "Description"; "</th>";
                                                            echo "<th>"; echo "price";  echo "</th>";
                                                        echo "</tr>";	

                                                        while($row=mysqli_fetch_assoc($res))
                                                        {
                                                            ?>
                                                            <tr style='background-color: gray;color:white;'>
                                                            <td> <?php echo $row['id']; ?> </td>
                                                            <td> <img src="admin\<?php echo $row['image']; ?>"> </td>
                                                            <td> <?php echo $row['name']; ?> </td>
                                                            <td> <?php echo $row['state']; ?> </td>
                                                            <td> <?php echo $row['description']; ?> </td>
                                                            <td> <?php echo $row['price']; ?> </td>
                                                            <?php

                                                            echo "</tr>";
                                                        }
                                                    echo "</table>";
                                        }

                                    ?>

                                <div style="width: 500px;height: 300px;">            
                                    <form name="goodsadd" action ="goodsDitails.php" method="POST" >

                                    <div class="login">
                                        <input class="form-control" type="text" name="name" placeholder=" Name" required=""><br>
                                        <input class="form-control" type="text" name="state" placeholder="state"  required="">   <br>
                                        <input class="form-control" type="text" name="description" placeholder="description" required=""><br>
                                        <input class="form-control" type="text" name="price" placeholder="price" required=""><br>
                                        <input class="form-control" type="text" name="image" placeholder="image" required=""><br>
                              

                                    <input class="btn btn-default"style="height: 25px ; width: 65px;color: black;background-color:#c5dede; margin: 2px;" type="submit" name="add" value="ADD">&nbsp &nbsp &nbsp &nbsp 
                                    <input class="btn btn-default" type="reset" name="reset" value="reset" style="height:25px ;color: black;width: 60px;background-color: #c5dede;">

                                    </div>
                                    </form>

                                    <?php

                                        if(isset($_POST['add']))
                                        {
                                        $count=0;
                                        $sql="SELECT 'name' from atlesbook";
                                        $res=mysqli_query($database,$sql);

                                        while($row=mysqli_fetch_assoc($res))
                                        {
                                            if($row['name']==$_POST['name'])
                                            {
                                            $count=$count+1;
                                            }
                                        }
                                        if($count==0)
                                        {
                                            mysqli_query($database,"INSERT INTO 'atlesbook' VALUES('$_POST[name]', '$_POST[state]', '$_POST[description]', '$_POST[price]', '$_POST[image]')");


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
                                </div>    

						</div>	
			</div>	

		</section>
                       


	

</body>
</html>








