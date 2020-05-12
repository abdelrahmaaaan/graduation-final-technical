


<html>
<head>
<title>workouts</title>
<link rel="stylesheet" href="../css/userview.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<style>
tr[data-href]{
	cursor:pointer;
}
</style>
</head>


<body>
<form>
<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
<image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
<h1>Your Workouts</h1>

<table id="workouts">
<tr>


<th>Movement Type</th>
<th>Number Of Reps</th> 
<th>Right Reps</th> 
<th>Wrong Reps</th>
<th>Overall Result</th>
<th>Percentage</th> 
    

</tr>
<?php
session_start();

$con= mysqli_connect('localhost','root','','workout');

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userid = $_SESSION['id'];
$useridstr = implode ("",$_SESSION['id']);

$sql = "SELECT user.username, movementresult.usermovementID, movement.name, result.type, movementresult.ResultPercentage ,movementresult.repNo, movementresult.rightNo, movementresult.wrongNo FROM usermovement, movementresult, movement, result, user WHERE movementresult.usermovementID = usermovement.id AND usermovement.MovementID = movement.id AND movementresult.resultID = result.id AND usermovement.UserID = user.id AND user.id= $useridstr";


$result = $con->query($sql);



if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
		echo "<tr data-href='userWorkoutInfo.php'><td>".$row["name"]."</td>
		<td>".$row["repNo"]."</td>
		<td>".$row["rightNo"]."</td>
		<td>".$row["wrongNo"]."</td>
		<td>".$row["type"]."</td>
		<td>".$row["ResultPercentage"]."%</td></tr>";
		
	}
	echo "</table>";
}	
else {
	echo "NO Workouts Yet";
}	
	

?>
</table>

<script>

document.addEventListener("DOMContentLoaded",() => {
	const rows = document.querySelectorAll("tr[data-href]");

	rows.forEach(row => {
		row.addEventListener("click", () => {
		    var x=row.rowIndex;
			
			window.location.href = row.dataset.href;
		});
	});
});

</script>

<br>

</form>
</body>
</html>