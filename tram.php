<?php 
$_SESSION['$user_name'] = "YourSession"; 

    if (!isset($_SESSION['$user_name'])) 
    {  
    $_SESSION['$user_name'] = true;
       
    }
     $conn = new mysqli('localhost', 'ictatjcu_mm', '123zxc', 'ictatjcu_mm');
    


   if (isset($_POST['trauma'])) 
   {
     
    $_trau = $conn -> real_escape_string ($_POST['trauma']);
    
    $sql = "UPDATE trauma SET content = '$_trau' WHERE id=1";

   }

    if (isset( $_POST['traum'])) 
    {
    
    $_tra = $conn -> real_escape_string ($_POST['traum']);
    
    $sql = "UPDATE trauma SET content = '$_tra' WHERE id=2";
       
    }
  if(!mysqli_query($conn,$sql))
    {
        echo 'not Inserted';
    }
    else 
    {
        echo 'Inserted';
    }
    ?>