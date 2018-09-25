<?php

	session_start();

	include_once('include/config.php');	
    
    if (isset($_SESSION['valid_user']))
    {
		header("location: layout.php");
	}	
	require_once 'indexcon.php';    // Admin Login Details are Stored Here. 
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    
    <?php include("include/head.inc") ?>

</head>
    
<body>
    
<?php include("include/index_main.inc") ?>
    
<br>
    
    
<div class="abtme pb-4">
    
<div class="container">

  <div class="card-group " >
      
      <div class="card embed-responsive embed-responsive-16by9">
          
        <iframe src="https://www.youtube.com/embed/EVa-p5c8C4g" class="embed-responsive-item"></iframe>
          
      </div>
      
      <div class="card">
          
          <div class="card-body">
              
              <h4 class="card-title" style="text-align: center;">About US</h4>
              
                <p class="card-text">Hypnotherapy is a skilful blend of counselling and hypnosis to manage a variety of issues including loosing weight, stopping smoking or managing pain. Perhaps you have a few other habits which you've outgrown but they still linger on - nail biting, chocolate addictions or gambling.I am a fully qualified and registered Hypnotherapist and Counsellor with over 20 years experience in working with people. Please view my website for further details.Talk to me to find out how hypnosis is able to support you to bring about those changes in your life with ease.</p>
              
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
      
      &nbsp;
      
    <h2 class="text-center">News and Articles</h2>
      
    <div class="row">
        
      <div class="col">
          
        <div class="slider">
            
           <div>
               
            <blockquote class="blockquote">
                
                <p><strong>Hynotherapy in Brisbane</strong></p><p>
                
There are a number of people providing hypnotherapy in Brisbane, but how can you tell if they are any good? 
The first thing to look at is their website to see what qualifications and registrations they hold.  Most trained and qualified hypnotherapists belong to an association.  Each of these associations requires their members to have completed an approved training program and to have undertaken a number of years of supervised practise before being allowed full Professional Clinical membership.<a href="http://hypnobrisbane.blogspot.com/2012/04/hynotherapy-in-brisbane.html"><font color="white" >Read More</font></a> </p>
                
            </blockquote>
               
          </div>
            
            <div>
                
            <blockquote class="blockquote">
                
                <p><strong>Pain Research and Hypnosis </strong> </p>
                
                 <p> I found this abstract from a research paper on pain and hypnosis and thought it may be of interest to people who are in pain and finding it difficult to find ways to manage it.<a href="http://hypnobrisbane.blogspot.com/2012/04/pain-research-and-hypnosis.html"><font color="white" >Read More</font></a></p>
                
            </blockquote>
                
          </div>
            
          <div>
              
            <blockquote class="blockquote">
                
                <p><strong>What is hypnosis and hypnotherapy</strong></p><p>
                
Many people are interested in hypnotherapy and wonder if this is for them.  Or perhaps you're just curious. I find the following definition helpful. <a href="http://hypnobrisbane.blogspot.com/2011/05/what-is-hypnosis-and-hypnotherapy.html"><font color="white" >Read More</font></a></p>
                
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
        
      <div class="col">
          
        <div class="text-center"><br>
            
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
