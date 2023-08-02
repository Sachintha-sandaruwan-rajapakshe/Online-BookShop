<?php
    session_start();
?>

<!DOCTYPE html>
<html >
<head>
<title>home page</title>
    <link rel="stylesheet" href="style01.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .wapper{
            width:1972px;
            height: 1060px;
            
        }
        .sec{
           
            width: 1972px;
            height: 850px;
           
          
            
        }

        .main_image{
            width: 1972px; 
            height: 850px;
            background-repeat:no-repeat;
            background-image: url(photos/homepage.png);
            background-size:cover;
            margin-top: 0px;
              
               
        }

        .welcome h1
        {
            padding-top:350px;
            margin: 20px auto;
            float: center;
            

            color: red;
            text-align: center;
            text-transform: uppercase;
            text-shadow: 5px 7px 5px white;


        }

   
        </style>
  
</head>
<body>
    <div class="wapper">
     
   
        <header class="mainPageheder" style="height: 80px;width: 1972px; ">
        
            <div >
                <?php

                    include "navigation_bar.php";


                ?>
            </div>
            
        </heder>
        <section class= sec>
        <div class="main_image"> 
                 <br><br>
                <?php
                    include "sidenav.php";
                ?>
                    <div class="image">
                    
                            <div class ="welcome">
                                <br><br>
                                <h1 style ="text-align: center;font-size: 80px ; "> <b>Welcome to online bookshop </b></h1>
                                
                                
                            </div>	

                    </div>
        </div>              
        </section>

       

        <footer >
            <div >
                <?php
                    include "footer.php";
                ?>

            </div>

        </footer>

    
    </div>   
    


</body>
</html>