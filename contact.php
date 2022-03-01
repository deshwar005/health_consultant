<?php include('conneccontact.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <link rel="stylesheet"  href="contact2.css">
  <meta name="viewport" content="Width-device-Width, intial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

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
        <a class="nav-link " href="consult.php">CONSULT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active-home" href="contact.php">CONTACT</a>
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
</div>
</div>



<!--header end-->
<div class="contact">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="head text-center text-white py-3">
                  <h3>contact us</h3>
                </div>
              </div>
            </div>
               <form id="form" action="contact.php"  method="POST">
               <?php include('errors.php'); ?>
            <div class="form py-3">
              <div class="form-row my-5">
                <div class="col-lg-6">
                  <input type="text" class="effect-1" name="fname"placeholder="First name"value="<?php echo $fname; ?>" required>
                  <span class="focus-border"></span>
                </div>
                <div class="col-lg-6">
                  <input type="text" class="effect-1" name="lname"placeholder="last name"value="<?php echo $lname; ?> "required>
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="form-row pb-5">
                <div class="col-lg-12">
                  <input type="text" class="effect-1"name="email" placeholder="Email"value="<?php echo $email; ?>"required>
                  <span class="focus-border"></span>

                </div>
              </div>
              <div class="form-row pt-5">
                <div class="col-lg-12">
                  <input type="text" class="effect-1" name="message"placeholder="Your message"value="<?php echo $message; ?>"required>
                  <span class="focus-border"></span>

                </div>
              </div>



           
              <div class="form-row pt-4">
                <div class="col-lg-6">
                  
                <div class="offset-2 col-lg-4">
                  <button type="submit" class="btn1" name="btn-send">Send</button>
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="footer bg-dark">
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
<script>
  let form = document.getElementsByTagName("form")[0];
form.addEventListener("submit", (e) => {
  e.preventDefault();
  alert("Form Submitted!");
});
</script>
</html>
