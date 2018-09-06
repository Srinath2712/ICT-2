  <?php 

    session_start(); 
    $_SESSION['$user_name'] = "YourSession"; 


    if (!isset($_SESSION['$user_name'])) 
    {  
    $_SESSION['$user_name'] = true;
       
    }
   if (isset($_POST['meditation'], $_POST['meditate']))
   {
       
  $conn = new mysqli('localhost', 'root', 'root', 'Maggie');

if(!mysqli_select_db($conn,'Maggie'))
    {
        echo 'database not selected';
    }
 
        
$h_medi =  $_POST['meditation'];
$h_tips = $_POST['meditate'];

    $sql = "UPDATE Medi SET message = '$h_medi' WHERE id like 1";
    $sql = "UPDATE Medi SET message = '$h_tips' WHERE id like 2";
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
<style>
margin-bottom:0px;
padding-bottom:0px;
</style>

</head>

<body>





   <?php include("include/index_main.inc") ?>

<br>
<form action="meditation_edit.php" method="post">
    <fieldset>
<div class="container" >

<h1>Meditation content</h1>


    <textarea rows="6" cols="100"  name="meditation" > </textarea>
        <br>

<input type="submit" class="btn btn-secondary"  value="insert"/>
           

</div>
    </fieldset>

  <hr>
      
    <fieldset>
        <div class="container">
        
        <h2>Tips</h2>
            
          <textarea rows="6" cols="100"  name="meditate" > </textarea> &nbsp;
        <br>

<input type="submit" class="btn btn-secondary"  value="insert"/>
            
        </div>
    </fieldset>
    </form>





<!--footer section-->

<?php include("include/footer.inc") ?>

<script src="js/jquery.admin.js"></script>

<script src="js/jquery.min.js" ></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/navbar-fixed.js"></script>

<script src="js/slick.js"></script>

<script src="js/main.js"></script>

</body>

</html>

