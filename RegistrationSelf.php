<!DOCTYPE html>
<html>
<head>
	<title>Registration Form </title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<?php
		$fname = $lname = $gender = $mail= $uname = $pass= $rmail= "";
		$fnameErr = $lnameErr = $genderErr = $mailErr= $unameErr= $passErr= $rmailErr ="";

		if($_SERVER['REQUEST_METHOD'] == "POST")
			{
				if (empty($_POST['fname'])) 
					{
						$fnameErr = "please fill up properly";
					}
				else
					{
						$fname = $_POST['fname'];
					}
				if (empty($_POST['lname'])) 
					{
						$fnameErr = "please fill up properly";
					}
				else
					{
						$lname = $_POST['lname'];
					}
				if (empty($_POST['gender'])) 
					{
						$genderErr = "please fill up properly";
					}
				else
					{
						$gender = $_POST['gender'];
					}
				if (empty($_POST['mail'])) {
					$mailErr = "please fill up properly";
				}
				else
					{
						$mail = $_POST['mail'];
					}
				if (empty($_POST['uname'])) {
					$unameErr = "please fill up properly";
				}
				else
					{
						$uname = $_POST['uname'];
					}
				if (empty($_POST['pass'])) {
					$passErr = "please fill up properly";
				}
				else
					{
						$pass = $_POST['pass'];
					}
				if (empty($_POST['rmail'])) {
					$rmailErr = "please fill up properly";
				}
				else
					{
						$rmail = $_POST['rmail'];
					}
			//if($name == "" && $gender == "" $mail == "") {
			//	echo "Successful";
			//}
		}
		//else{
		//	$name = $_POST['name'];
		//	$gender = $_POST['gender'];
		//	$mail = $_POST['mail'];
		//}
	?>
	<nav class ="navbar navbar-expand-Il navbar-info bg-info">

	<h3 class="text-white">Registration Form </h3>
	</nav>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<legend><b>Basic Information:</b></legend>
		<br>
		<label for="fname">First Name: </label>
		<input type="text" name="fname" id="fname">
		<p><?php echo $fnameErr; ?></p>
		<br>
		<label for="lname">Last Name: </label>
		<input type="text" name="lname" id="lname">
		<p><?php echo $lnameErr; ?></p>
		<br>
		<label> Gender: </label>
	    <input type="radio" name="gender" id="male" value="male">
	    <label for = "male"> Male </label>
	    <input type="radio" name="gender" id="female" value="female">
	    <label for="female">Female</label>
	    <p><?php echo $genderErr; ?></p>
	    <br>
	    <label for="mail">Email: </label>
	    <input type="mail" name="mail" id="mail">
	    <p><?php echo $mailErr; ?></p>
	    <br>
	    <legend><b>Account Information:</b></legend>
	    <label for="uname">User Name: </label>
		<input type="text" name="uname" id="uname">
		<p><?php echo $unameErr; ?></p>
		<br>
		<label for="pass">Password: </label>
		<input type="text" name="pass" id="pass">
		<p><?php echo $passErr; ?></p>
		<br>
		<label for="rmail">Recovery Email: </label>
	    <input type="rmail" name="rmail" id="rmail">
	    <p><?php echo $rmailErr; ?></p>
	    <br>

	<input type="submit" value="Submit" > 
	</form>

</body>
</html>