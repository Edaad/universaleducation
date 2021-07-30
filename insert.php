<?php

$t1 = filter_input(INPUT_POST, 't1');
$t2 = filter_input(INPUT_POST, 't2');
$t2 = filter_input(INPUT_POST, 't2');
if(!empty($t1)){
	if(!empty($t2)){
			if(empty($t3)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "register";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_errno().')'
	.mysqli_connect_error());
} 
else{
	$sql = "INSERT INTO register (t1, t2, t3)
	values ('$t1','$t2','t3')";
}
	}
else{
	echo "Name should not be empty";
	die();
}
}
else{
	echo "Country should not be empty";
	die();
}
}

else{
	echo "Website should not be empty";
	die();
}
?>