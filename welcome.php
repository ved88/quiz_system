<?php
session_start();
if(!isset($_SESSION['user_email'])){
header('location:index.php');       
}
include('dbh.php');
?>


<html>
   <head>
      <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
      
   </head>
    <body>
       <div class="container">
    	<div class="col-sm-2"></div>
	        <div class="col-sm-8">
		      <h2>Onilne quiz in php 
		  <script type="text/javascript">
		  var timeLeft=2*60*60;
		  
		  </script>
		  
		  <div id="time"style="float:right">timeout</div></h2>

        <p> welcome to <?php echo $_SESSION['user_email']; ?>
        <a href="logout.php" >log out</a>
                <h3>Please answer all questions.</h3><br><br>
                <div>
                    
                </div><br>
      <div>
       <div class="container "><br>
         <div class="container">
            <div class=" col-lg-12 text-center">
              
            </div>
            <br>
            <div class="col-lg-8 d-block m-auto bg-light quizsetting ">
               <div class="card">
                  <h3 align="center">Welcome <u><?php echo $_SESSION['user_email']; ?></u> <br>you have to select one option out of four.</h3>
               </div>
               <br>
               <form action="result.php" method="post">
                      <?php
                        $query=mysqli_query($conn,"SELECT * FROM question where cat_id=1 ");
                        $x=0;
                         while ($row = mysqli_fetch_array($query)){ 
                         echo "Qno: ".$row['id']." "; 
                             echo $row['question'] . '<br />';
                             echo '<input type="hidden" name="id" value="'.$row['id'].'">'; 
                             echo "<br>";    
?>
         
        <div class="well well-sm">
            <div class="radio">
                <label>
                    <input type="radio" name="<?php echo $row['id']; ?>" value="1"><?php echo $row['ans1']?>
                      
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="<?php echo $row['id']; ?>" value="2"><?php echo $row['ans2']?>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="<?php echo $row['id']; ?>" value="3"><?php echo $row['ans3']?>
                </label>
            </div>
		    <div class="radio">
		        <label>
		            <input type="radio" name="<?php echo $row['id']; ?>" value="4"><?php echo $row['ans4']?>
		        </label>
		    </div>

        </div>
    <?php
    }
    ?>
<br>
    <button type="submit" class="btn btn-success" name="submit">Finish-Exam</button>

               </form>  
             </div>
           </div>
          </div>
          
       </div>
           </div>
        </div>
   
   </body>
</html>
