<?php 

    session_start(); 

    require_once 'meditate.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    
    <?php include("include/head.inc") ?>

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
    
    </form>
  <hr>
  
    <form action="meditation_edit.php" method="post">    
    
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

