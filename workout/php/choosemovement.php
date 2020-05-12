<?php 
session_start();

if(isset($_POST['Lateral']))
{
   $_SESSION['workout'] = '1';
   header("location: level.php" );
}
if(isset($_POST['Shoulder']))
{
   $_SESSION['workout'] = '2';
   header("location: level.php" );
}
?>
<html>
<head>
<title>Choose Movement</title>
<link rel="stylesheet" href="../css/Choosemovement.css">
</head>



<body>
 
<form method="post"  name="forma">
<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
<image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
<h1> Choose Your Workout </h1>
<br>
<input type="submit"  name="Lateral" value="Dumbbell Lateral Raise" id="button">
<br><br>  
<input type="submit"  name="Shoulder" value="Dumbbell Shoulder Press" id="button">
    </form>

</body>
</html>