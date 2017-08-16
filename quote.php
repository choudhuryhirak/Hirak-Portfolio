<?php
include("db.php");
$pagename="Contact Site";

echo "<title>".$pagename."</title>";

$fname=$_POST['firstname'];
echo 'first name is' .$fname.'<br>';

$lname=$_POST['lastname'];
echo 'last name is' .$lname.'<br>';

$email=$_POST['email'];
echo 'email name is' .$email.'<br>';

$phone=$_POST['phonenumber'];
echo 'number is' .$phone.'<br>';


$services=implode(',', $_POST['se']);
echo "services are" .$services."<br>";

$probrief=$_POST['message'];
$inprobrief=mysqli_real_escape_string($conn, $probrief);
echo "brief is" .$inprobrief. "<br>";

$estimate=$_POST['estimate'];
echo 'estimate is' .$estimate.'<br>';

echo "<br><h4>Your message has been submitted</h4>";

$SQLA="insert 
into users
        (Fname, Lname, Email, PNumber, Services, PBrief, Estimate)
            values
            ('".$fname."', '".$lname."', '".$email."', '".$phone."', '".$services."', '".$inprobrief."', '".$estimate."')";
        
$exeSQLA=mysqli_query($conn, $SQLA) or die(mysqli_error($conn));

echo "<br><h4>Your message has been submitted</h4>";


?>