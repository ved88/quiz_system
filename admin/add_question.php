<?php
$conn = mysqli_connect("localhost","root","","onlineexam");
$q=$_POST['ques'];
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op3=$_POST['op3'];
$op4=$_POST['op4'];
$ans=$_POST['ans'];
$select=$_POST['select'];
if(!$conn){
    die("connecetion:failed to connect".mysqli_connect_error());
}
if(isset($_POST['submit']))  
{
    
    $query="INSERT INTO `question`(`question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES ('$q','$op1','$op2','$op3','$op4','$ans','$select')";    

    if (mysqli_query($conn, $query)) {
    	header('location:admin_pannel.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);

?>