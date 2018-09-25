<?php 

    session_start(); 

    require_once 'anxiety.php';
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
    
<form action="anxietystressdepression_edit.php" method="post">
    
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

