<?php 
session_start();

$con= mysqli_connect('localhost','root','','workout');

$usermovementid = $_SESSION['id'];
$useridmovementstr = implode ("",$_SESSION['usermovementid']);

$sql = "SELECT result.type,movementresult.ResultPercentage FROM result,movementresult Where movementresult.usermovementid = $useridmovementstr AND movementresult.resultID = result.id ";
$result=mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($result);
$datastr = implode (" ",$data);
$res = explode(" ", $datastr);

$sql2 = "SELECT repInfo FROM movementresult Where movementresult.usermovementid = $useridmovementstr ";
$result2 =mysqli_query($con,$sql2);
$data2 = mysqli_fetch_assoc($result2);
$datastr2 = implode (" ",$data2);
$reps = explode(" ", $datastr2);

//echo "$data";
$x=1;

?>

<html>
<head>
<title>Result</title>
<link rel="stylesheet" href="../css/result.css">
</head>



<body>
 
<form method="post"  name="forma">
<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
<image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
<h1> Your Workout Result </h1>
<br>
<h2><?php foreach($reps as $value){
  echo "<span style='color:hotpink'>Rep $x:</span> $value<br><br>";
  $x+=1;
} ?></h2>
<br>
<h2><span style='color:hotpink'>Overall Result : </span><?php echo $res[0]?></h2>
<br>
<h2><span style='color:hotpink'>Percentage : </span><?php echo $res[2]?>%</h2>
</form>

</body>
</html>