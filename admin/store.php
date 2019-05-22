<?php  

$conn=mysqli_connect('localhost','root','','onlineexam');
    if(!$conn){
        die('not connected'.mysqli_connect_error());
    }

 if(isset($_POST['Upload_image']))  
 {  
     
     $file1 = addslashes(file_get_contents($_FILES["image1"]["tmp_name"])); 
     $file2 = addslashes(file_get_contents($_FILES["image2"]["tmp_name"])); 
     $file3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"])); 
     $file4 = addslashes(file_get_contents($_FILES["image4"]["tmp_name"])); 
     $file5 = addslashes(file_get_contents($_FILES["image5"]["tmp_name"])); 
     
     /* $file1 = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
      $file2 = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));
      $file3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"]));
      $file4 = addslashes(file_get_contents($_FILES["image4"]["tmp_name"]));
      $file5 = addslashes(file_get_contents($_FILES["image5"]["tmp_name"]));*/
      $ans=$_POST['ans'];
      $select=$_POST['select'];
    
      $query = "INSERT INTO `questions`(`question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES ('$file1','$file2','$file3','$file4','$file5','$ans','$select')";  
     
     if(mysqli_query($conn, $query))  
      {  
          header('Location: admin_pannel.php');
      }
    }  

 ?> 