<!DOCTYPE html>
<html>
<head>
	<title>Book Category page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <style type="text/css">
    	.stu
    	{
    		margin-top:-20px; 
    	}


    	/*-------------------------------- book category -------------------------*/




 
section .stu
{
    
    height: 698px;
    
}
section .book_img
{
    margin: 0px 0px 0px  0px;
    height: 698px;
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


    div.gallary{
        display:inline-block;
        margin:40px;
        padding:5px 5px 5px 5px;
        /*border:1px solid red;*/
        width:300;
        align:center;
    }
    
   /* div.gallary:hover{
        border:1px solid blue;
        font-width:bold;
        width:150px;
    
    }
    */
    
    div.gallary img{
        width:100px;
        height:100px;
        padding:25px 25px 25px 25px;
        
    
    }
    div.gallary img:hover{
        width:150px;
        height:150px;
    
    }
    
    div.desc{
        color:red;
        text-align:center;
        text:bold;
        
    
    }
    .gallary{
        position: relative;
        display:inline-block;
        
    }
    
    img{
        width:100px;
        height:100px;
        display:inline-block;
        vertical-align:text-top;
    }
    




    </style>	
    	

  
</head>
<body>
	
<nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT </a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="book.php">BOOKS</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
            <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN-UP</span></a></li>
          </ul>

      </div>
    </nav>

		<section class="stu">
			
			<div class ="book_img">
							<br><br>
						<div class ="box3">
								
								<h1 style ="text-align: center;font-size: 37px ; "> Book Category  </h1>

							

						<center><table border="5" style="height: 200px; text-align: center;" cellspacing="70px;" >
							
							<tr>
								<td><div class ="gallary" ><a style="color: white;font-size: 20px" href="art_book.php"><img src = "book_img/1.jpg" alt = "" ><br>art books</a></div></td>

								<td><div class ="gallary"><a style="color: white;font-size: 20px"href="general_book.php"><img src = "book_img/2.jpg" alt = "" ><br> general books</a></div></td>

								<td><div class ="gallary"><a style="color: white;font-size: 20px" href="psychology_book.php"><img src = "book_img/3.jpg" alt = ""><br> psychology  books</a></div></td>
							</tr>
							<tr>
								<td><div class ="gallary" ><a style="color: white;font-size: 20px" href="religion_book.php"><img src = "book_img/4.jpg" alt = "" ><br>religion books</a></div></td>

								<td><div class ="gallary"><a style="color: white;font-size: 20px"href="social sciences_book.php"><img src = "book_img/5.jpg" alt = "" ><br>social sciences books</a></div></<td>

								<td><div class ="gallary"><a style="color: white;font-size: 20px"href="technology_book.php"><img src = "book_img/6.png" alt = "" ><br>technology books</a></div></td>
							</tr>
						</table>


			</div>	
		</section>

		<!--<footer>
			<p style="color:white; text-align: center; padding-top:5px;">
				<br>
				Email :- &nbsp   onlineLibrarybandarawela553@gmail.com<br><br>
				Mobile:-  &nbsp   +94 77 442 5883
			</p>
		</footer>
	-->

	

</body>
</html>








