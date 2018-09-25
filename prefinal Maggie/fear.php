<?php

$_SESSION['$user_name'] = "YourSession"; 


    if (!isset($_SESSION['$user_name'])) 
    {  
    $_SESSION['$user_name'] = true;
       
    }

$conn = new mysqli('localhost', 'root', 'root', 'Maggie');
    
    if(!mysqli_select_db($conn,'Maggie'))
    {
        echo 'database not selected';
    }

if (isset($_POST['fears1'])) 
   {
       $Announce = $conn -> real_escape_string ($_POST['fears1']);
           
    $sql = "UPDATE Fears SET content = '$Announce' WHERE id=1";     
    }

   if (isset($_POST['fears2'])) 
   {
    $Announce2 = $conn -> real_escape_string ($_POST['fears2']);
           
    $sql = "UPDATE Fears SET content = '$Announce2' WHERE id=2";     
    }

   if (isset($_POST['fears3'])) 
   {
    $Announce3 = $conn -> real_escape_string ($_POST['fears3']);
           
    $sql = "UPDATE Fears SET content = '$Announce3' WHERE id=3";     
    }
   if (isset($_POST['fears4'])) 
   {
    $Announce4 = $conn -> real_escape_string ($_POST['fears4']);
           
    $sql = "UPDATE Fears SET content = '$Announce4' WHERE id=4";     
    }
if (isset($_POST['fears5'])) 
   {
    $Announce4 = $conn -> real_escape_string ($_POST['fears5']);
           
    $sql = "UPDATE Fears SET content = '$Announce4' WHERE id=5";     
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