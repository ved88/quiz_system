<?php
if(isset($_POST['submit'])){
 	
    include_once 'dbh.php';
    
 	$name = /*htmlspecialchars*/$_POST['name'] ;
 	$phno = /*htmlspecialchars*/$_POST['phno'] ;
 	$email =/* htmlspecialchars*/$_POST['email'] ;
 	$pwd =/* htmlspecialchars*/$_POST['pwd'] ;
 	/*$phno = mysql_real_escape_string($conn, $_POST['phno']) ;
 	$email = mysql_real_escape_string($conn, $_POST['email']) ;
 	$pwd = mysql_real_escape_string($conn, $_POST['pwd']) ;*/


 	//Error Handlers
 	//Check For Empty Fields

 	if (empty($name) || empty($phno) || empty($email) || empty($pwd)) {
 		
 		header("Location: signup.php?signup=empty ");
 		//echo "<script>alert('fields are empty');</script>";
 		echo "empty";
	exit();
 	}
 	else{
 		
 			//check if input caharacters are valid

 		if (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[0-9]*$/", $phno )) {

				header("Location: signup.php?signup=invalid");
				echo"checking";
				exit();

 			
 		}else{


 			//check if email is valid 
 			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 				header("Location: signup.php?signup=email");
 				echo"validation";
				exit();
 			}else{
 				 		
					$sql = "SELECT * FROM users WHERE user_email='$email'";
					if($result = mysqli_query($conn, $sql)){
							
							$resultCheck = mysqli_num_rows($result);

							if($resultCheck > 0) {
								header("Location: signup.php?signup=usertaken");
								exit();
							}else{
									//hashing the password

									$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

									//Insert tje user into database

									$sql = "INSERT INTO users (user_name, user_phone, user_email, user_pwd) VALUES ('$name', '$phno', '$email', '$hashedPwd')" ;

									 mysqli_query($conn , $sql);
									 
									 header("Location: index.php?signup=8");
									 exit();
							//}

 				
 			}
 		}
 		}
 	}

}
/*else{

	//header("Location: ../signup.php");
	//exit();*/
}