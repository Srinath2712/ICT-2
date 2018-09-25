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

<h1 style="text-align: center;">Smoking</h1>

<h4>Quit Smoking Hypnosis</h4>

<p>
    <?php

    $sql = "SELECT content FROM Smoking WHERE id like 1";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
        echo "". $row["content"]. " ";
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

    $sql = "SELECT content FROM Smoking WHERE id like 2";
    
    $result = $conn->query($sql);
        
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
        echo "". $row["content"]. " ";
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

    $sql = "SELECT content FROM Smoking WHERE id like 3";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
        echo "". $row["content"]. " ";
        }
    } 
    else 
    {
    echo " ";
    }

?>
</p>
<hr>
<h1>Alcohol</h1>

<h4>Letting go of Alcohol with Hypnosis and Counselling</h4>
 
 <p>
     <?php

     $sql = "SELECT content FROM Smoking WHERE id like 4";

    $result = $conn->query($sql);
    
     if ($result->num_rows > 0) 
     {
         while($row = $result->fetch_assoc()) 
         {
        echo "". $row["content"]. " ";
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

     $sql = "SELECT content FROM Smoking WHERE id like 5";

     $result = $conn->query($sql);
    
     if ($result->num_rows > 0) 
     {
         while($row = $result->fetch_assoc())
         {
            echo "". $row["content"]. " ";
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

     $sql = "SELECT content FROM Smoking WHERE id like 6";

     $result = $conn->query($sql);
    
     if ($result->num_rows > 0) 
     {
        while($row = $result->fetch_assoc()) 
        {
        echo "". $row["content"]. " ";
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

     $sql = "SELECT content FROM Smoking WHERE id like 7";

     $result = $conn->query($sql);
    
     if ($result->num_rows > 0) 
     {
        while($row = $result->fetch_assoc())
        {
        echo "". $row["content"]. " ";
        }
    } 
     else 
     {
    echo " ";
     }

?>
</p>
<hr>

<h1>Gambling</h1>

 <p>
     <?php

     $sql = "SELECT content FROM Smoking WHERE id like 8";

     $result = $conn->query($sql);
    
     if ($result->num_rows > 0) 
     {
        while($row = $result->fetch_assoc()) 
        {
        
            echo "". $row["content"]. " ";
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


     $sql = "SELECT content FROM Smoking WHERE id like 9";

     $result = $conn->query($sql);
    
     if ($result->num_rows > 0)
        {
         while($row = $result->fetch_assoc()) 
         {
        
             echo "". $row["content"]. " ";
         }
     } 
    else 
    {
    
        echo " ";
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

