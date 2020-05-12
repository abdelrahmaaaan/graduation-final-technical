<?php 
session_start();
$con= mysqli_connect('localhost','root','','workout');

$userid = $_SESSION['id'];
$useridstr = implode ("",$_SESSION['id']);

$movementid = $_SESSION['workout'];

$sql = "SELECT usermovement.id FROM usermovement, user, movement WHERE user.id = $useridstr AND movement.id = $movementid ORDER BY usermovement.id DESC LIMIT 1";

$result=mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($result);
	


if(isset($_POST['submit']))
{
	$_SESSION['usermovementid'] = $data;
   
   header("location: result.php" );
}
$_SESSION['usermovementid'] = $data;
?>

<html>
<head>
<link rel= "stylesheet" href="../css/Workout.css">
<script src="../js/web-sockets.js"></script>
<style>

</style>
</head>
<body style="opacity:1 !important;">
   
<form style="opacity:1 !important;" method="post">
<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
<image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
<h1>Workout Footage</h1>
Status: <label id="status">None</label><br />

<canvas style="opacity: 1;" id="canvas" width="640" height="480"></canvas>
<br><br>
<input type="submit" name="submit" value="Continue" id="button">
</form>

</body>
</html>
