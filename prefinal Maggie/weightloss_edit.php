<?php 

   session_start();

  require_once 'weight.php';

?>

 
<!DOCTYPE html>

<html lang="en">

<head>
    
    <?php include("include/head.inc") ?>
    
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

<div class="container">
     
    <h5>Trauma and Food</h5>
    
    <form action="weightloss_edit.php" method="post">
    <fieldset>
<div class="container" >


    <textarea rows="6" cols="100"  name="weigh1" > </textarea>
        <br>

<input type="submit" class="btn btn-secondary"  value="insert"/>
           

</div>
    </fieldset>

    </form>

    
    </div>

    <div class="container">
        
    <form action="weightloss_edit.php" method="post">
    <fieldset>
<div class="container" >


    <textarea rows="6" cols="100"  name="weigh2" > </textarea>
        <br>

<input type="submit" class="btn btn-secondary"  value="insert"/>
           

</div>
    </fieldset>

    </form>

    
    </div>

    <div class="container">
        
        <h5>Treatments</h5>
        
    <form action="weightloss_edit.php" method="post">
    <fieldset>
<div class="container" >


    <textarea rows="6" cols="100"  name="weigh3" > </textarea>
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

