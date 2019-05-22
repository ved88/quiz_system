<?php
if (isset($_POST['submit'])) {
	session_start();
    include 'dbh.php';
	 $email = $_POST['email'];
	 $pwd =$_POST['pwd'];

 	if (empty($email) || empty($pwd)) {
 		
 		header('Location: index.php');
 		echo "<script>alert('fields are empty');</script>";
 		exit();
 		
 	} else{


 		$sql = "SELECT * FROM users WHERE user_email='$email'";
 		$result = mysqli_query($conn , $sql);
 		$resultCheck = mysqli_num_rows($result);
 		if ($resultCheck < 1) {
 			
 			header("Location: index.php?login=user Does Not Exist  ");
		exit();
 		} else {

 			if ($row = mysqli_fetch_assoc($result)) {
 				
 				
 				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);

 				if ($hashedPwdCheck == false) {
 					header('Location: index.php?login=PasswordDidnotmatch ');
 	
 					exit();
 				}else if ($hashedPwdCheck == true) {

 					

                    $_SESSION['user_email']= $_POST['email'];
                        
 						header('Location: home.php?login=LoginSuccess');
				 		
						exit();
 					
 				}

 			}

 		}

 	} 
}