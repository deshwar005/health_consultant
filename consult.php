<?php 
  include('conneccontact.php')
?>
<!DOCTYPE html>
<html>
<head>
  <title>Consult</title>
  <link rel="stylesheet"  href="consult1.css">
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
        <a class="nav-link " href="index.php">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active-home" href="consult.php">CONSULT</a>
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
           
            echo "<a id=\"register\" class=\"nav-link\" href=\"index.php?logout='1'\">Logout</span></a>";
        }
        else{
            echo "<a  class=\"nav-link\" href=\"login.php\">Log In</a>";
       
        }
        ?>
      </li>
    </ul>
  </div>
</nav>


<!--first box-->


<!--first box heading-->
<div class="container">
<div class="row banner ">



<div class="ba1">
<div class="col-md-6 text-center">

<h4>CommonSpecialities</h4>
</div>
</div>


<div class="ba2 ">
<div class="col-md-6">

<a class="ba2b" href="#">Show more</a>
</div>
</div>

</div>
</div>


<!--first box heading end-->




<!--first box content-->
<div class="container">
<div  class="row  text-center">


  <div class=" col-md-3  ">
   <a href="hair&skin.php"> <img class="first" src="skin.jpg"></a>
    <h6 class=" ftxt">Hair&skin<br>specialist</h6>
  </div>

   <div class=" col-md-3">
    <a href=""> <img class="sec"src=" child.jpg"></a>
      <h6 class=" ftxt">Children'Care</h6>
  </div>
   <div class="col-md-3 ">
    <a href="">  <img class="first"src="women.jpg"></a>
     <h6 class=" ftxt">Gynaecologist</h6>

  </div>
  <div class="col-md-3  ">
    <a href=""> <img class="first"src="physician1.jpg"></a>
     <h6 class=" ftxt">Physician</h6>

  </div>
  

 </div>
</div>
 <!--first box content end-->



<!--second box -->

<!--second box  heading start -->
<div class="container">
<div class="row banner ">



<div class="ba1">
<div class="col-md-6 text-center">

<h4>OrganHealth</h4>
</div>
</div>


<div class="ba2 ">
<div class="col-md-6">
<a class="ba2b "href="#">Show more</a>
</div>
</div>
</div>
</div>
<!--second box  heading end -->




<!--second box content-->

<div class="container">
<div class="row  text-center">


  <div class="col-md-3">
    <a href=""><img  class="first" src="ear.jpg"></a>
     <h6 class=" ftxt">Earnose&<br>Throat</h6>
  </div>




<div class="col-md-3">
  <a href=""> <img class="first" src="eye.jpg"></a>
     <h6 class=" ftxt">Eyes</h6>
  </div> 




<div class="col-md-3">
  <a href=""> <img class="first"  src="Teeth.jpg"></a>
      <h6 class=" ftxt">Teeth</h6>
  </div>



<div class="col-md-3">
  <a href="">  <img class="first"  src="skin.jpg"></a>
     <h6 class=" ftxt">Bones&<br>Joints</h6>
  </div>


  
<div class="col-md-3">
  <a href=""> <img class="first"  src="heart.jpg"></a>
     <h6 class=" ftxt">Heart</h6>
  </div>
  

  
<div class="col-md-3">
  <a href="">  <img class="first"  src="lung.jpg"></a>
     <h6 class=" ftxt">Lung</h6>
  </div>
 
  


  
</div>
</div>
<!--second content close-->
























 
 
 


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
          <li><a href="ABOUT.php">Privacy policy</a></li>
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