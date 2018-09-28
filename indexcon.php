<?php 
$conn  = db_connect();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      $user_name = $conn -> real_escape_string($_POST['userid']);
      $user_password = $conn -> real_escape_string($_POST['pswrd']); 
      $sql = "select * from users where user_name='$user_name' and user_password='$user_password'";
	  $result = $conn -> query($sql);
	  $numOfRows = $result -> num_rows;
	  $row = $result -> fetch_assoc();
	  if ($numOfRows == 1) {
         $_SESSION['valid_user'] = $user_name;         
         header("location: layout.php");
      }else {
		  $error = 'Your Login Name or Password is invalid';
      }
   }
   ?>