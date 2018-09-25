
<?php
	
session_start();

if(time() - $_SESSION['timestamp'] > 120) 
{ 
    Echo "<script>alert ('2 Minutes over!'); </script>";
    
    unset($_SESSION['valid_user'], $_SESSION['timestamp']);
    
    $_SESSION['logged_in'] = false;
    
    header("Location: index.php");
    
    exit;
    
} 
else 
{
    $_SESSION['timestamp'] = time(); 
}
?>