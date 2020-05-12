<?php
session_start();
$con= mysqli_connect('localhost','root','','workout');
    $useridstr = implode ("",$_SESSION['id']);
    $sql="SELECT * FROM user WHERE id =$useridstr ";
           $query=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($query);
?>
<html>
<header>
    <title>User Update </title>  
	<link rel="stylesheet" href="../css/Update.css">

</header>

<body>
   
    <form method="post">
	<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
    <image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
	<h1> User Information </h1>
     <br><br>
    <input type="text" name="id" placeholder="ID" value="<?php echo $row["id"];?>" readonly>
	<br><br>
    <input type="text" name="firstname" placeholder="First Name" value="<?php echo $row["fname"];?>" required>
	<br><br>
    <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $row["lname"];?>" required>
	<br><br>
	<input name="username" type="text" placeholder="Username" value="<?php echo $row["username"];?>" required>
	<br><br>
    <input type="text" name="password" placeholder="Password" value="<?php echo $row["password"];?>" required>
	<br><br>
	<input type="Number" name="age" placeholder="Age" value="<?php echo $row["age"];?>" required>
	<br><br>
	<input type="Number" name="height" placeholder="Height in cm" value="<?php echo $row["height"];?>" required>
	<br><br>
	<input type="Number" name="weight" placeholder="Weight in kg" value="<?php echo $row["weight"];?>" required>
	<br><br>
    <input type="submit"value="UPDATE" name="Update" id="button">
	<br><br>
    <input type="submit"value="DELETE" name="delete" id="button">
    </form>
</body>
    <?php if(isset($_POST['Update']))
{
    $firstname = $_POST['firstname'];
    $last = $_POST['lastname'];
    $password = $_POST['password'];
    $username = $_POST['username'];
	$age = $_POST['age'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
    $id=$_POST['id'];
$sql="UPDATE user SET fname='$firstname',`username`='$username',`lname`='$last',`password`='$password', `age`='$age', `height`='$height',`weight`='$weight' WHERE id='$id'";
    echo 'das';
    $retval = mysqli_query( $con, $sql );
	header("location: Homepage.php");
   
}
    if(isset($_POST['delete']))
    {
       
        $sql2="DELETE FROM `user` WHERE  id='$_POST[id]'";
        $done=mysqli_query($con,$sql2);
        header("location: login.php");

    }
?>
</html>