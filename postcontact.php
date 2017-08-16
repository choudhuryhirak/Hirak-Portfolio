<?php
include("db.php");
$pagename="Contact Confirmed";

echo "<title>".$pagename."</title>";

$fname=$_POST['name'];
echo 'first name is' .$fname.'<br>';

$lname=$_POST['lname'];
echo 'last name is' .$lname.'<br>';

$email=$_POST['email'];
echo 'email name is' .$email.'<br>';

$message=$_POST['message'];
$inmessage=mysqli_real_escape_string($conn, $message);
echo "brief is" .$inmessage. "<br>";

echo "<br><h4>Your message has been submitted</h4>";

$SQLB="insert into messa
        (FirstName, LastName, Email, Message)
            values
            ('".$fname."', '".$lname."', '".$email."', '".$inmessage."')";
        
$exeSQLB=mysqli_query($conn, $SQLB) or die(mysqli_error($conn));

?>