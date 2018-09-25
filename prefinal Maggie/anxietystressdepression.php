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

  <h1 style="text-align: center;">Anxiety and Stress</h1>
  
  <p>

  <?php

    $sql = "SELECT message FROM Anxiety WHERE id like 1";

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
    echo "No Content Found";
    }

?> 
</p> 
    <hr>
  
  <h4>What is Anxiety?</h4>
  
  <p>

  <?php

      $sql = "SELECT message FROM Anxiety WHERE id like 2";
      
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
    echo "No Content Found";
      }

?> 
</p>
  
  <h4>What does Anxiety feel like?</h4>
  
  <p>
      <?php

      $sql = "SELECT message FROM Anxiety WHERE id like 3";
      
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
     echo "No Content Found";
      }

?> 
    </p>
    
    <hr>
  
  <h4>The Effects of Anxiety</h4>
  
  <p>
      <?php

    $sql = "SELECT message FROM Anxiety WHERE id like 4";

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
     echo "No Content Found";
    }

?> 
    </p>
    
    <hr>
  
  <h4>How Hypnotherapy can help</h4>
  
  <p>
      <?php

      $sql = "SELECT message FROM Anxiety WHERE id like 5";
      
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
    echo "No Content Found";
      }

?> 
    </p>
    
    <hr>
  
  <h4>STRESS</h4>
  
  <p>
      <?php

      $sql = "SELECT message FROM Anxiety WHERE id like 6";

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
         echo "No Content Found";
      }

?> </p>  
    
    <hr>
  
  <h1>Depression</h1>
  
  <h4>How do you know if you are depressed?</h4>
  
  <p>
      <?php

      $sql = "SELECT message FROM Anxiety WHERE id like 7";
      
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
         echo "No Content Found";
      }

?> </p>
    
    <hr>

    <h4>How can Hypnotherapy help?</h4>

  <p>
      <?php

      $sql = "SELECT message FROM Anxiety WHERE id like 8";

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
     echo "No Content Found"; 
      }

?> 
</p>
    
    <hr>

</div>

<!--footer section-->

<?php include("include/footer.inc") ?>

<script src="js/jquery.admin.js"></script>

  <script src="js/validate.js" ></script>

  <script src="js/jquery.min.js" ></script>

  <script src="js/popper.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/navbar-fixed.js"></script>

  <script src="js/slick.js"></script>

  <script src="js/main.js"></script>

  </body>

  </html>

