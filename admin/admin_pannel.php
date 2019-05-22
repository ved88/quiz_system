<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login.php');
}
?>
<html>
    <head>
    <title>ADMINPANNEL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    </head>
      <body>
         <div class="container">
           <div class="row">
               <div class="col-md-3" ><h1><small><mark class="text-center">ADMIN PANNEL</mark></small></h1></div>
                 <div align="right"> <?php
                        
                        if(!isset($_SESSION['username'])){
                            header('Location:index.php');
                        }
                        echo 'Hello'." ".$_SESSION['username'];
                        echo '<a href="logout.php"> Logout</a>'
                    ?>
                    </div>
           </div><br/>
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">ONLINE QUIZ</a>
            </div>
            <div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="admin_pannel.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                <li ><a href="admin_profile.php">Profile</a></li>
                <li ><a href="user_profile.php">Users</a></li>
              </ul>
            </div>
          </div>
        </nav>
        
       <div class="container">
              <div class="jumbotron">
                <h1 class="text-center">EXAM PORTAL</h1>      
                <p  class="text-center">Admin pannel for uploading different type of exam</p>      
              </div>
       </div>
       
       <div class="container">
      <h2>Dashboard</h2>
      <form  action="add_question.php" method="POST">
        <div class="form-group">
          <label for="text">Question:</label>
          <input type="text" class="form-control" name="ques" placeholder="Enter question">
        </div>
        <div class="form-group">
          <label for="text">Option-A:</label>
          <input type="text" class="form-control" name="op1" placeholder="Enter option-A" >
        </div>
        <div class="form-group">
          <label for="text">Option-B:</label>
          <input type="text" class="form-control" name="op2" placeholder="Enter option-B" >
        </div>
        <div class="form-group">
          <label for="text">Option-C:</label>
          <input type="text" class="form-control" name="op3" placeholder="Enter option-C" >
        </div>
        <div class="form-group">
          <label for="text">Option-D:</label>
          <input type="text" class="form-control" name="op4" placeholder="Enter option-D">
        </div>
        <div class="form-group">
          <label for="text">Answer:</label>
          <input type="text" class="form-control" name="ans" placeholder="Enter answer" >
        </div>
        <div class="form-group">
               <lable class="control-label col-sm-1" name="category"><strong>CATEGORY</strong></lable>
               <div class="col-md-2">
               <select class="form-control"  name="select">
                   <option value="1">PHP</option>
               </select>
               </div><br>
               <br>
            <button type="submit" class="btn btn-default" name="submit">Submit</button>
          </div>
          </form>
          </div>
        
          
            
    <div class="container">
      <h2>Maths Question</h2>
      <form  action="maths_question.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="text">Question:</label>
              <input type="file" name="image1" value="image" />
        </div>
        <div class="form-group">
          <label for="text">Option-A:</label>
         <input type="file" name="image2" value="image" />
        </div>
        <div class="form-group">
          <label for="text">Option-B:</label>
          <input type="file" name="image3" value="image" />
        </div>
        <div class="form-group">
          <label for="text">Option-C:</label>
          <input type="file" name="image4" value="image" />
        </div>
        <div class="form-group">
          <label for="text">Option-D:</label>
          <input type="file" name="image5" value="image" />
        </div>
        <div class="form-group">
          <label for="text">Answer:</label>
          <input type="text" class="form-control" name="ans" placeholder="Enter answer" >
        </div>
        <div class="form-group">
               <lable class="control-label col-sm-1" name="category"><strong>CATEGORY</strong></lable>
               <div class="col-md-2">
               <select class="form-control"  name="select">
                   <option value="2">MATHS</option>
               </select>
               </div><br>
               <br>
            <button type="submit" class="btn btn-default" name="submit">Submit</button>
          </div>
          </form>
          </div>
           
         
            
                                 
                                                           
                                  
                                              
                                                        
                                                                    
                                                                                            
    </body>
</html>
