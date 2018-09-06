  <?php 

    session_start(); 
    $_SESSION['$user_name'] = "YourSession"; 


    if (!isset($_SESSION['$user_name'])) 
    {  
    $_SESSION['$user_name'] = true;
       
    }
    
   if (isset($_POST['weight'], $_POST['weigh'])) {
       
  $conn = new mysqli('localhost', 'root', 'root', 'Maggie');
       
if(!mysqli_select_db($conn,'Maggie'))
    {
        echo 'database not selected';
    }

    $w_weight =  $_POST['weight'];
       $w_weigh = $_POST['weigh'];
    

    $sql = "UPDATE weight SET message = '$w_weight' WHERE id like 1";
       $sql = "UPDATE weight SET message = '$w_weigh' WHERE id like 2";
       
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

</head>

<body>

  <?php include("include/index_main.inc") ?>

<br>

<div class="container">

<h1>Weight Loss</h1>


<h4>Weight Loss Hypnosis and Counselling</h4>

<h5>General over eating or poor eating habits</h5>
    
        
    <form action="weightloss_edit.php" method="post">
    <fieldset>
<div class="container" >


    <textarea rows="6" cols="100"  name="weight" > </textarea>
        <br>

<input type="submit" class="btn btn-secondary"  value="Submit"/>
           

</div>
    </fieldset>

    </form>

    </div>

 <div class="container">
        
    <form action="weightloss_edit.php" method="post">
    <fieldset>
<div class="container" >


    <textarea rows="6" cols="100"  name="weigh" > </textarea>
        <br>

<input type="submit" class="btn btn-secondary"  value="insert"/>
           

</div>
    </fieldset>

    </form>

    
    </div>




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

