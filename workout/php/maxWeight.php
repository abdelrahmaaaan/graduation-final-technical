<?php 
session_start();
$con= mysqli_connect('localhost','root','','workout');
$userid = $_SESSION['id'];
$movementid = $_SESSION['workout'];
$movementid2 = (int)$movementid;
$useridstr = implode ("",$_SESSION['id']);
$userid2 = (int)$useridstr;

$maxweight = $_SESSION['max'];
$maxweight2 = (int)$maxweight;

$w= $_SESSION['dweight'];

$orm = $_SESSION['orm'];
$orm2 = (int)$orm;
//echo "$w";
if ($orm2 > $maxweight2 ){
	
	$orm2 = $maxweight2;
}

$fifty = 0.5 * $orm2;
$fifty1 = (int)$fifty;

if ($fifty1 == 0){
	$fifty1 = 1;
}

$seventy = 0.7 * $orm2;
$seventy1 = (int)$seventy;

if ($seventy1 == 0){
	$seventy1 = 1;
}

$eighty = 0.8 * $orm2;
$eighty1 = (int)$eighty;

if ($eighty1 == 0){
	$eighty1 = 1;
}

$ninety = 0.9 * $orm2;
$ninety1 = (int)$ninety;

if ($ninety1 == 0){
	$ninety1 = 1;
}

$ninetyfive = 0.95 * $orm2;
$ninetyfive1 = (int)$ninetyfive;

if ($ninetyfive1 == 0){
	$ninetyfive1 = 1;
}


if(isset($_POST['submit'])){
	$sql = "INSERT INTO usermovement (UserID, MovementID) VALUES ('$userid2', '$movementid2')";
	mysqli_query($con,$sql);
	header("location: workout.php" );

}
if(isset($_POST['help'])){
	if($movementid = '1'){
			
			header("location: lateralTutorial.php" );
    }
	
	if($movementid = '2'){
			
			header("location: shoulderTutorial.php" );
    }
	
	
	
}
?>
<html>
<head>
<title>Maximum Weight</title>
<link rel="stylesheet" href="../css/maxWeight.css">
</head>



<body>
 
<form method="post"  name="forma">
<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
<image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
<h1> Weight Recommendations </h1>
<br>

<h2> Your Suitable Weight For Explosive Power :  <?php echo $fifty1 ?> Kilograms</h2>
<p>If you want to improve the pace and speed of your muscles on the sports field, this is the weight for you,it's especially good for those who need to move very quickly, such as boxers.</p>
<p>How to play :  3-6 sets of 3-4 reps </p>
<br>

<h2> Your Suitable Weight For For Endurance :  <?php echo $seventy1 ?> Kilograms</h2>
<p>This is good for sportsmen who cover long distances as it trains your muscles to keep moving while shifting moderate loads</p>
<p>How to play :  4-10 sets of 12-20 reps. </p>
<br>

<h2> Your Suitable Weight For Muscle :  <?php echo $eighty1 ?> Kilograms</h2>
<p>A tough weight but one that lets you do a fair number of reps, so you will stress your muscle fibres enough to force them to thicken and get bigger.</p>
<p>How to play :  7-12 reps and short rest periods of 30-60 secs to fully tax the muscle </p>
<br>

<h2> Your Suitable Weight For Power :  <?php echo $ninety1 ?> Kilograms</h2>
<p>If you want to create maximal force quickly then you need to move heavy loads with speed, Performance athletes use this kind of training.</p>
<p>How to play :  3-4 sets of 3-4 reps. </p>
<br>

<h2> Your Suitable Weight For Strength :  <?php echo $ninetyfive1 ?> Kilograms</h2>
<p>The upper tier of strength development, this weight will help push you past your old limits in the shortest possible time</p>
<p>How to play :  1-3 reps and only train with a weight this heavy for 6-12 weeks at a time. </p>

<br>

<h2> Your Maximum Weight :  <?php echo $maxweight2 ?> Kilograms </h2>  
<br><br>  
<input type="submit" name="submit" value="Continue" id="button">
<br><br>  
<input type="submit" name="help" value="Need help in execution?" id="button">

    </form>

</body>
</html>