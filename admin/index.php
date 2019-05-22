<html>
  <head>
      <title>admin login form</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 	<link rel="stylesheet" href="admin_css.css">	
  </head>

<body id="LoginForm">
<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" action="fatch_data.php" method="POST">
        <div class="form-group">
            <input type="email" class="form-control" name="username" placeholder="Email Address">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="forgot">
        <a href="reset.html">Forgot password?</a>
</div>
        <button type="submit" class="btn btn-primary" name="submit">Login</button>
        
    </form>
    </div>
</div>
</div>
	
</body>
</html>

