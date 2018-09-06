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

    if(!mysqli_query($conn,$sql))
    {
        echo 'notInserted';
    }
    else 
    {
        echo 'Inserted';
    }
?>


<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Maggie Maylin</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">

  <link rel="stylesheet" href="css/font-awesome.min.css">

  <link rel="stylesheet" href="css/bootstrap.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/slick-theme.css">

  <link rel="stylesheet" href="css/slick.css">

</head>

<body>





  <?php include("include/index_main.inc") ?>

<br>
    
    <div class="container">
    

 <h1>Anxiety and Stress</h1>
         
    <form action="anxietystressdepression_edit.php" method="POST">
   
        <fieldset>
      
            <div class="container" >
          
                <textarea rows="6" cols="100"  name="anx"> </textarea>
        <br>
          
                <input type="submit" class="btn btn-secondary" value="insert"/> 
        </div>
        
    </fieldset>

    </form>
    </div>
    
<form action="anxietystressdepression_edit.php" method="POST">

    <div class="container">
    
        <fieldset>
       
            <div class="container" >
         
                    <textarea rows="6" cols="100"  name="srinath" > </textarea>
        <br>
            
                    <input type="submit" class="btn btn-secondary" value="insert"/> 
        </div>
    
            </fieldset>
    </div>
        </form>

 <form action="anxietystressdepression_edit.php" method="post">
  
     <fieldset>
        
         <div class="container" >
             
             <h3>What is Anxiety?</h3>
             
        <textarea rows="6" cols="100"  name="Anxiety2" > </textarea>
             <br>
             
             <input type="submit" class="btn btn-secondary"  value="insert"/> 
             
         </div>
         
    </fieldset>
     
</form>
    
<!--<form action="anxietystressdepression_edit.php" method="post">
    <fieldset>
<div class="container" >
  <h3>What does Anxiety feel like?</h3>
   <textarea rows="6" cols="100"  name="Anxiety3" > </textarea>
        <br>
<input type="submit" class="btn btn-secondary"  value="insert"/>      
</div>
    </fieldset>
</form>
  
 <form action="anxietystressdepression_edit.php" method="post">
    <fieldset>
<div class="container" >
  <h4>The Effects of Anxiety</h4>
  <textarea rows="6" cols="100"  name="Anxiety4" > </textarea>
        <br>
<input type="submit" class="btn btn-secondary"  value="insert"/>      
</div>
    </fieldset>
</form>
<form action="anxietystressdepression_edit.php" method="post">
    <fieldset>
<div class="container" >
  <h4>How Hypnotherapy can help</h4>
 <textarea rows="6" cols="100"  name="Anxiety5" > </textarea>
        <br>
<input type="submit" class="btn btn-secondary"  value="insert"/>      
</div>
    </fieldset>
</form>
<form action="anxietystressdepression_edit.php" method="post">
    <fieldset>
<div class="container" >
  <h4>STRESS</h4>
  <textarea rows="6" cols="100"  name="Anxiety6" > </textarea>
        <br>
<input type="submit" class="btn btn-secondary"  value="insert"/>      
</div>
    </fieldset>
</form> 
 <form action="anxietystressdepression_edit.php" method="post">
    <fieldset>
<div class="container" > 
  
  <h1>Depression</h1>
  <textarea rows="6" cols="100"  name="Anxiety7" > </textarea>
        <br>
<input type="submit" class="btn btn-secondary"  value="insert"/>      
</div>
    </fieldset>
</form> 
<form action="anxietystressdepression_edit.php" method="post">
    <fieldset>
<div class="container" > 
<h4>How can Hypnotherapy help?</h4>
<textarea rows="6" cols="100"  name="Anxiety8" > </textarea>
        <br>
<input type="submit" class="btn btn-secondary"  value="insert"/>      
</div>
    </fieldset>
</form> 





--> 
    



<!--footer section-->

<?php include("include/footer.inc") ?>

<script src="js/jquery.admin.js"></script>

  <script src="js/validate.js" ></script>

  <script src="js/jquery.min.js" ></script>

  <script src="js/popper.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/navbar-fixed.js"></script>

  <script src="js/slick.js"></script>

  <script src="js/main.js"></script>

  </body>

  </html>

