<?php 
session_start();
$weightstr = implode ("",$_SESSION['weight']);
$weight = (int)$weightstr;
$genderstr = implode ("",$_SESSION['gender']);
//$gender = (int)$genderstr;

$work = $_SESSION['workout'];
//echo $work;

if($_SESSION['workout'] == '1'){
if(isset($_POST['beginner'])){
	if($genderstr == "male"){         
		//male
		if($weight>= 50 && $weight <= 55 ){
			$max = '1';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '2';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '2';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '3';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '3';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '5';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '5';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 120 && $weight <= 125 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}if($weight>= 125 && $weight <= 130 ){
			$max = '8';
			$_SESSION['max'] = $max;
		}
		if($weight>= 130 && $weight <= 135 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
		if($weight>= 135 && $weight <= 140 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
		if($weight> 140 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
	}
	if($genderstr == "female"){         
		//female
		if($weight>= 40 && $weight <= 45 ){
			$max = '1';
			$_SESSION['max'] = $max;
		}
		if($weight>= 45 && $weight <= 50 ){
			$max = '2';
			$_SESSION['max'] = $max;
		}
		if($weight>= 50 && $weight <= 55 ){
			$max = '2';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '2';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '2';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '3';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '3';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '3';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '3';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '3';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '3';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight> 120 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
	}
	header("location: suitableWeight.php" );

}
if(isset($_POST['novice'])){
	if($genderstr == "male"){ 
	
		//male
		if($weight>= 50 && $weight <= 55 ){
			$max = '5';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '8';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '10';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '12';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '12';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '13';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '14';
			$_SESSION['max'] = $max;
		}
		if($weight>= 120 && $weight <= 125 ){
			$max = '14';
			$_SESSION['max'] = $max;
		}if($weight>= 125 && $weight <= 130 ){
			$max = '15';
			$_SESSION['max'] = $max;
		}
		if($weight>= 130 && $weight <= 135 ){
			$max = '15';
			$_SESSION['max'] = $max;
		}
		if($weight>= 135 && $weight <= 140 ){
			$max = '16';
			$_SESSION['max'] = $max;
		}
		if($weight> 140 ){
			$max = '16';
			$_SESSION['max'] = $max;
		}
	}	
	if($genderstr == "female"){         
		//female
		if($weight>= 40 && $weight <= 45 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight>= 45 && $weight <= 50 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight>= 50 && $weight <= 55 ){
			$max = '5';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '5';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '5';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '5';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '8';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '8';
			$_SESSION['max'] = $max;
		}
		if($weight> 120 ){
			$max = '8';
			$_SESSION['max'] = $max;
		}
	}
	header("location: suitableWeight.php" );

}
if(isset($_POST['inter'])){
	if($genderstr == "male"){         
		//male
		if($weight>= 50 && $weight <= 55 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '12';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '13';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '14';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '15';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '16';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '17';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '18';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '19';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '20';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '21';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '21';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '22';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '23';
			$_SESSION['max'] = $max;
		}
		if($weight>= 120 && $weight <= 125 ){
			$max = '24';
			$_SESSION['max'] = $max;
		}
		if($weight>= 125 && $weight <= 130 ){
			$max = '24';
			$_SESSION['max'] = $max;
		}
		if($weight>= 130 && $weight <= 135 ){
			$max = '25';
			$_SESSION['max'] = $max;
		}
		if($weight>= 135 && $weight <= 140 ){
			$max = '26';
			$_SESSION['max'] = $max;
		}
		if($weight> 140 ){
			$max = '26';
			$_SESSION['max'] = $max;
		}
	}
	
	if($genderstr == "female"){         
		//female
		if($weight>= 40 && $weight <= 45 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 45 && $weight <= 50 ){
			$max = '8';
			$_SESSION['max'] = $max;
		}
		if($weight>= 50 && $weight <= 55 ){
			$max = '8';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '10';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '10';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '10';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '12';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '12';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '12';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '12';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '13';
			$_SESSION['max'] = $max;
		}
		if($weight> 120 ){
			$max = '13';
			$_SESSION['max'] = $max;
		}
	}header("location: suitableWeight.php" );

}
if(isset($_POST['adv'])){
	if($genderstr == "male"){         
		//male
		if($weight>= 50 && $weight <= 55 ){
			$max = '19';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '21';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '22';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '24';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '25';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '26';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '27';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '29';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '30';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '31';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '32';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '33';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '34';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '35';
			$_SESSION['max'] = $max;
		}
		if($weight>= 120 && $weight <= 125 ){
			$max = '35';
			$_SESSION['max'] = $max;
		}if($weight>= 125 && $weight <= 130 ){
			$max = '36';
			$_SESSION['max'] = $max;
		}
		if($weight>= 130 && $weight <= 135 ){
			$max = '37';
			$_SESSION['max'] = $max;
		}
		if($weight>= 135 && $weight <= 140 ){
			$max = '38';
			$_SESSION['max'] = $max;
		}
		if($weight> 140 ){
			$max = '39';
			$_SESSION['max'] = $max;
		}
	}
	if($genderstr == "female"){         
		//female
		if($weight>= 40 && $weight <= 45 ){
			$max = '12';
			$_SESSION['max'] = $max;
		}
		if($weight>= 45 && $weight <= 50 ){
			$max = '13';
			$_SESSION['max'] = $max;
		}
		if($weight>= 50 && $weight <= 55 ){
			$max = '14';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '14';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '15';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '15';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '16';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '16';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '16';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '17';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '17';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '18';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '18';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '18';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '19';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '19';
			$_SESSION['max'] = $max;
		}
		if($weight> 120 ){
			$max = '19';
			$_SESSION['max'] = $max;
		}
	}	
	header("location: suitableWeight.php" );

}
if(isset($_POST['elite'])){
	if($genderstr == "male"){         
		//male
		if($weight>= 50 && $weight <= 55 ){
			$max = '30';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '32';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '33';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '35';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '37';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '38';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '39';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '41';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '42';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '43';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '45';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '46';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '47';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '48';
			$_SESSION['max'] = $max;
		}
		if($weight>= 120 && $weight <= 125 ){
			$max = '49';
			$_SESSION['max'] = $max;
		}if($weight>= 125 && $weight <= 130 ){
			$max = '50';
			$_SESSION['max'] = $max;
		}
		if($weight>= 130 && $weight <= 135 ){
			$max = '51';
			$_SESSION['max'] = $max;
		}
		if($weight>= 135 && $weight <= 140 ){
			$max = '52';
			$_SESSION['max'] = $max;
		}
		if($weight> 140 ){
			$max = '53';
			$_SESSION['max'] = $max;
		}
	}	
	if($genderstr == "female"){         
		//female
		if($weight>= 40 && $weight <= 45 ){
			$max = '18';
			$_SESSION['max'] = $max;
		}
		if($weight>= 45 && $weight <= 50 ){
			$max = '19';
			$_SESSION['max'] = $max;
		}
		if($weight>= 50 && $weight <= 55 ){
			$max = '20';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '20';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '21';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '21';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '22';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '22';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '23';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '23';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '24';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '24';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '25';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '25';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '25';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '26';
			$_SESSION['max'] = $max;
		}
		if($weight> 120 ){
			$max = '26';
			$_SESSION['max'] = $max;
		}
	}header("location: suitableWeight.php" );

}

}

//lateral


if($_SESSION['workout'] == '2'){
if(isset($_POST['beginner'])){
	if($genderstr == "male"){         
		//male
		if($weight>= 50 && $weight <= 55 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '12';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '14';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '15';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '16';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '18';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '19';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '21';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '22';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '23';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '25';
			$_SESSION['max'] = $max;
		}
		if($weight>= 120 && $weight <= 125 ){
			$max = '26';
			$_SESSION['max'] = $max;
		}if($weight>= 125 && $weight <= 130 ){
			$max = '27';
			$_SESSION['max'] = $max;
		}
		if($weight>= 130 && $weight <= 135 ){
			$max = '29';
			$_SESSION['max'] = $max;
		}
		if($weight>= 135 && $weight <= 140 ){
			$max = '30';
			$_SESSION['max'] = $max;
		}
		if($weight> 140 ){
			$max = '31';
			$_SESSION['max'] = $max;
		}
	}
	if($genderstr == "female"){         
		//female
		if($weight>= 40 && $weight <= 45 ){
			$max = '3';
			$_SESSION['max'] = $max;
		}
		if($weight>= 45 && $weight <= 50 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight>= 50 && $weight <= 55 ){
			$max = '4';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '5';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '5';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '8';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '8';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '10';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '10';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '10';
			$_SESSION['max'] = $max;
		}
		if($weight> 120 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
	}
	header("location: suitableWeight.php" );

}
if(isset($_POST['novice'])){
	if($genderstr == "male"){ 
	
		//male
		if($weight>= 50 && $weight <= 55 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '13';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '15';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '17';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '19';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '21';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '23';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '25';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '26';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '28';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '30';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '32';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '33';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '35';
			$_SESSION['max'] = $max;
		}
		if($weight>= 120 && $weight <= 125 ){
			$max = '36';
			$_SESSION['max'] = $max;
		}if($weight>= 125 && $weight <= 130 ){
			$max = '38';
			$_SESSION['max'] = $max;
		}
		if($weight>= 130 && $weight <= 135 ){
			$max = '39';
			$_SESSION['max'] = $max;
		}
		if($weight>= 135 && $weight <= 140 ){
			$max = '41';
			$_SESSION['max'] = $max;
		}
		if($weight> 140 ){
			$max = '42';
			$_SESSION['max'] = $max;
		}
	}	
		if($genderstr == "female"){         
		//female
		if($weight>= 40 && $weight <= 45 ){
			$max = '6';
			$_SESSION['max'] = $max;
		}
		if($weight>= 45 && $weight <= 50 ){
			$max = '7';
			$_SESSION['max'] = $max;
		}
		if($weight>= 50 && $weight <= 55 ){
			$max = '8';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '9';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '10';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '12';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '13';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '13';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '14';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '14';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '15';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '15';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '16';
			$_SESSION['max'] = $max;
		}
		if($weight> 120 ){
			$max = '16';
			$_SESSION['max'] = $max;
		}
	}
	header("location: suitableWeight.php" );

}
if(isset($_POST['inter'])){
	if($genderstr == "male"){         
		//male
		if($weight>= 50 && $weight <= 55 ){
			$max = '19';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '21';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '24';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '26';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '29';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '31';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '33';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '35';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '37';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '39';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '41';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '43';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '45';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '47';
			$_SESSION['max'] = $max;
		}
		if($weight>= 120 && $weight <= 125 ){
			$max = '49';
			$_SESSION['max'] = $max;
		}if($weight>= 125 && $weight <= 130 ){
			$max = '50';
			$_SESSION['max'] = $max;
		}
		if($weight>= 130 && $weight <= 135 ){
			$max = '52';
			$_SESSION['max'] = $max;
		}
		if($weight>= 135 && $weight <= 140 ){
			$max = '54';
			$_SESSION['max'] = $max;
		}
		if($weight> 140 ){
			$max = '55';
			$_SESSION['max'] = $max;
		}
	}
	
		if($genderstr == "female"){         
		//female
		if($weight>= 40 && $weight <= 45 ){
			$max = '11';
			$_SESSION['max'] = $max;
		}
		if($weight>= 45 && $weight <= 50 ){
			$max = '12';
			$_SESSION['max'] = $max;
		}
		if($weight>= 50 && $weight <= 55 ){
			$max = '13';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '14';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '15';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '16';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '17';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '17';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '18';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '19';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '20';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '20';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '21';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '21';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '22';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '23';
			$_SESSION['max'] = $max;
		}
		if($weight> 120 ){
			$max = '23';
			$_SESSION['max'] = $max;
		}
	}header("location: suitableWeight.php" );

}
if(isset($_POST['adv'])){
	if($genderstr == "male"){         
		//male
		if($weight>= 50 && $weight <= 55 ){
			$max = '28';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '31';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '34';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '37';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '40';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '42';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '45';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '47';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '50';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '52';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '55';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '57';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '59';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '61';
			$_SESSION['max'] = $max;
		}
		if($weight>= 120 && $weight <= 125 ){
			$max = '63';
			$_SESSION['max'] = $max;
		}if($weight>= 125 && $weight <= 130 ){
			$max = '65';
			$_SESSION['max'] = $max;
		}
		if($weight>= 130 && $weight <= 135 ){
			$max = '67';
			$_SESSION['max'] = $max;
		}
		if($weight>= 135 && $weight <= 140 ){
			$max = '69';
			$_SESSION['max'] = $max;
		}
		if($weight> 140 ){
			$max = '71';
			$_SESSION['max'] = $max;
		}
	}
	if($genderstr == "female"){         
		//female
		if($weight>= 40 && $weight <= 45 ){
			$max = '17';
			$_SESSION['max'] = $max;
		}
		if($weight>= 45 && $weight <= 50 ){
			$max = '18';
			$_SESSION['max'] = $max;
		}
		if($weight>= 50 && $weight <= 55 ){
			$max = '19';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '20';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '22';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '23';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '24';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '25';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '25';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '26';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '27';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '28';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '29';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '29';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '30';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '31';
			$_SESSION['max'] = $max;
		}
		if($weight> 120 ){
			$max = '31';
			$_SESSION['max'] = $max;
		}
	}	
	header("location: suitableWeight.php" );

}
if(isset($_POST['elite'])){
	if($genderstr == "male"){         
		//male
		if($weight>= 50 && $weight <= 55 ){
			$max = '38';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '42';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '46';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '49';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '52';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '55';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '58';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '61';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '64';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '66';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '69';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '71';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '74';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '76';
			$_SESSION['max'] = $max;
		}
		if($weight>= 120 && $weight <= 125 ){
			$max = '78';
			$_SESSION['max'] = $max;
		}if($weight>= 125 && $weight <= 130 ){
			$max = '81';
			$_SESSION['max'] = $max;
		}
		if($weight>= 130 && $weight <= 135 ){
			$max = '83';
			$_SESSION['max'] = $max;
		}
		if($weight>= 135 && $weight <= 140 ){
			$max = '85';
			$_SESSION['max'] = $max;
		}
		if($weight> 140 ){
			$max = '87';
			$_SESSION['max'] = $max;
		}
	}	
	
		if($genderstr == "female"){         
		//female
		if($weight>= 40 && $weight <= 45 ){
			$max = '23';
			$_SESSION['max'] = $max;
		}
		if($weight>= 45 && $weight <= 50 ){
			$max = '25';
			$_SESSION['max'] = $max;
		}
		if($weight>= 50 && $weight <= 55 ){
			$max = '26';
			$_SESSION['max'] = $max;
		}
		if($weight>= 55 && $weight <= 60 ){
			$max = '28';
			$_SESSION['max'] = $max;
		}
		if($weight>= 60 && $weight <= 65 ){
			$max = '29';
			$_SESSION['max'] = $max;
		}
		if($weight>= 65 && $weight <= 70 ){
			$max = '30';
			$_SESSION['max'] = $max;
		}
		if($weight>= 70 && $weight <= 75 ){
			$max = '31';
			$_SESSION['max'] = $max;
		}
		if($weight>= 75 && $weight <= 80 ){
			$max = '32';
			$_SESSION['max'] = $max;
		}
		if($weight>= 80 && $weight <= 85 ){
			$max = '33';
			$_SESSION['max'] = $max;
		}
		if($weight>= 85 && $weight <= 90 ){
			$max = '34';
			$_SESSION['max'] = $max;
		}
		if($weight>= 90 && $weight <= 95 ){
			$max = '35';
			$_SESSION['max'] = $max;
		}
		if($weight>= 95 && $weight <= 100 ){
			$max = '36';
			$_SESSION['max'] = $max;
		}
		if($weight>= 100 && $weight <= 105 ){
			$max = '37';
			$_SESSION['max'] = $max;
		}
		if($weight>= 105 && $weight <= 110 ){
			$max = '38';
			$_SESSION['max'] = $max;
		}
		if($weight>= 110 && $weight <= 115 ){
			$max = '39';
			$_SESSION['max'] = $max;
		}
		if($weight>= 115 && $weight <= 120 ){
			$max = '39';
			$_SESSION['max'] = $max;
		}
		if($weight> 120 ){
			$max = '40';
			$_SESSION['max'] = $max;
		}
	}header("location: suitableWeight.php" );

}
}
//shoulder
	
	
?>
<html>
<head>


<title> Strength Level </title>
<link rel= "stylesheet" href="../css/levels.css">
</head>



<body>
<form method="post" name="Insert">
<image src="../images/gym7.png" width="100px" height="50px" align="left" id="a1">
<image src="../images/gym7.png" width="100px" height="50px" align="right" id="a2">
   <h1>Choose Your Strength Level</h1>
<br><br>
<input type="submit"  name="beginner" value="Beginner" id="button">
<br>
<p>Stronger than 5% of lifters. A beginner lifter can perform the movement correctly and has practiced it for at least a month.</P>
<br><br>
<input type="submit"  name="novice" value="Novice" id="button">
<br>
<p>Stronger than 20% of lifters. A novice lifter has trained regularly in the technique for at least six months.</p>
<br><br>
<input type="submit"  name="inter" value="Intermeiate" id="button">
<br>
<p>Stronger than 50% of lifters. An intermediate lifter has trained regularly in the technique for at least two years.</p>
<br><br>
<input type="submit"  name="adv" value="Advanced" id="button">	 
<br>
<p>Stronger than 80% of lifters. An advanced lifter has progressed for over five years.</p>
<br><br>
<input type="submit"  name="elite" value="Elite" id="button">
<br>
<p>Stronger than 95% of lifters. An elite lifter has dedicated over five years to become competitive at strength sports.</p>
<br><br>
   
    
     
     
     
    
    
    	
	
          
</form>


</body>
</html>