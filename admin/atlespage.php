

<?php
	include "connection.php";
    session_start();
	
?>
<?php
   

    if(isset($_POST["add"])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"],"product_id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'product_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'product_quantity' => $_POST["quantity"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
                echo '<script>window.location="atlespage.php"</script>';
            }else{
                echo '<script>alert("Product is already in  the cart")</script>';
                echo '<script>window.location="atlespage.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["shopping_cart"] as $keys => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Product has been removed")</script>';
                    echo '<script>window.location="atlespage.php"</script>';
                }
            }
        }
    }
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
            width:400px;
            height: 1050px;
            float: left ;

        }
        .part02
        {
            background-color:white;
            width:1572px;
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
        }

        .item
        {
            width:300px;
            height: 950px;
            margin-top: 10px;
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
        height: 24px;
        width:1552px;
        
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
    		height: 950px;
    		overflow: auto;
    	}

        .scroll_02
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
                    
                    <div class="scroll">
                                   
                                        <h2>Shopping Cart</h2>
                                        <?php
                                            $query = "select * from atlesothergoods order by id asc";
                                            $result = mysqli_query($database,$query);
                                            if(mysqli_num_rows($result)>0)
                                            {
                                                while($row = mysqli_fetch_array($result))
                                                {
                                                    ?>
                                                    <div class="col-md-3" style="float:center;width:220px;height:324px;margin-left:40px;">
                                                        <form method="post" action="atlespage.php?action=add&id=<?php echo $row["id"];?>">
                                                            <div class="product01">
                                                                <img src="<?php echo $row["image"];?>" width="190px" height="200px" class="img-responsive">
                                                                <h5 class="text-info"><?php echo $row["name"];?></h5>
                                                                <h5 class="text-danger"><?php echo $row["price"];?></h5>
                                                                <input type="text" name="quantity" class="form-control" value="1">
                                                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
                                                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to cart">
                                                            </div>
                                                        </form>
                                                    </div>
                                        <?php
                                                }
                                            }
                                        ?>
                                  
                    </div>
                </div>

			</div>

            <div class="part02">
                <div class="atlas-logo">
                    <img src="photos/atlas-logo.png " style="height: 100px;width: 200px;">      
                </div>


                <div class="sech"style="float: right;margin-top:-75px;margin-right:100px;">
				<form class="navbar-form" method="post" name="form1">
					<input class="form-control"type="text" name="search" placeholder="search books.." required="" style="background-color: lightgray">
					<button class="btn btn-default" style="background-color: red;" type="submit" name="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>

				</form>
				
			    </div>

                <br><br>
						<div class ="box3">
								
								<h1 style ="text-align: left;font-size: 20px ;margin-top:0px;margin-left:20px;"> Books  </h1>

                        </div>
                    <div class="scroll_02">                        
                        <?php

							
                            if(isset($_POST['submit']))
                            {
                                $result=mysqli_query($database,"SELECT *FROM atlesBook where name like '%$_POST[search]%'");
                                if(mysqli_num_rows($result)==0)
                                {
                                    echo "sorry! no book found. try seaching agin.";
                                }
                                else
                                {
                                    ?>
                         
                                    <div class="container" style="width: 65%">
                                    <h2>Shopping Cart</h2>
                                    <?php
                                        $query = "select * from atlesBook order by id asc";
                                        $result = mysqli_query($database,$query);
                                        if(mysqli_num_rows($result)>0){
                                            while($row = mysqli_fetch_array($result)){
                                                ?>
                                                <div class="col-md-3" style="float: left;">
                                                    <form method="post" action="atlespage.php?action=add&id=<?php echo $row["id"];?>">
                                                        <div class="product01">
                                                            <img src="<?php echo $row["image"];?>" width="190px" height="200px" class="img-responsive">
                                                            <h5 class="text-info"><?php echo $row["name"];?></h5>
                                                            <h5 class="text-danger"><?php echo $row["price"];?></h5>
                                                            <input type="text" name="quantity" class="form-control" value="1">
                                                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
                                                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                                            <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to cart">
                                                        </div>
                                                    </form>
                                                </div>
                                    <?php
                                            }
                                        }
                                    ?>

                                    </div>

                                 </div>
                                 <?php
                                }
                            }

                            else
                                {
                                    ?>
                                    <div class="container" style="width: 65%">
                                    <h2>Shopping Cart</h2>
                                    <?php
                                        $query = "select * from atlesBook order by id asc";
                                        $result = mysqli_query($database,$query);
                                        if(mysqli_num_rows($result)>0){
                                            while($row = mysqli_fetch_array($result)){
                                                ?>
                                                <div class="col-md-3" style="float: left;">
                                                    <form method="post" action="atlespage.php?action=add&id=<?php echo $row["id"];?>">
                                                        <div class="product">
                                                            <img src="<?php echo $row["image"];?>" width="190px" height="200px" class="img-responsive">
                                                            <h5 class="text-info"><?php echo $row["name"];?></h5>
                                                            <h5 class="text-danger"><?php echo $row["price"];?></h5>
                                                            <input type="text" name="quantity" class="form-control" value="1">
                                                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
                                                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                                            <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to cart">
                                                        </div>
                                                    </form>
                                                </div>
                                    <?php
                                            }
                                        }
                                    ?>

                                    
                                 </div>
                                 <?php
                                }

                            ?>

                    </div>	        
              
			</div>		



		</section>
 
	</DIV>

</body>
</html>