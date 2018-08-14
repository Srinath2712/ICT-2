<?php
	session_start();
	include_once('include/config.php');	
		if (isset($_SESSION['valid_user'])) {
		header("location: layout.php");
	}	
	$conn  = db_connect();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      $user_name = $conn -> real_escape_string($_POST['userid']);
      $user_password = $conn -> real_escape_string($_POST['pswrd']); 
      $sql = "select * from users where user_name='$user_name' and user_password='$user_password'";
	  $result = $conn -> query($sql);
	  $numOfRows = $result -> num_rows;
	  $row = $result -> fetch_assoc();
	  if ($numOfRows == 1) {
         $_SESSION['valid_user'] = $user_name;         
         header("location: layout.php");
      }else {
		  $error = 'Your Login Name or Password is invalid';
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
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/slick.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<?php include("include/index_main.inc") ?>

<div class="abtme pb-4">
<div class="container">
  <h2>What is it that sets Maggie apart from other Hypnotherapists?</h2>
  <div class="card-group " >
      <div class="card embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube.com/embed/EVa-p5c8C4g" class="embed-responsive-item"></iframe>
      </div>
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Card Title</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem obcaecati ullam officia dolore adipisci ut perspiciatis deleniti magni eaque consequatur corporis nam natus distinctio, debitis, fugiat totam, cumque maiores. Culpa.</p>
          </div>
      </div>
  </div>
</div>
</div>



<section id="showcase" class="py-4">
    <div class="container">
      <div class="card-group">
          <div class="card" >
            <a href="https://www.theaca.net.au/" target="_blank"><img class="card-img-top" src="img/acalogo.jpg"></a>  
          </div>
          <div class="card" >
            <a href="https://www.aachp.com/" target="_blank"><img class="card-img-top" src="img/aachpi.jpg" width="10px"></a>    
          </div>
          <div class="card" >
            <a href="" target="_blank"><img class="card-img-top" src="img/hcalogo.jpg"></a>
          </div>
      </div>
  </div>
</section>


                <!--News and Articles-->
<section class="second text-white ">
  <div class="container">
    <h2 class="text-center">News and Articles</h2>
    <div class="row">
      <div class="col">
        <div class="slider">
          <div>
            <blockquote class="blockquote">
              <p>1) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </blockquote>
          </div>
          <div>
            <blockquote class="blockquote">
              <p>2) Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit porro tempore sapiente quae maiores fuga dolorem veritatis animi pariatur praesentium. In quidem impedit quis. Fugit doloribus quis officiis magnam quia.</p>
            </blockquote>
          </div>
          <div>
            <blockquote class="blockquote">
              <p>3) Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate temporibus voluptatem dignissimos sit, quibusdam nobis delectus explicabo iure dolores deleniti! Architecto perspiciatis, repudiandae aspernatur totam nobis odit laborum dolores illo!</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<footer  class="bg-dark text-white main-footer">
  <div class="container">
    <div class="row">
      <div class="col ">
        <div class="text-center">
          <h1 class="h5">Maggie Maylin Clinical Hypnotherapy and Counselling</h1>
          <p>Copyright &copy; 2018</p>
        </div>
      </div>
    </div>
      <button class="btn btn-info mb-1" data-toggle="modal" data-target="#loginModal">Admin Login</button>
  </div>
</footer>

<div class="modal" id="loginModal">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title">Login</h5>

        <button class="close" data-dismiss="modal">&times;</button>

      </div>

      <div class="modal-body">

        <form action="index.php" method="post">

          <div class="form-group">

            <label for="username">Username</label>

            <input type="text" name="userid" class="form-control">

          </div>

          <div class="form-group">

            <label for="password">Password</label>

            <input type="password" name="pswrd" class="form-control">

          </div>

            <div class="form-group">

            <button class="btn btn-secondary" data-dismiss="modal">Close</button>

       <input type="submit" class="btn btn-secondary" onclick="check(this.form)" value="Login"/>

            </div>
            <?php 
				if(isset($error)) {
				echo "<p style=\"color: red;\">$error</p>";
				unset($error);
				}
			?>

          </form>

        </div>

      </div>

    </div>

    </div>

<script src="js/jquery.admin.js"></script>

  <script src="js/jquery.min.js" ></script>

  <script src="js/popper.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/navbar-fixed.js"></script>

  <script src="js/slick.js"></script>

  <script src="js/main.js"></script>

</body>

</html>
