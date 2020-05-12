<?php 
session_start();

if(isset($_POST['submit']))
{
   $con= mysqli_connect('localhost','root','','workout');

    $sql="SELECT * FROM user WHERE id ='$_POST[id]' ";
           $query=mysqli_query($con,$sql);
   
    if(mysqli_num_rows($query)>0)
    {$id1=$_POST['id'];
        $_SESSION["searchID"]=$id1;
		header("location: UserFound.php");
    }
    else
    { 'wrong ID';}
    mysqli_close($con);
}
?>
<html>
<head>
<title>Enter the ID</title>
<link rel="stylesheet" href="../css/searchUser.css">
</head>

<script>
function validateForm(){

var x=document.getElementById("ID").value;
var len2=x.length;
if(len2==0)
{
    alert("Enter your ID")
    return false;
}
    else {
    return true;
}
   
}
</script>

<body>
 
<form method="post"  name="forma">
<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
<image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
<h1> User Search </h1>
<br>
<input type="text" id="ID" name="id" placeholder="Enter User's ID" required>  
<br><br>  
<input type="submit" name="submit" id="button">

    </form>

</body>
</html>