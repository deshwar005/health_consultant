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
  <link rel="stylesheet"  href="consultation.css">
  <meta name="viewport" content="Width-device-Width, intial-scale=1.0">
  <!-- CSS only -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>

<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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


<div class="consultation">
    <div class="container">
        <div class="row">
          
            <div class="col-md-6 text-center">
              <div class="imgs ">
                <img src="hd1.png">
            </div>
          </div>
 

            <div class="col-md-6  text-center">
                <div class="content">
                <h4>Moniesh </h4>
                <h4>MBBS </h4>
                <h4>Dermatologist </h4>
                <h4>5Years</h4>
                
                      
      
                  </div>
                </div>
            </div>
            </div>

            <div class="col-md-12 text-center">
             <a href="http://localhost/ChatApp/users.php"><img src="chat-dots.svg" alt="chat"></a> 
              <a href="https://join.skype.com/yWIQFFcTkocR"><img src="camera-video-fill.svg" alt=""></a>
              <img src="envelope.svg" alt="">
            </div>
        </div> 
    </div>
</div>



</body>
<script>
 
</script>
</html>

