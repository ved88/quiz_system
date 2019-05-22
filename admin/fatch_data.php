<?php
   include("config.php");
   
    if(isset($_POST['submit']))     
    {
        
        $uname=$_POST['username'];
        $pass=$_POST['password'];
        
        $query="select * from admin where username='".$uname."' AND password ='".$pass."' LIMIT 1";
        
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){
                  session_start();
                  $_SESSION['username']  =  $_POST['username'];
                  
           header('Location: admin_pannel.php');
        
           exit();
           
        }
        else{
             header('Location: index.php');
            exit();
        }      
    }
  