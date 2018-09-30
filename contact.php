<?php

include("include/config.php") ?>

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


<?php include("include/all_main_head.inc") ?>

<br><br><br><br><br><br>
        <div class="container">
                <div class="col-lg-8 col-md-offset">
                    <h2>Contact Us</h2> 
                    <p>Fill the Form For Councelling</p>
                    <form role="form" method="post">
                        <div class="row">
                            <div class="col-sm-8 form-group">
                                <label for="name"> First Name:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50">
                            </div>
                            <div class="col-sm-8 form-group">
                                <label for="name"> Last Name:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 form-group">
                                <label for="email"> Email:</label>
                                <input type="text" class="form-control" id="email" name="email" required maxlength="50">
                            </div>
                            <div class="col-sm-8 form-group">
                                <label for="email"> Phone:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="name"> Message:</label>
                                <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs" onclick="form()">Submit</button>
                            </div>
                        </div>                </div>

            </div>

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
