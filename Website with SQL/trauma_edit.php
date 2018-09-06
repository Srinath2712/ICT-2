  <?php 

    session_start(); 
    $_SESSION['$user_name'] = "YourSession"; 


    if (!isset($_SESSION['$user_name'])) 
    {  
    $_SESSION['$user_name'] = true;
       
    }
 $conn = new mysqli('localhost', 'root', 'root', 'Maggie');

   if (isset($_POST['trauma'])) {
     

        $_trau = $conn -> real_escape_string ($_POST['trauma']);
    
    $sql = "UPDATE trauma SET content = '$_trau' WHERE id=1";

   }

if (isset( $_POST['traum'])) {
    
    $_tra = $conn -> real_escape_string ($_POST['traum']);
    
       $sql = "UPDATE trauma SET content = '$_tra' WHERE id=2";
       
    }
  if(!mysqli_query($conn,$sql))
    {
        echo 'not Inserted';
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

  <h1>Trauma</h1>
  
  <h3>WHAT IS TRAUMA?</h3>
    
    <form action="trauma_edit.php" method="POST">
    <fieldset>
<div class="container" >

<input type="text" name="trauma">
        <br>

<input type="submit" class="btn btn-secondary"  value="insert"/>
           

</div>
    </fieldset>
    </form>
    </div>
<form action="trauma_edit.php" method="POST">
    <div class="container">
        
    <fieldset>
<div class="container" >


    <textarea  name="traum" > </textarea>
        <br>

<input type="submit" class="btn btn-secondary"  value="insert"/>
           

</div>
    </fieldset>
        </div>
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

