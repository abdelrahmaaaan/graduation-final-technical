
<html>
<head>
<title>workouts</title>
<link rel="stylesheet" href="../css/adminview.css">
</head>


<body>
<form>
<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
<image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
<h1>Workouts</h1>

<table id="workouts">
<tr>

<th>Movement ID</th>
<th>Username</th>
<th>Movement Type</th>
<th>Result</th>

</tr>
<?php

$con= mysqli_connect('localhost','root','','workout');

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user.username, movementresult.usermovementID, movement.name, result.type FROM usermovement, movementresult, movement, result, user WHERE movementresult.usermovementID = usermovement.id AND usermovement.MovementID = movement.id AND movementresult.resultID = result.id AND usermovement.UserID = user.id";

$result = $con->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
		echo "<tr><td>".$row["usermovementID"]."</td> 
		<td>".$row["username"]."</td>
		<td>".$row["name"]."</td>
		<td>".$row["type"]."</td></tr>";
	}
	echo "</table>";
}	
else {
	echo "NO Workouts Yet";
}	
	

?>
</table>
</form>
</body>
</html>