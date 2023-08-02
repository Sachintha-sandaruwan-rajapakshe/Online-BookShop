

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
        height: 24px;
        width:1232px;
        
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
			

            <div class="part02">
              

            <div class="scroll">
                <div class="part3">
			

                    <br><br>
						<div class ="box3">
								
								<h1 style ="text-align:center;font-size: 20px ;margin-top:0px;margin-left:20px;"> welcome to your cart </h1>

                        </div>


                                    <div style="clear: both"></div>
                                    <h3 class="title2">Shopping Cart Details</h3>
                                    <div class="table-responsive">
                                            <table class="table table-bordered">
                                            <tr>
                                                <th width="30%">Product name</th>
                                                <th width="10%">Quantity</th>
                                                <th width="13%">Price Details</th>
                                                <th width="10%">Total Price</th>
                                                <th width="17%">Remove Item</th>
                                            </tr>
                                            <?php
                                                if(!empty($_SESSION["shopping_cart"])){
                                                    $total=0;
                                                    foreach($_SESSION["shopping_cart"] as $key => $value){
                                                    ?>
                                                <tr>
                                                        <td><?php echo $value["product_name"];?></td>
                                                        <td><?php echo $value["product_quantity"];?></td>
                                                        <td><?php echo $value["product_price"];?></td>
                                                        <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                                                        <td><a href="atlespage.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>
                                                </tr>
                                                <?php
                                                    $total = $total + ($value["product_quantity"]*$value["product_price"]);
                                                    }
                                                ?>
                                                <tr>
                                                        <td colspan="3" align="right">Total</td>
                                                        <td align="right"><?php echo number_format($total,2);?></td>
                                                        <td></td>
                                                </tr>
                                                <?php
                                                }
                                                ?>

                                            </table>
                                    </div>



                             
                </div> 
			</div>
            </div>			



		</section>
 
	</DIV>

</body>
</html>