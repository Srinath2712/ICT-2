<?php

 $_SESSION['$user_name'] = "YourSession"; 

    if (!isset($_SESSION['$user_name'])) 
    {  
    $_SESSION['$user_name'] = true;
       
    }
      $conn = new mysqli('localhost', 'ictatjcu_mm', '123zxc', 'ictatjcu_mm');
    
    
 if (isset($_POST['relation1'])) 
   {
       $relation1 = $conn -> real_escape_string ($_POST['relation1']);
           
    $sql = "UPDATE Relation SET content = '$relation1' WHERE id=1";     
    }

  if (isset($_POST['relation2'])) 
   {
       $relation2 = $conn -> real_escape_string ($_POST['relation2']);
           
    $sql = "UPDATE Relation SET content = '$relation2' WHERE id=2";     
    }
  if (isset($_POST['relation3'])) 
   {
       $relation3 = $conn -> real_escape_string ($_POST['relation3']);
           
    $sql = "UPDATE Relation SET content = '$relation3' WHERE id=3";     
    }
   
    if(!mysqli_query($conn,$sql))
    {
        echo 'notInserted';
    }
    else 
    {
        echo 'Inserted';
    }
?>