
<!DOCTYPE html>
<html >
<head>
  <title>Bootstrap navigation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<style type="text/css">
		.navbar-inverse{background: "black";padding-top: 12px;margin-bottom: -20px;}

		.navbar-header img{width: 50px;height: 50px;margin-left: 20px;border-radius:50%}
		.navbar-header a{font-size:12px;padding-top: 5px;padding-bottom: 0px; margin-bottom:  0px;height: 25px;color: #E1BCBC;}



nav li 
{
	display: inline-block;
	line-height: 50px;
  word-spacing: 3px;
  padding-top: 10px;
	padding-left: 100px;
  font-size:20px;
}

.form-control{
  padding-top: 10px;
}
ul li a{
  display:block;
}

ul li ul li
{
  
  float:none;


}
ul li ul 
{
  

display:none;

}
ul li:hover ul{
  transition: 1s all ease:
  display:block;}

	</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <img src="photos/logo.jpg"><br>
      <a class="navbar-brand" href="#">Online Bookshop</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="homepage.php">Home</a></li>
      <li><a href="atlespage.php">Catogery</a></li>
      <li><a href="aboutpage.php">About</a></li>
      <li><a href="feedback.php">Feedback</a></li>
      <li><a href="#">Cart</a></li>
    </ul>
   
    <div>
        <ul class="nav navbar-nav navbar-right"style="padding-top: 10px;padding-right: 20px;">
            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                    </button>
                  </div>
                </div>
              </form>

              <li><a href="user_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
        </ul>
    </div>
        
  </div>
</nav>



</body>
</html>