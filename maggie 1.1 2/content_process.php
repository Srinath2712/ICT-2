<?php
if(isset($_POST['name'], $_POST['email'], $_POST['password'])) {
	//make the database connection
	$conn  = db_connect();
	$name = $conn -> real_escape_string($_POST['name']);
	$email = $conn -> real_escape_string($_POST['email']);
	$password = $conn -> real_escape_string($_POST['password']);
	//create an insert query 	
	$sql = "insert into users (name, email, password) 
			VALUES ('$name', '$email', '$password')";
	//execute the query
	if($conn -> query($sql))
	{
		echo "";
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?>    