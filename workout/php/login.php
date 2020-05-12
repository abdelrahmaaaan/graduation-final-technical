<?php 
session_start();
$con= mysqli_connect('localhost','root','','workout');
if(isset($_POST['username'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "select * from user where username = '".$username."' AND password = '".$password."' limit 1" ;
	$gen = "select gender from user where username = '".$username."' AND password = '".$password."' limit 1" ;
	$weight = "select weight from user where username = '".$username."' AND password = '".$password."' limit 1" ;
	$id = "select id from user where username = '".$username."' AND password = '".$password."' limit 1" ;
	$type = "select usertype from user where username = '".$username."' AND password = '".$password."' limit 1" ;
	
	$result = mysqli_query($con, $sql);
	
	$result1 = mysqli_query($con, $gen);
	$data1 = mysqli_fetch_assoc($result1);
	
	$result2 = mysqli_query($con, $weight);
	$data2 = mysqli_fetch_assoc($result2);
	
	$result3 = mysqli_query($con, $id);
	$data3 = mysqli_fetch_assoc($result3);
	
	$result4 = mysqli_query($con, $type);
	$data4 = mysqli_fetch_assoc($result4);
	$typestr = implode ("",$data4);
	
	
	if(mysqli_num_rows($result) ==1){
		
		$_SESSION['id'] = $data3;
		
		if($typestr == "1"){
			header("location: HomePageAdmin.php" );                 
		}
		
		if($typestr == "2"){
		$_SESSION['gender'] = $data1;
		$_SESSION['weight'] = $data2;
		header("location: HomePage.php" );
		}
	}
	else{
		$_SESSION['message'] = "incorrect username or password";
	}
}

 
	
?>

	
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" href="../css/Login.css">
</head>

<script>
function validateForm(){


var pass=document.getElementById("pass").value;
var len=pass.length;

else if(len<8||len>20)
    {
        alert("password more than 7 & less than 20 characters")
        return false ;
    }
    else {
    return true;
}
   
}
</script>

<body>
<form onsubmit="return validateForm()" method="POST" action="#">
<h1>Log In </h1>
Don't have an account? <a href="SignUp.php">Create one</a>
<br><br>
<input type="text" id="un" name="username" placeholder="Username" required>
<br><br>
<input type="password" id="pass" name="password" placeholder="Password">
<br><br><br><br>
<input type="submit"  name="submit" value="Log In" id="button">
</form>
</html>