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

</head>

<body>





  <?php include("include/index_main.inc") ?>



<br>

<div class="container">

<h1>Weight Loss</h1>


<h4>Weight Loss Hypnosis and Counselling</h4>

<h5>General over eating or poor eating habits</h5>

    <p><?php

$sql = "SELECT message FROM weight WHERE id like 1";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<br>". $row["message"]. " ";
    }
} else {
    echo "0 results";
}

?></p> <hr>


<h5>Emotional Eating</h5>
<p><?php

$sql = "SELECT message FROM weight WHERE id like 2";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "". $row["message"]. " ";
    }
} else {
    echo "0 results";
}

?></p><hr>

<h5>Trauma and Food</h5>

<p>Perhaps the eating is related to trauma or a bad experience you have had.  I have found, through my work with clients, once the cause or experience is managed, the weight tends to fall away.  It is almost as if the weight is being used as a protective layer or barrier between yourself and other people.  Remove the need for the protection and the reason for the weight no longer exists.  As an experienced and qualified Counsellor, I am able to support the letting of past trauma enabling you to have the life you know if waiting for you. </p>

<p>Bulimia and anorexia are life threatening disorders and need to be managed through a range of modalities.  Hypnotherapy is a useful tool in these circumstances to work with the anxiety and depression which surrounds these illnesses, uncovering the reasons for the disorder.  Through my experience as a trauma qualified and trauma informed counsellor I'm able to safely and easily move you through these conditions without any re-traumatisation.</p>


<h5>Treatments</h5>

<p>Whilst there are never any guarantees, it is very likely you will experience a difference to your relationship with food after the first session.  It may take several sessions to ensure positive behaviours are maintained for weight reduction, especially if work is required to deal with deep seated emotional issues. </p>


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

