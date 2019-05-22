<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login.php');
}

include('config.php');

if(isset($_POST["id"]) && !empty($_POST["id"])){
    
    $query="SELECT * FROM user";
    $result = mysqli_query($conn,$query);
    
            if(mysqli_num_rows($result)){
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $id = $row["id"];
                $name = $row["name"];
                
            } else{
                
                header("location: user_profile.php");
                exit();
            }
        } else{
            
            echo "Oops! Something went wrong. Please try again later.";
        }
  
     
    mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>ID</label>
                        <p class="form-control-static"><?php echo $_POST['id']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $_POST['name']; ?></p>
                    </div>
                    <p><a href="user_profile.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>