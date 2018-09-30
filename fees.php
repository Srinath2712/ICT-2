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

  <h1>Hypnotherapy</h1>
  
 <p>The number of visits required for successful hypnotherapy will vary according to your issue and presenting symptoms.  The one aspect which affects the number of sessions is motivation.  The more motivated a person is, the less sessions they need to bring about a significant change in their lives.  If there are deep seated underlying causes several sessions may be required.   I aim to be flexible in my approach to your treatment and will work with you to ensure the best possible outcomes for permanent change. </p>
<hr>
       <p>For best results with anxiety, stress, trauma, depression, weight reduction, eating disorders, alcohol  or where there are a number of behaviours you would like to change you may require several sessions, the number depending on the complexity of your situation. </p>
        
 <legend>Individual Hypnotherapy sessions</legend>
        
<?php

$sql = "SELECT hyp_d, hyp_f FROM fees where id like 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Hypnotherapy Duration: "."&nbsp;"  . $row["hyp_d"]."&nbsp;". "&nbsp;" ."&nbsp;". "&nbsp;" . "Fees: " . "&nbsp;" ."&nbsp;"."&nbsp;" .$row["hyp_f"]. "";
        
    }
} else {
    echo "0 results";
}
?> 
        
   <hr>     
     <legend>Individual Counselling Sessions</legend>
        <?php

$sql = "SELECT hyp_d, hyp_f FROM fees where id like 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Hypnotherapy Duration: "."&nbsp;"  . $row["hyp_d"]."&nbsp;". "&nbsp;" ."&nbsp;". "&nbsp;" . "Fees: " . "&nbsp;" ."&nbsp;"."&nbsp;" .$row["hyp_f"]. "";
        
    }
} else {
    echo "0 results";
}
?>    
        <hr>
          <legend>Individual Counselling Supervision Sessions</legend>
         <?php

$sql = "SELECT hyp_d, hyp_f FROM fees where id like 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Hypnotherapy Duration: "."&nbsp;"  . $row["hyp_d"]."&nbsp;". "&nbsp;" ."&nbsp;". "&nbsp;" . "Fees: " . "&nbsp;" ."&nbsp;"."&nbsp;" .$row["hyp_f"]. "";
        
    }
} else {
    echo "0 results";
}
?>   
        <hr>
        
           <legend>Group Counselling Supervision Sessions</legend>        <?php

$sql = "SELECT hyp_d, hyp_f FROM fees where id like 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Hypnotherapy Duration: "."&nbsp;"  . $row["hyp_d"]."&nbsp;". "&nbsp;" ."&nbsp;". "&nbsp;" . "Fees: " . "&nbsp;" ."&nbsp;"."&nbsp;" .$row["hyp_f"]. "";
        
    }
} else {
    echo "0 results";
}
?>   
        <hr>
        <h3>Cancellations</h3>
    <p>It is usual practice to provide a minimum of 24 hours for a cancellation or change of an appointment.  If you provide less than this, I will need to charge you a booking fee of $70.  If you do not cancel and fail to turn up for your appointment I will need to charge you for the full price of your session.</p>
    
    <p><strong>Up to 20 minute phone consultation to assess your situation: FREE</strong></p>
    
  

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
