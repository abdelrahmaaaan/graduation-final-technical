<?php 

	
	$con= mysqli_connect('localhost','root','','workout');
/*if(!$con){
		echo 'not connected';
	}
		
    else{
		echo 'connected';
	}*/
	
	if(isset($_POST['submit'])){
		//$hashpassword= md5($_POST['Password']);
		$sql = "INSERT INTO user (fname, lname, username, password, usertype, age, height, weight, gender)
        VALUES ('$_POST[FirstName]', '$_POST[LastName]', '$_POST[UserName]','$_POST[Password]', '2', '$_POST[age]', '$_POST[height]', '$_POST[weight]','$_POST[gender]')";
		
		mysqli_query($con,$sql);
		
		/*$name = $_POST[UserName];
		$sql2 = "SELECT id FROM user Where username = $name ";
		$res = mysqli_query($con,$sql2);
		$data = mysqli_fetch_assoc($res);
		
		$_SESSION['id'] = $data;*/
		
		header("location: login.php" );
	}
	
?>
<html>
<head>
<style>
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
  margin-left: 150px;
  border: 2px solid #010106;
}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}
.select-selected {
  background-color: #0c6996;
  
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
  
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  
  cursor: pointer;
  user-select: none;
}
/*style items (options):*/
.select-items {
    border-radius: 5px;	
  position: absolute;
  background-color: #0c6996;
  border: 2px solid #010106;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
 
}
</style>
<title> Registration Form </title>
<link rel= "stylesheet" href="../css/Signup.css">
</head>

<script>
function validateForm(){

var pass=document.getElementById("pass").value;
var len=pass.length;
var type=document.getElementById("type").value;
    if(len<8||len>20)
    {
        alert("password more than 8 & less than 20 characters")
        return false ;
    }

    if(type=0)
    {
        alert("Choose a user type")
        return false ;
    }
    else {
    return true;
}
   
}
</script>

<body>
<form method="post" name="Insert" onsubmit="return validateForm()">
<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
<image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
   <h1>Create a new account</h1>
    <input type="text" name="UserName" placeholder="Username" required>
<br><br>
    <input type="text" name="FirstName" placeholder="First Name" required>
<br> <br>
     <input type="text" name="LastName" placeholder="Last Name" required>
<br><br>
        
    <input type="password" id="pass"name="Password" placeholder="Password" required>
<br><br>
    <input type="number" name="age" placeholder="Age" required>
<br><br>
     <input type="number" name="height" placeholder="Height in cm" required>
<br><br>
     <input type="number" name="weight" placeholder="Weight in kg" required>
<br><br>
<div class="custom-select" style="width:300px; margin-left:220px;">
  <select name="gender" id="gen"  >
    <option value="0">Gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    
    
  </select>
</div>

<br><br><br><br><br>
    <input type="submit"  name="submit" value="Register" id="button" >
          
</form>



<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
</body>
</html>