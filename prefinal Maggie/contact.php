<?php 

$error = '';
$firstname = '';
$lastname = '';
$email = '';
$message = '';

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string; 
}

if(isset($_POST["submit"]))
{
  if(empty($_POST("firstname")))
  {
      $error ='<p><label class="text-danger">Please Enter your Name </label></p>';
  }
    else 
    {
        $firstname = clean_text($_POST["firstname"]);
        if(!preg_match("/^[a-zA-Z]*$/", $firstname))
        {
             $error ='<p><label class="text-danger">only letters and spaces are allowed</label></p>';
        }
    }
if(empty($_POST("lastname")))
  {
      $error ='<p><label class="text-danger">Please Enter your Name </label></p>';
  }
    else 
    {
        $lastname = clean_text($_POST["lastname"]);
        if(!preg_match("/^[a-zA-Z]*$/", $lastname))
        {
             $error ='<p><label class="text-danger">only letters and spaces are allowed</label></p>';
        }
    }
    if(empty($_POST["email"]))
    {
         $error ='<p><label class="text-danger">Please Enter your email </label></p>';
    }
    else
    {
        $email = clean_text($_POST["email"]); 
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
             $error ='<p><label class="text-danger">Invalid Email format </label></p>';
        }
    }
    if(empty($_POST["message"]))
    {
       $error ='<p><label class="text-danger">Message is required</label></p>'; 
    }
    else
    {
        $message = clean_text($_POST["message"]);
    }
    if($error!= '')
    {
        require 'class/class.phpmailer.php';
        
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'localhost:8888';
        $mail->port = '25';
        $mail->SMTPAuth = 'true';
        $mail->Username = 'root';
        $mail->Password = 'root';
        $mail->SMTPSecure = 'ssl';
        $mail->From = $_POST["email"];
        $mail->FromName = $_POST["firstname"];
        $mail->AddAAddress('srinath_mupparsi@yahoo.com', 'firstname');
        $mail->wordwrap = 50;
        $mail->IsHTML(true);
        $mail->Body = $_POST["message"];
        if($mail->Send())
        {
              $error ='<p><label class="text-success">Thank you</label></p>'; 
        }
        else
        {
              $error ='<p><label class="text-danger">Error/label></p>'; 
        }
        $firstname = '';
        $lastname = '';
        $email = '';
        $message = '';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Maggie Maylin</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/slick.css">

</head>
<body>

  <?php include("include/index_main.inc") ?>
<?php echo $error; ?>
	<form method="POST">
    <br><br><br>
            <div class="container">
                        <h2 class="m-auto">Contact Us</h2>
                        <p>Fill the Form For Councelling</p>
                        <form role="form" method="post">
                            <div class="row">
                                <div class="col form-group">
                                    <label for="name"> First Name:</label>
                                    <input type="text" class="form-control" name="firstname" maxlength="50" value="<?php echo $firstname; ?>">
                                </div>
                                <div class="col form-group">
                                    <label for="name"> Last Name:</label>
                                    <input type="text" class="form-control" name="lastname" maxlength="50" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <label for="email"> Email:</label>
                                    <input type="text" class="form-control" name="email" required maxlength="50" value="<?php echo $email; ?>">
                                </div>
                              
                            </div>

                                <div class="row form-group">
                                    <label for="name"> Message:</label>
                                    <textarea class="form-control" type="textarea" name="message" placeholder="Your Message Here" maxlength="6000" rows="7" value="<?php echo $message; ?>"></textarea>
                                </div>


                                <div class="text-right ">
                                    <button type="submit" class="btn btn-info " id="btnContactUs" 
                                name="submit"    onclick="form()">Submit</button>
                                </div>
                
                <br>
                </form> 

      <div class="map_w3layouts_agile">
      <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.513940860454!2d153.00092911505718!3d-27.484387682884655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915099da350761%3A0x3d41b4068a189793!2s376+Montague+Rd%2C+West+End+QLD+4101!5e0!3m2!1sen!2sau!4v1536166820457"
      width="100%"
      height="450"
      frameborder="0"
      style="border:0"
      allowfullscreen>
      </iframe>
      </div>

            <?php include("include/footer.inc") ?>



              <script src="js/jquery.min.js" ></script>
              <script src="js/bootstrap.min.js"></script>
            </body>
            </html>
