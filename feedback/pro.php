<?php
	include_once 'dbh.php';
if(isset($_POST['submit'])){
 	$name =$_POST['name'] ;
 	$email =$_POST['email'] ;
 	$message =$_POST['message'] ;
 						$sql = "INSERT INTO contactus (name, email, message) VALUES ('$name', '$email', '$message')" ;

									if(mysqli_query($conn , $sql))
									{
									 echo "Thank You For Contacting Us ";
									   header("Location:feedback.php");
									}
							
}
?>