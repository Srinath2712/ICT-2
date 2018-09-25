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
    

    if(isset($_POST['hypnotherapy_duration'] $_POST['hypnotherapy_fees'])) 
    {
 
    $hyp_duration = $conn -> real_escape_string ($_POST['hypnotherapy_duration']);
    $hyp_fees = $conn -> real_escape_string ($_POST['hypnotherapy_fees']);
    
    $sql= "UPDATE fees SET hyp_d = '$hyp_duration' WHERE id=1";
        
    $sql= "UPDATE fees SET hyp_f = '$hyp_fees' WHERE id=1";  
    }

     if(isset($_POST['counselling_duration'] $_POST['counselling_fees'])) 
    {
 
    $coun_duration = $conn -> real_escape_string ($_POST['counselling_duration']);
    $coun_fees = $conn -> real_escape_string ($_POST['counselling_fees']);
    
    $sql= "UPDATE fees SET hyp_d = '$coun_duration' WHERE id=2";
        
    $sql= "UPDATE fees SET hyp_f = '$coun_fees' WHERE id=2";  
     }

 if(isset($_POST['individual_supervision_duration'] $_POST['individual_supervision_fees'])) 
    {
 
    $indi_duration = $conn -> real_escape_string ($_POST['individual_supervision_duration']);
    $indi_fees = $conn -> real_escape_string ($_POST['individual_supervision_fees']);
    
    $sql= "UPDATE fees SET hyp_d = '$indi_duration' WHERE id=3";
        
    $sql= "UPDATE fees SET hyp_f = '$indi_fees' WHERE id=3";  
     }

if(isset($_POST['group_supervision_duration'] $_POST['group_supervision_fees'])) 
    {
 
    $group_duration = $conn -> real_escape_string ($_POST['group_supervision_duration']);
    $group_fees = $conn -> real_escape_string ($_POST['group_supervision_fees']);
    
    $sql= "UPDATE fees SET hyp_d = '$group_duration' WHERE id=4";
        
    $sql= "UPDATE fees SET hyp_f = '$group_fees' WHERE id=4";  
     }
    if(!mysqli_query($conn,$sql))
    {
        echo 'Inserted';
    }
    else 
    {
        echo 'not inserted';
    }
    ?>