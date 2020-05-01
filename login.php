<!-- Displays as the login page -->
<?php
require_once("login1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>User register</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="regstyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
</head>
<body><br><br>
	<div class="container">
		<div id="h1">
			<h1>Log In</h1><hr>
		</div>
		<form action="loginsuccess.php" method="POST">
		<label for="fname"><strong>Username:</strong></label><br>
		<input type="text" id="fname" name="username" required><br>
	    <label for="pass"><strong>Password:</strong></label><br>
	    <input type="password" id="pass" name="password" required><br><br>
		<a class="btn btn-secondary" href="registration.php" role="button">Sign Up</a>
		<input type="submit" name="login" value="Log In" class="btn btn-secondary">
	</form>
	</div>
</body>
</html>