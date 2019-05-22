
<?php
session_start();
$x=$_SESSION['username'];

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
							$mail->Username="Email_id";
							$mail->Password="Password";
							$mail->SetFrom("Email ");
							$mail->Subject="Online Examnition portal";
							$mail->Body="hello  user's  it's me";
							$mail->AddAddress($login_user_email);
							if($mail->Send())
								{
									?>
									<div> <center><h1> Thanks for responding. </h1>
												<h3> please keep switch on you mobile or you can check email.</h3>
												<h3> you will be contacted soon.</h3>
												<h2> Thanks.</h2>
											</center>
										</div>
								<?php
								}
								else 
								echo "no";
?>

							
