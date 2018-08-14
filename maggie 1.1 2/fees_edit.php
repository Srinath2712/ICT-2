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

      <link rel="stylesheet" href="css/found.css">
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
    
     <form action="index.php" method="post">
     <fieldset>
     <legend>Individual Hypnotherapy sessions</legend>

          <div class="form-group">

            <label for="Hypnotherapy_Duration">Hypnotherapy Duration</label>
            
            <input type="text" name="hypnotherapy_duration">
            
            <label for="Hypnotherapy_Fees">Hypnotherapy Fees</label>
           
            <input type="text" name="hypnotherapy_fees">

          </div>
     </fieldset>
     <fieldset>
     <legend>Individual Counselling Sessions</legend>

          <div class="form-group">

            <label for="Counselling_Duration">Counselling Duration</label>
            
            <input type="text" name="counselling_duration">
            
            <label for="Counselling_Fees">Counselling Fees</label>
           
            <input type="text" name="counselling_fees">

          </div>
     </fieldset>
     
     <fieldset>
     <legend>Individual Counselling Supervision Sessions</legend>

          <div class="form-group">

            <label for="Individual_Supervision_Duration">Individual Duration</label>
            
            <input type="text" name="individual_supervision_duration">
            
            <label for="Individual_Supervision_Fees">Individual Fees</label>
           
            <input type="text" name="individual_supervision_fees">

          </div>
     </fieldset>
     
     <fieldset>
     <legend>Group Counselling Supervision Sessions</legend>

          <div class="form-group">

            <label for="Group_Supervision_Duration">Group Duration</label>
            
            <input type="text" name="group_supervision_duration">
            
            <label for="Group_Supervision_Fees">Group Fees</label>
           
            <input type="text" name="group_supervision_fees">

          </div>
     </fieldset>

<!--
          <div class="form-group">

            <label for="Individual_Counselling_Sessions">Individual Counselling Sessions</label>

            <input type="text" name="individual_counselling _sessions" class="form-control">

          </div>
          <div class="form-group">

            <label for="Individual_Counselling_Supervision_Sessions">Individual Counselling Supervision Sessions</label>

            <input type="text" name="individual_counselling_supervision_sessions" class="form-control">

          </div>
          <div class="form-group">

            <label for="Group_Counselling_Supervision_Sessions">Group Counselling Supervision Sessions</label>

            <input type="text" name="group_counselling_supervision_sessions" class="form-control">

          </div>
-->
            <div class="form-group">
            <input type="reset" class="btn btn-secondary" onclick="check(this.form)" value="clear"/>
            <input type="submit" class="btn btn-secondary" onclick="check(this.form)" value="Submit"/>
            </div>
            <?php 
				if(isset($error)) {
				echo "<p style=\"color: red;\">$error</p>";
				unset($error);
				}
			?>

          </form>
    
    <!--
    <div id="Table">
    
        <h3>Health Fund Rebates Available</h3>&nbsp;
        <table>
  <tr>
    <th>Sessions</th>
    <th>Duration</th>
    <th>Price</th>
  </tr>
  <tr>
    <td>Individual Hypnotherapy sessions</td>
    <td>1 - 1.5 hrs</td>
    <td> $150 </td>
  </tr>
        </table> &nbsp;
        <h3>Counselling</h3>&nbsp;
        <table>
            <tr>
    <th>Sessions</th>
    <th>Duration</th>
    <th>Price</th>
  </tr>
  <tr>
    <td>Individual Counselling Sessions</td>
    <td>50Min</td>
    <td>$100</td>
  </tr>
</table> &nbsp;
        <h3>Supervision</h3>&nbsp;
        <table>
            <tr>
    <th>Sessions</th>
    <th>Duration</th>
    <th>Price</th>
  </tr>
  <tr>
    <td>Individual Counselling Supervision Sessions</td>
    <td>60 Min</td>
    <td>$90</td>
  </tr>
             <tr>
    <td>Group Counselling Supervision Sessions</td>
    <td>90 Min</td>
    <td>$120</td>
  </tr>
</table>

   
    </div> <br>
    -->
    <h3>Cancellations</h3>
    <p>It is usual practice to provide a minimum of 24 hours for a cancellation or change of an appointment.  If you provide less than this, I will need to charge you a booking fee of $70.  If you do not cancel and fail to turn up for your appointment I will need to charge you for the full price of your session.</p>
    
    <p><strong>Up to 20 minute phone consultation to assess your situation: FREE</strong></p>
    
    

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
