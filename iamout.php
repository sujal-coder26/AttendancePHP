<?php
 session_start(); /* session has been created */

if ($_SESSION['worker_email'] == true){
	
}else{
	header('location:Attendancehome.php'); /* changing file location*/
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Attendance Page</title>
		<link rel="stylesheet" type="text/css" href="css.css?version=51"> <!--css file-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="attendance_bar"> Attendance Management System</div>
<div class="container">
	<div class="username">
		
		<?php
include('connection.php');/* This include include all the thing which is inside given file to this file */
$query4 = $pdo->query("select * from workers");/* writing a quert as mentioned andsaving in variable*/
foreach ($query4 as $no_of_rows ){/* looping in order to get values*/
?>
	<h1 class="adminhello">Hello <?php echo $no_of_rows['worker_name'];?>!<br> <br></h1><!-- printing the value from db --> 
	
<?php } ?>	
<form action="Attendancehome.php">
<a href="logoff.php"><button type="button" class="btn btn-outline-danger" id="logoff">Sign Off</button> </a>
</form>
		</div>		
</nav>
	</div>
	<div class="inside-container1">
		<div class="btnn">
<form method="post" action="userhome.php">
	<button class="submit2" name="sub2" type="submit" value="I AM OUT">I AM OUT</button>

</form>
</div>
	</div>
	<div class="inside-container2">
		
	</div>

</div>
</body>
</html>
<?php 
include('connection.php');/* This include include all the thing which is inside given file to this file */



?>