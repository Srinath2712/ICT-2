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

<h1 style="text-align: center;">Weight Loss</h1>


<h4>Weight Loss Hypnosis and Counselling</h4>

<h5>General over eating or poor eating habits</h5>

    <p>
        <?php

    $sql = "SELECT message FROM weight WHERE id like 1";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
        echo "<br>". $row["message"]. " ";
        }
    } 
    else 
    {
    echo " ";
    }

?></p> 
    
    <hr>

<h5>Emotional Eating</h5>
<p>
    <?php

    $sql = "SELECT message FROM weight WHERE id like 2";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()) 
        {
        echo "". $row["message"]. " ";
        }
    } 
    else 
    {
    echo " ";
    }

?></p>
    <hr>

<h5>Trauma and Food</h5>

<p>
    <?php

    $sql = "SELECT message FROM weight WHERE id like 3";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()) 
        {
        echo "". $row["message"]. " ";
        }
    } 
    else 
    {
        echo " ";
    }

?>
</p>
    
    <hr>

<p>
    <?php

    $sql = "SELECT message FROM weight WHERE id like 4";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "". $row["message"]. " ";
        }
    } 
    else 
    {
    echo " ";
    }

?></p>
    
    <hr>


<h5>Treatments</h5>

<p>
    <?php
    
    $sql = "SELECT message FROM weight WHERE id like 5";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
        echo "". $row["message"]. " ";
        }
    } 
    else 
    {
    echo " ";
    }

?></p><hr>


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

