<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login.php');
}

    require_once "config.php";

if(isset($_POST["id"]) && !empty($_POST["id"])){
    
  
        $query=("SELECT * FROM users");
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result);
        $id=$_POST['id'];
    
        
        $sql=("DELETE from users WHERE user_id='$id'");
        $result2=mysqli_query($conn,$sql);

        
        header("location:user_profile.php");

    mysqli_close($conn);
} 
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
                        <h1>Delete Record</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="user_profile.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>