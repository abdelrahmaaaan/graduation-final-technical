<?php 

if(isset($_POST['submit1'])){
	header("location: choosemovement.php" );
}
if(isset($_POST['submit2'])){
	header("location: UserProfile.php" );
}
if(isset($_POST['submit3'])){
	header("location: userview.php" );
}

?>
<html>
<head>
<title>Workout Assistant</title>
<link rel="stylesheet" href="../css/Homepage.css">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
     
      height: 50%;
	  margin-left: 120px;
  }
  </style>
</head>



<body>
 
 <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner" style="margin-left: 130px;">
    <div class="carousel-item active">
      <img src="..\images\q.jpg" alt="var" width="1000" height="500" style="border-style: solid; border-width: 5px; border-color: hotpink;">
    </div>
    <div class="carousel-item">
      <img src="..\images\quote2.jpg" alt="match" width="1000" height="500" style="border-style: solid; border-width: 5px; border-color: hotpink;">
    </div>
    <div class="carousel-item">
      <img src="..\images\quote3.jpg" alt="coal" width="1000" height="500" style="border-style: solid; border-width: 5px; border-color: hotpink;">
    </div>
  </div>
  
  
</div>

 
<form method="post"  name="forma">
<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
<image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
<h4>Workout Assistant</h4>
<br><br>
<input type="submit" value="Start a new workout" name="submit1" id="button">
<br><br>
<input type="submit" value="View your previous workouts" name="submit3" id="button">
<br><br>  
<input type="submit" value="View profile details" name="submit2" id="button">

</form>

</body>
</html>