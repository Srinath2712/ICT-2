<?php
_SESSION['$user_name'] = "YourSession"; 


    if (!isset($_SESSION['$user_name'])) 
    {  
    $_SESSION['$user_name'] = true;
       
    }
   $conn = new mysqli('localhost', 'ictatjcu_mm', '123zxc', 'ictatjcu_mm');
    
    if(!mysqli_select_db($conn,'ictatjcu_mm'))
    {
        echo 'database not selected';
    }

   if (isset($_POST['announcement1'])) 
   {
       $Announce = $conn -> real_escape_string ($_POST['announcement1']);
           
    $sql = "UPDATE Announcement SET content = '$Announce' WHERE id=1";     
    }

   if (isset($_POST['announcement2'])) 
   {
    $Announce2 = $conn -> real_escape_string ($_POST['announcement2']);
           
    $sql = "UPDATE Announcement SET content = '$Announce2' WHERE id=2";     
    }

   if (isset($_POST['announcement3'])) 
   {
    $Announce3 = $conn -> real_escape_string ($_POST['announcement3']);
           
    $sql = "UPDATE Announcement SET content = '$Announce3' WHERE id=3";     
    }
   if (isset($_POST['announcement4'])) 
   {
    $Announce4 = $conn -> real_escape_string ($_POST['announcement4']);
           
    $sql = "UPDATE Announcement SET content = '$Announce4' WHERE id=4";     
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