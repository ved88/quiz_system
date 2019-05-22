<?php
session_start();
$x=$_SESSION['user_email'];
if(!isset($_SESSION['user_email'])){
header('location:index.php');       
}
include('dbh.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
</head>
<body>
<div class="container">
  <h2>Online Quiz in php</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">Maths</a></li>
    <li><a href="About/about.php">About</a></li>
    <li><a href="feedback/feedback.php">Feedback</a></li>
     <li style="float:right"><a  href="logout.php" >log out</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
	   <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start Quiz</button></center>       
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">
        <form  method="post" action="qus_show.php">
		  <select class="form-control">
		  <option>select category</option>
		      <?php		  
		          $sql = mysqli_query($conn, "SELECT * From category");
              $row = mysqli_num_rows($sql);
            while ($row = mysqli_fetch_array($sql)){
              ?>			  			
			<option value="<?php echo $row['id'];?>"><?php echo $row['cat_name'];?></option>
			<?php   }?>
		  </select><br>
		  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
        </form>
        </div>
        </div>
        <div class="col-sm-4"></div>
        </div>

    
    <div id="menu2" class="tab-pane fade">
      <h3>MATHS</h3>
	   <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#se">Start Quiz</button></center>       
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="se" class="tab-pane fade">
        <form  method="post" action="display.php">
		  <select class="form-control">
		  <option>select category</option>
		      <?php		  
		          $sql = mysqli_query($conn, "SELECT * From category2");
              $row = mysqli_num_rows($sql);
            while ($row = mysqli_fetch_array($sql)){
              ?>			  			
			<option value="<?php echo $row['id'];?>"><?php echo $row['cat_name'];?></option>
			<?php   }?>
		  </select><br>
		  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
        </form>
        </div>
        </div>
        <div class="col-sm-4"></div>
        </div>

    
     <div id="menu1" class="tab-pane fade">
      <h3>Showing profile</h3>
      <table class="table">
      <thead>
        <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
      </tr>
      </thead>
      <tbody>
        <?php 
           
	       $sql = "SELECT user_id, user_name, user_email FROM users where user_email='$x'";
           $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                
                while($row = mysqli_fetch_assoc($result)) {
                   ?> <tr>
                        <td><?php echo $row["user_id"]?></td>
                        <td><?php echo $row["user_name"]?></td>
                        <td><?php echo $row["user_email"]?></td>
                      </tr>
       <?php
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
          ?>
        
            </tbody>
          </table>
            
	        </div>
    

        </div>
      </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>