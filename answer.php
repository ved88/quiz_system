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
         $right=0;
		 $wrong=0;
		 $no_answer=0;
         $query=mysqli_query($conn,"select id,ans from question where cat_id='1'");
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
	<div class="col-md-12 text-center"> 
    <a href="logout.php" class="btn btn-info" role="button">Log Out</a>
</div>
   
	</body>
</html>




<?php
$q=$per;
$y=$array['right'];
$z=$array['wrong'];
$w=  $array['no_answer'];

	require 'PHPMailer/PHPMailerAutoload.php';
						$login_user_email=$x;
						$mail=new PHPMailer();
							$mail->isSmtp();
							$mail->SMTPDebug=0;
							$mail->SMTPAuth=true;
							$mail->SMTPSecure='tls';
							$mail->Host="smtp.gmail.com";
							$mail->Port=587;//587
							$mail->isHTML(true);
							$mail->Username="email id";
							$mail->Password="password";
							$mail->SetFrom("email id");
              $mail->Subject=" Online Examnition portal";
              
							$mail->Body="<b>hello...</b>". $x ."<b>mail from online examination portal</b><br>"."<b>correct answer is:-</b>".$y."<br><b>wrong answer is:-</b>".$z."<br><b>not attempted:-<b>".$w."<br><b>Percentage:-".$q."</b>";
              
              
              
              $mail->AddAddress($login_user_email);
							if($mail->Send())
								{
									?>
										<div> <center><h1> Thanks for participate in the online examination. </h1>
												<h3> Result would be sended on your registered mail id also.</h3>
												<h3> Check your mail id.</h3>
												<h2> Thanks.</h2>
                        
											</center>
										</div>
								<?php
								}
								else {
								echo "no";
                }
                ?>

							












