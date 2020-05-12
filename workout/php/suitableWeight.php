<?php 
session_start();

$maxi = $_SESSION['max'];
   echo $maxi;

if(isset($_POST['submit']))
{
   $dWeight = $_POST['dweight'];
   $intweight = (int)$dWeight;
   $floatweight = (float)$dWeight;
   
   $orm = ($floatweight * 1.1307) + 0.6998;
   $intorm = (int)$orm;
  // $ormstr = strval($intorm);
   
   $_SESSION['orm'] = $intorm;
   $_SESSION['dweight']= $intorm;
   
   
   
   
   header("location: maxWeight.php" );
}



?>

<html>
<head>
<title>Enter the ID</title>
<link rel="stylesheet" href="../css/suitableWeight.css">
</head>

<body>
 
<form method="post"  name="forma">
<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
<image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
<h1> Your Last Workout Experience </h1>
<br>
<input type="text" id="ID" name="dweight" placeholder="Enter The Dumbell Weight (6 Reps Max)" required>  
<br><br>  
<input type="submit" name="submit" id="button">

</form>

</body>
</html>