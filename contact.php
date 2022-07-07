<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'username', 'password','form');

// get the post records
$regno = $_POST['regno'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$bday = $_POST['bday'];
$Nationality = $_POST['Nationality'];
$county = $_POST['county'];
$hobbies = $_POST['hobbies'];


// database insert SQL code
$sql = "INSERT INTO `details` (`Registration number`, `First Name`, `Last Name`,`Email`, `Gender`, `Dob`, `Nationality`, `County`,`Hobbies`) VALUES ('$regno', '$firstname', '$lastname','$email', '$gender', '$bday', '$Nationality', '$county', '$hobbies')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
<break>
<break>
<a href="index.html">
  <button>Register</button>
  <break>
  <a href="data.php">
  <button>Registry</button>
  <a href="/">
  <button>exit</button>
</a>