<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Maggie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Maggie Maylin</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">

  <link rel="stylesheet" href="css/font-awesome.min.css">

  <link rel="stylesheet" href="css/bootstrap.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/slick-theme.css">

  <link rel="stylesheet" href="css/slick.css">
<style>
margin-bottom:0px;
padding-bottom:0px;
</style>

</head>

<body>

   <?php include("include/index_main.inc") ?>
    


<br>

<div class="container">

<h1>Meditation content</h1>

<p><?php

$sql = "SELECT message FROM Medi WHERE id like 1";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<br>". $row["message"]. " ";
    }
} else {
    echo "0 results";
}

?> 
</p>
    <hr>
    <p>
    <?php

$sql = "SELECT message FROM Medi WHERE id like 2";
$result = $conn->query($sql);
    if ($result->num_rows > 1) {
   
    while($row = $result->fetch_assoc()) {
        echo "<br>". $row["message"]. "";
    }
} else {
    echo "0 results";
}


?>
    </p>

</div>







<!--footer section-->

<?php include("include/footer.inc") ?>

<script src="js/jquery.admin.js"></script>

<script src="js/jquery.min.js" ></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/navbar-fixed.js"></script>

<script src="js/slick.js"></script>

<script src="js/main.js"></script>

</body>

</html>

