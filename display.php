  
<?php
session_start();
$x=$_SESSION['user_email'];
if(!isset($_SESSION['user_email'])){
header('location:index.php');       
}
include('dbh.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	function timeout()
	{
		var hours=Math.floor(timeLeft/3600);
		var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
		var second=timeLeft%60;
		var hrs=checktime(hours);
		var mint=checktime(minute);
		var sec=checktime(second);
		if(timeLeft<=0)
		{
			clearTimeout(tm);
			document.getElementById("form1").submit();
		}
		else
		{

			document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
		}
		timeLeft--;
		var tm= setTimeout(function(){timeout()},1000);
	}
	function checktime(msg)
	{
		if(msg<10)
		{
			msg="0"+msg;
		}
		return msg;
	}
	</script>
  
</head>
<body onload="timeout()" >

<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		  <h2>Onilne quiz in php 
		  <script type="text/javascript">
		  var timeLeft=2*60*60;
		  
		  </script>
		  
		  <div id="time"style="float:right">timeout</div></h2>
		<?php
		$i=1;
		 $query=mysqli_query($conn,"SELECT * FROM questions ");
                         while ($row = mysqli_fetch_array($query)){ 
                       
        ?>
		<form method="post" id="form1" action="answer2.php">
		  <table class="table table-bordered">
			<thead>
			  <tr class="danger">
				<th><?php echo $i;?> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['question'] ).'" height="200" width="200" class="img-thumnail" />';?> </th>
			  </tr>
			</thead>
			
			<tbody>
			<?php if(isset($row['ans1'])){?>
			  <tr class="info">
				<td>&nbsp;1&emsp;<input type="radio" value="1" name="<?php echo $row['id']; ?>" />&nbsp;<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['ans1'] ).'" height="200" width="200" class="img-thumnail" />';?> </td>
			  </tr>
			<?php }?>
			<?php if(isset($row['ans2'])){?>
			  <tr class="info">
				<td>&nbsp;2&emsp;<input type="radio" value="2" name="<?php echo $row['id']; ?>" />&nbsp;<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['ans2'] ).'" height="200" width="200" class="img-thumnail" />';?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($row['ans3'])){?>
			  <tr class="info">
				<td>&nbsp;3&emsp;<input type="radio" value="3" name="<?php echo $row['id']; ?>" />&nbsp;<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['ans3'] ).'" height="200" width="200" class="img-thumnail" />';?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($row['ans4'])){?>
			  	<tr class="info">
				<td>&nbsp;4&emsp;<input type="radio" value="4" name="<?php echo $row['id']; ?>" />&nbsp;<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['ans4'] ).'" height="200" width="200" class="img-thumnail" />';?></td>
			  </tr>
			  <?php }?>
			<tr class="info">
				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $row['id']; ?>" /></td>
			  </tr>
			</tbody>
			
		  </table>
		<?php $i++;}?>
	<center><input type="submit" value="submit Quiz" class="btn btn-success" /></center>
</form>	
		</div>
<div class="col-sm-2"></div>
</div>

</body>
</html>
