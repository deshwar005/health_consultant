<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Consult</title>
  <link rel="stylesheet"  href="hair&skin - Copy.css">
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
  <a class="navbar-brand" href="#"><img src="logo1.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">


    <ul class="navbar-nav ml-auto text-right">
      <li class="nav-item active">
        <a class="nav-link " href="index.php">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active-home" href="consult.php">CONSULT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ABOUT.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>
       <li class="nav-item">
         <a class="btn1" href="index.php?logout='1'">logout</a>
      </li>
    </ul>


  </div>
</nav>
</div>
</div>
<div class="bk">

<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <div class="heading">
            <h1>SKIN CARE & HAIR</h1>
        </div>
        </div>
    </div>
</div>






<div class="container">
  
  <div class="row">
 
  <div class="col-md-4 text-center">
     <div class="cards">
      <div class="docimg">
      <img src="hd1.png">
    </div>

      <div class="detail text-center">
   <h5 >Sam</h5>
   <p >MBBS</p>
   <p >Dermatologist</p>
   <p>5Years</p>
  
  <a class="contbtn text-center"href="consultation.php
  ">Contact</a>
  
</div>
</div> 
</div>


<div class="col-md-4 text-center">
    <div class="cards">
    <div class="docimg">
        <div class="secimg">
    <img src="hd2 - Copy.png">
</div>
  </div>

    <div class="detail text-center">
 <h5 >Adithya</h5>
 <p >MBBS</p>
 <p >Dermatologist</p>
 <p>5Years</p>

<a class="contbtn text-center"href="consultation.php">Contact</a>
</div>
</div>
</div>


<div class="col-md-4 text-center">
    <div class="cards">
    <div class="docimg">
    <img src="hd3.png">
  </div>

    <div class="detail text-center">
 <h5 >chris evans</h5>
 <p >MBBS</p>
 <p >Dermatologist</p>
 <p>5Years</p>

<a class="contbtn text-center"href="consultation.php">Contact</a>
</div>

</div>
</div>

















</div>
  </div>
</div>






</body>
</html>
