<?php 

 $_SESSION['$user_name'] = "YourSession"; 


    if (!isset($_SESSION['$user_name'])) 
    {  
    $_SESSION['$user_name'] = true;
       
    }
      $conn = new mysqli('localhost', 'ictatjcu_mm', '123zxc', 'ictatjcu_mm');
    
 if (isset($_POST['smoke'])) 
   {
       $smoke = $conn -> real_escape_string ($_POST['smoke']);
           
    $sql = "UPDATE Smoking SET content = '$smoke' WHERE id=1";     
    }

 if (isset($_POST['smoke1'])) 
   {
       $smoke1 = $conn -> real_escape_string ($_POST['smoke1']);
           
    $sql = "UPDATE Smoking SET content = '$smoke1' WHERE id=2";     
    }

 if (isset($_POST['smoke2'])) 
   {
       $smoke2 = $conn -> real_escape_string ($_POST['smoke2']);
           
    $sql = "UPDATE Smoking SET content = '$smoke2' WHERE id=3";     
    }
 if (isset($_POST['smoke3'])) 
   {
       $smoke3 = $conn -> real_escape_string ($_POST['smoke3']);
           
    $sql = "UPDATE Smoking SET content = '$smoke3' WHERE id=4";     
    }
 if (isset($_POST['smoke4'])) 
   {
       $smoke4 = $conn -> real_escape_string ($_POST['smoke4']);
           
    $sql = "UPDATE Smoking SET content = '$smoke4' WHERE id=5";     
    }
 if (isset($_POST['smoke5'])) 
   {
       $smoke5 = $conn -> real_escape_string ($_POST['smoke5']);
           
    $sql = "UPDATE Smoking SET content = '$smoke5' WHERE id=6";     
    }
 if (isset($_POST['smoke6'])) 
   {
       $smoke6 = $conn -> real_escape_string ($_POST['smoke6']);
           
    $sql = "UPDATE Smoking SET content = '$smoke6' WHERE id=7";     
    }
 if (isset($_POST['smoke7'])) 
   {
       $smoke7 = $conn -> real_escape_string ($_POST['smoke7']);
           
    $sql = "UPDATE Smoking SET content = '$smoke7' WHERE id=8";     
    }
 if (isset($_POST['smoke8'])) 
   {
       $smoke8 = $conn -> real_escape_string ($_POST['smoke8']);
           
    $sql = "UPDATE Smoking SET content = '$smoke8' WHERE id=9";     
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