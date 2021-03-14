<!DOCTYPE html>
<html>
<head>
	<title>Password Change Form </title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<?php
		$prepass = $nextpass="";
		$prepassErr = $nextpassErr = "";

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			if(empty($_POST['prepass']))
			{
				$prepassErr = "please fill up properly";
			}
			else
				{
					$prepass = $_POST['prepass'];
				}
			if (empty($_POST['nextpass'])) 
			{
				$nextpassErr = "please fil up properly";
			}
			else 
			{
				$nextpass = $_POST['nextpass'];
			}
		}

	?>


	<nav class ="navbar navbar-expand-Il navbar-info bg-info">

	<h3 class="text-white">Password Change Form </h3>
	</nav>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<label><b> Password Change: </b></label>
		<br>
		<label for="prepass">Previous Password: </label>
		<input type="text" name="prepass" id="prepass">
		<p><?php echo $prepassErr; ?></p>
		<br>
	    <label for="password">New Password: </label>
	    <input type="nextpass" name="nextpass" id="nextpass">
	    <p><?php echo $nextpassErr; ?></p>
	    <br>

	<input type="submit" value="Submit" > 
	</form>

</body>
</html>