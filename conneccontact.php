<?php
session_start();
// initializing variables
$fname="";
$lname="";
$email="";
$message="";
$errors=array();


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'healthconsult');


//save the review
if(isset($_POST['btn-send'])){


    //receive all review from user
    $fname=mysqli_real_escape_string($db,$_POST['fname']);
    $lname=mysqli_real_escape_string($db,$_POST['lname']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $message=mysqli_real_escape_string($db,$_POST['message']);


    //validation
    if (empty( $fname)) {
         array_push($errors, "firstname is required");
         }

    
    if (empty( $email)) {
                array_push($errors, "email is required");
                }

     if (empty( $message)) {
                    array_push($errors, "message is required");
                    }          



   
    if (count($errors) == 0) {

        $query="INSERT INTO review(fname,lname,email,message) VALUES('$fname','$lname','$email','$message')";
        mysqli_query($db,$query);
        echo "<script>alert(sucess);</script>";
        header('location: index.php');
        

}
}

?>