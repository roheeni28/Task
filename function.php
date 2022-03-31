<?php 
$server = "localhost";
$username ="root";
$password ="";
$dbname = "feedback";

$conn = mysqli_connect($server, $username, $password, $dbname);

// echo "halo";
if(isset($_POST['submit'])){
    
    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $query = "insert into fbdb(fname,lname,email,phone,message) values('$fname', '$lname','$email', '$phone', '$message')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo "Form Submitted Successfully";
         }
        else {
            echo "Form Not Submitted";
        }
    }
    else{
        echo "All fields required";
    }
}

?>

