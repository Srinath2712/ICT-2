  <?php 

    session_start(); 
  require_once 'f.php';
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

<h1>Hypnotherapy</h1>

    <p>The number of visits required for successful hypnotherapy will vary according to your issue and presenting symptoms.  The one aspect which affects the number of sessions is motivation.  The more motivated a person is, the less sessions they need to bring about a significant change in their lives.  If there are deep seated underlying causes several sessions may be required.   I aim to be flexible in my approach to your treatment and will work with you to ensure the best possible outcomes for permanent change. </p>
   
    <hr>
    <p>For best results with anxiety, stress, trauma, depression, weight reduction, eating disorders, alcohol  or where there are a number of behaviours you would like to change you may require several sessions, the number depending on the complexity of your situation. </p>
    
    <hr>
    <div class="container">
     <form action="fees_edit.php" method="post">
     <fieldset>
     <legend>Individual Hypnotherapy sessions</legend>

          <div class="form-group">

            <label >Hypnotherapy Duration</label>
            
            <input type="text" name="hypnotherapy_duration">
            
            <label >Hypnotherapy Fees</label>
           
            <input type="text" name="hypnotherapy_fees">
        

            <input type="submit" class="btn btn-secondary"  value="insert"/>
           

          </div>
     </fieldset>
    </form>
    </div>
           
    <div class="container">
    <form action="fees_edit.php" method="post">
    <fieldset>
     <legend>Individual Counselling Sessions</legend>

          <div class="form-group">

            <label for="Counselling_Duration">Counselling Duration</label>
            
            <input type="text" name="counselling_duration">
            
            <label for="Counselling_Fees">Counselling Fees</label>
           
            <input type="text" name="counselling_fees">

          </div>
     </fieldset>
        </form>
    </div>
    <div class="container">
    <form action="fees_edit.php" method="post">
     
     <fieldset>
     <legend>Individual Counselling Supervision Sessions</legend>

          <div class="form-group">

            <label for="Individual_Supervision_Duration">Individual Duration</label>
            
            <input type="text" name="individual_supervision_duration">
            
            <label for="individual_supervision_fees">Individual Fees</label>
           
            <input type="text" name="individual_supervision_fees">

          </div>
     </fieldset>
        </form>
    </div>
    <div class="container">
    <form action="fees_edit.php" method="post">
     <fieldset>
     <legend>Group Counselling Supervision Sessions</legend>

          <div class="form-group">

            <label for="Group_Supervision_Duration">Group Duration</label>
            
            <input type="text" name="group_supervision_duration">
            
            <label for="Group_Supervision_Fees">Group Fees</label>
           
            <input type="text" name="group_supervision_fees">

          </div>
     </fieldset>
        </form>
    </div>
    <hr>
    <h3>Cancellations</h3>
    <p>It is usual practice to provide a minimum of 24 hours for a cancellation or change of an appointment.  If you provide less than this, I will need to charge you a booking fee of $70.  If you do not cancel and fail to turn up for your appointment I will need to charge you for the full price of your session.</p>
    
    <p><strong>Up to 20 minute phone consultation to assess your situation: FREE</strong></p>
    
    

</div>





<!--footer section-->

<?php include("include/footer.inc")  ?>

<script src="js/jquery.admin.js"></script>

  <script src="js/jquery.min.js" ></script>

  <script src="js/popper.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/navbar-fixed.js"></script>

  <script src="js/slick.js"></script>

  <script src="js/main.js"></script>

  </body>

  </html>
