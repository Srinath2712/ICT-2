<?php
    
    require_once 'connect.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <?php include("include/head.inc") ?>
</head>


<body>

   <?php include("include/index_main.inc") ?>
    
<br>

<div class="container">

<h1>Announcements content</h1>

<p><?php

$sql = "SELECT content FROM Announcement WHERE id like 1";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "". $row["content"]. " ";
    }
} else {
    echo "0 results";
}

?></p>
<hr>
<p><?php

$sql = "SELECT content FROM Announcement WHERE id like 2";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "". $row["content"]. " ";
    }
} else {
    echo "0 results";
}

?></p>
<hr>
<p><?php

$sql = "SELECT content FROM Announcement WHERE id like 3";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "". $row["content"]. " ";
    }
} else {
    echo "0 results";
}

?></p>
<hr>

<p><?php

$sql = "SELECT content FROM Announcement WHERE id like 4";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "". $row["content"]. " ";
    }
} else {
    echo "0 results";
}

?></p>

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

