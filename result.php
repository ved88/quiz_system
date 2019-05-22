<?php
session_start();
$x=$_SESSION['user_email'];
if(!isset($_SESSION['user_email'])){
header('location:index.php');       
}
include('dbh.php');
?>
    
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>answer</title>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
</head>
<body>

	<center>
	<?php
        <?php
         $right=0;
		 $wrong=0;
		 $no_answer=0;
         print_r($_POST);
		 $query=mysqli_query($conn,"select id,ans from question where cat_id='1' or cat_id='2' ");
	       while ($row = mysqli_fetch_array($query))	
        {			
               
			if($row['ans']==$_POST[$row['id']])
			{
				 $right++;
               
			}
			elseif($_POST[$row['id']]=="no_attempt")
			{
				 $no_answer++;
               
			}
			else
			{
				$wrong++;
               
			}
		$array['right']=$right;
		$array['wrong']=$wrong;
		$array['no_answer']=$no_answer;
		
           }
        echo "<br>";
             echo "right".$array['right'];
             echo "<br>";
             echo "wrong".$array['wrong'];
             echo "<br>";
             echo "no answer".$array['no_answer'];
             
    ?>

	$total_qus=$array['right']+$array['wrong']+$array['no_answer'];
	$attempt_qus=$array['right']+$array['wrong'];
  ?>

	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <h2>Your Quiz results</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total number of Questions</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted qusetions</td>
        <td><?php echo $attempt_qus;?></td>
      </tr>
      <tr>
        <td>Right answer </td>
        <td><?php echo $array['right'];?></td>
      </tr>
      <tr>
        <td>Wrong answer</td>
        <td><?php echo $array['wrong'];?></td>
      </tr>
	  <tr>
        <td>No answer</td>
        <td><?php echo $array['no_answer'];?></td>
      </tr>
	  <tr>
        <td>Your result</td>
        <td><?php 
		$per=($array['right']*100)/($total_qus);
		
		echo $per."%";
		?></td>
      </tr>
    </tbody>
  </table></div>
  <div class="col-sm-2"></div>
</div>
	</center>
	</body>
</html>