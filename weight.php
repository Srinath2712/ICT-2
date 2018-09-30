 <?php
 $_SESSION['$user_name'] = "YourSession"; 

    if (!isset($_SESSION['$user_name'])) 
    {  
    $_SESSION['$user_name'] = true;
        
    }
       
     $conn = new mysqli('localhost', 'ictatjcu_mm', '123zxc', 'ictatjcu_mm');
    
    
if(!mysqli_select_db($conn,'Maggie'))
    {
        echo 'database not selected';
    }

    if (isset($_POST['weight']))s
    {
    $w_weight = $conn -> real_escape_string($_POST['weight']);
       
    $sql = "UPDATE weight SET message = '$w_weight' WHERE id=1";      
    }
    if (isset($_POST['weigh']))   
    {
    $w_weigh = $conn -> real_escape_string($_POST['weigh']);

    $sql = "UPDATE weight SET message = '$w_weigh' WHERE id=2";
        
    }
      if (isset($_POST['weigh1']))   
    {
    $w_weigh1 = $conn -> real_escape_string($_POST['weigh1']);

    $sql = "UPDATE weight SET message = '$w_weigh1' WHERE id=3";
        
    }
    if (isset($_POST['weigh2']))   
    {
    $w_weigh2 = $conn -> real_escape_string($_POST['weigh2']);

    $sql = "UPDATE weight SET message = '$w_weigh2' WHERE id=4";
        
    }
    if (isset($_POST['weigh3']))   
    {
    $w_weigh3 = $conn -> real_escape_string($_POST['weigh3']);

    $sql = "UPDATE weight SET message = '$w_weigh3' WHERE id=5";
        
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