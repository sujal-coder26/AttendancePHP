<?php
session_start();
ob_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/
css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css.css?version=51"> <!--css file-->
<title>User Login</title><!-- title is given--> 
</head>
<body>
	<form action="attendancehome.php"method="post">
<div class="login" >
	<h3>User Login</h3> <!-- is a heading for user login -->
	<div class="memberline"> </div>
    <label for="email"></label>
    <input type="email" id="email" placeholder="Email..." name="email2" ><i class="fa fa-at" style="font-size:36px"></i> <!-- creating inputs --> 
<br>
<input type="hidden" name="hiddenidname" value=""><!-- creating inputs --> 
    <label for="psd"></label>
    <input type="password" placeholder="Password..." name="password2" id="psd" ><i class="fa fa-circle-o-notch fa-spin" id="spin" style="font-size:24px"></i> <!-- creating inputs --> 
    <input type="submit" name="submit" value="Login" id="submit"> </button> <!-- creating inputs --> 
</div>
</form>
<form >
	<img src="2.jpg" width="700" height="550">
 <input type="submit" name="signup" value="Sign Up" id="submit2"> </button> <!-- creating inputs --> 
</form>
</body>
</html>

<?php 
include('connection.php');/* This include include all the thing which is inside given file to this file */

if (isset($_POST['submit'])){
	 $email = $_POST['email2']; /*storingthe data of form in the variable*/
     $password = $_POST['password2']; /*storingthe data of form in the variable*/
$query = $pdo->prepare( "select * from workers where worker_email = '$email' AND worker_password = '$password' ");/* writing a query as mentioned andsaving in variable*/
$query->execute(array($email,$password));
if ($query->rowCount() >= 1){
		$_SESSION['worker_email']= $email;/* assingning variable through out the session*/
		header('location: Userhome.php');
	}
	else{
		echo"<script> alert('Invalid User') </script>"; /*pops up an alert dialog box*/
	}
}


?>