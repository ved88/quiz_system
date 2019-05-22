<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style=" background-image:url(Laptop.jpg); "> 
  <div class="container" >
    

<div class="container">
      
        <div class="col-sm-12 " style="padding-top: 20px;">
         <a href="#"><img src="logo.png"></a>
              
        </div>
      
  </div>

     <div class="container">
                     <div class="col-sm-12">       
            
                <div class="col-sm-6 " style="color: gray; padding-top: 90px">

                                    <h2 >Welcome to online examination portal</h2>
                        Access your test series, score performance report, online study materials and recent updates. Get the ultimate simulated experience of the actual test with complete strength and weakness analysis.
           
              </div>
              <div class="col-sm-6" style="padding-left: 45px;">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>SignIn Form</h2>
                      <h6> Sign In to get instant access:</h6>                    
                    </div>
                     
                      <div class="panel-body">
                      <form  action="login.php" method="POST">
                       
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" name="pwd" placeholder="Enter password">
                        </div>


       <input type="submit" name="submit" value="Sign In">  
       
        <div class="text-left" style="font-size: 14px;"><br>
            <span class="no__account"><i>Don't have an account.?</i><a href="signup.php" class="account__regiter"> Sign Up </a></span>
        </div><br>
        <div class="text-left" style="font-size: 14px;"><br>
            <span class="no__account"><i></i><a href="admin/index.php" class="account__regiter"> Admin Login </a></span>
        </div><br>
        
                        
                        
                        
                      </form>
                  </div>
              </div>
          </div>
         
 
        </div>
      </div>
      </div>


  
  
</body>
</html>
