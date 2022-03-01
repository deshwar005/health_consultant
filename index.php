<?php 
  session_start(); 

 
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet"  href="home1.css">
  <meta name="viewport" content="Width-device-Width, intial-scale=1.0">
	<!-- CSS only -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

</head>


<body>
  <div class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"><img src="logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto text-right">
      <li class="nav-item active">
        <a class="nav-link active-home" href="#">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="consult.php">CONSULT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>
       <li class="nav-item">
       <?php
        if(isset($_SESSION['username'])){
           
            echo "<a id=\"register\" class=\"btn1\" href=\"index.php?logout='1'\">Logout</span></a>";
        }
        else{
            echo "<a  class=\"btn1\" href=\"login.php\">Log In</a>";
       
        }
        ?>
      </li>
    </ul>
  </div>
</nav>
<div class="row banner">
  <div class="col-md-6">
   <h1>We Care for you</h1>
   <p> Care helps people in providing guidence to their health <br>And support them for a speedy recovery</p>
    <a class="express-btn text-center" href="ABOUT.php">know more</a>
     <a class=" text-center" href="consult.php">Explore</a>
   </div>
   <div class="col-md-6 text-center">
   <img src="doctor_PNG16039.png">



  </div>
</div>

    </div>
 


<div class="container">
<div class="row banner ">




  <div class="col-md-6 text-center">
    <img   class="h22" src ="hd2.png">
  </div>

    <div class="col-md-6">
      <div class="hmid">
      <h1>why care?</h1>
        <p>Get contact with the top doctors and we are always<br> here to help you and this is cost free and this platform <br>provide clear overview to your problems </p>
      </div>
   
  </div>

    


   








  </div>
</div>
</div>




<div class="footer  bg-dark">
  <div class="container">
    <div class="row ">


      <div class="footer-col col-md-3">
        <h4>Address</h4>
       <p>santhampettai,
         marungapallam,
         peravurani,
         thanjavur </p>
         <br>
      </div>

      <div class="footer-col  col-md-3"> 
        <h4>BLOG</h4>
        <ul>
          <li><a href="">health</a></li>
          <li><a href="">cardiac</a></li>
          <li><a href="">lung</a></li>
          <li><a href="">fitness</a></li>
        </ul>
      </div>

      <div class="footer-col  col-md-3"> 
        <h4>LINK</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="about.php">Privacy policy</a></li>
          <li><a href="about.php">About us</a></li>
        </ul>
      </div>

      <div class="footer-col  col-md-3  text-center"> 
        <h4>SOCIAL</h4>
      <img src="104461_twitter_icon.png">
      <img src="353422_facebook_logo_icon.png">
      <img src="1161954_instagram_icon.png">
      </div>

    </div>
  </div>
</div>
</body>
</html>

