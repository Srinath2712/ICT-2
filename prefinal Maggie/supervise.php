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

if (isset($_POST['supervision1'])) 
   {
       $Announce = $conn -> real_escape_string ($_POST['supervision1']);
           
    $sql = "UPDATE Supervision SET content = '$Announce' WHERE id=1";     
    }

   if (isset($_POST['supervision2'])) 
   {
    $Announce2 = $conn -> real_escape_string ($_POST['supervision2']);
           
    $sql = "UPDATE Supervision SET content = '$Announce2' WHERE id=2";     
    }

   if (isset($_POST['supervision3'])) 
   {
    $Announce3 = $conn -> real_escape_string ($_POST['supervision3']);
           
    $sql = "UPDATE Supervision SET content = '$Announce3' WHERE id=3";     
    }
   if (isset($_POST['supervision4'])) 
   {
    $Announce4 = $conn -> real_escape_string ($_POST['supervision4']);
           
    $sql = "UPDATE Supervision SET content = '$Announce4' WHERE id=4";     
    }
if (isset($_POST['supervision5'])) 
   {
    $Announce4 = $conn -> real_escape_string ($_POST['supervision5']);
           
    $sql = "UPDATE Supervision SET content = '$Announce4' WHERE id=5";     
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