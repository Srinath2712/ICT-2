<?php

   session_start(); 
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
    
  if (isset($_POST['anx'])) 
   {
       $stres = $conn -> real_escape_string ($_POST['anx']);
           
    $sql = "UPDATE Anxiety SET message = '$stres' WHERE id=1";     
    }

    if (isset($_POST['srinath'])) 
    {
        
        $sri = $conn -> real_escape_string ($_POST['srinath']);
      
       $sql = "UPDATE Anxiety SET message = '$sri' WHERE id=2";
    }
    

if (isset($_POST['Anxiety2'])) 
    {
        
        $anxiety2 = $conn -> real_escape_string ($_POST['Anxiety2']);
      
       $sql = "UPDATE Anxiety SET message = '$anxiety2' WHERE id=3";
    }
 if (isset($_POST['Anxiety3'])) 
    {
        
        $anxiety3 = $conn -> real_escape_string ($_POST['Anxiety3']);
      
       $sql = "UPDATE Anxiety SET message = '$anxiety3' WHERE id=4";
    }
 if (isset($_POST['Anxiety4'])) 
    {
        
        $anxiety4 = $conn -> real_escape_string ($_POST['Anxiety4']);
      
       $sql = "UPDATE Anxiety SET message = '$anxiety4' WHERE id=5";
    }
 if (isset($_POST['Anxiety5'])) 
    {
        
        $anxiety5 = $conn -> real_escape_string ($_POST['Anxiety5']);
      
       $sql = "UPDATE Anxiety SET message = '$anxiety5' WHERE id=6";
    }
 if (isset($_POST['Anxiety6'])) 
    {
        
        $anxiety6 = $conn -> real_escape_string ($_POST['Anxiety6']);
      
       $sql = "UPDATE Anxiety SET message = '$anxiety5' WHERE id=7";
    }
 if (isset($_POST['Anxiety7'])) 
    {
        
        $anxiety7 = $conn -> real_escape_string ($_POST['Anxiety7']);
      
       $sql = "UPDATE Anxiety SET message = '$anxiety7' WHERE id=8";
    }
 if (isset($_POST['Anxiety8'])) 
    {
        
        $anxiety8 = $conn -> real_escape_string ($_POST['Anxiety8']);
      
       $sql = "UPDATE Anxiety SET message = '$anxiety8' WHERE id=9";
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