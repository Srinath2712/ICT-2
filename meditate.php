 <?php
 
 $_SESSION['$user_name'] = "YourSession"; 


    if (!isset($_SESSION['$user_name'])) 
    {  
    $_SESSION['$user_name'] = true;
       
    }
     $conn = new mysqli('localhost', 'ictatjcu_mm', '123zxc', 'ictatjcu_mm');
    

   if (isset($_POST['meditation']))
   {
     $h_medi = $conn -> real_escape_string( $_POST['meditation']);

    $sql = "UPDATE Medi SET message = '$h_medi' WHERE id=1";
  
    }
    if (isset($_POST['meditate']))
    {    
        $h_tips = $conn -> real_escape_string ($_POST['meditate']);
    
        $sql = "UPDATE Medi SET message = '$h_tips' WHERE id=2";

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