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
<form action="Userhome.php" method="post" >
<button class="submit1" name="sub1" type="submit" value="I AM IN">I AM IN</button>
</form>
</div>

<script type="text/javascript">
// function change() // no ';' here
// {
//    window.location= 'http://localhost:8080/PHP%20Project/iamout.php';
// }


</script>
	</div>
	<div class="inside-container2">
		
	</div>

</div>
</script>

</body>
</html>
<?php 
include('connection.php');/* This include include all the thing which is inside given file to this file */

if (isset($_POST['sub1'])){
	date_default_timezone_set("Asia/Kathmandu");
$time = date("h:i:sa");
echo $time;
$samae = date_create()->format('Y-m-d H:i:s');

$query55 = $pdo->query("insert into present_workers(name, present_time, salary, time )values('Suraj Thapa', '$samae', '20000', '$time')");/* writing a quert as mentioned andsaving in variable*/

if ($query55){
	echo "<script> alert('Congratulations great great successful person') </script> "; /*pops up an alert dialog box*/
	header('location:iamout.php');

	}
	else{
		echo "<script> alert('Please try again! ')</script> "; /*pops up an alert dialog box*/

	}
}

?>