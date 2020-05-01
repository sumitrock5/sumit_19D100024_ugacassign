<!-- php code for checking the user entered details while logging in -->
<?php
require_once("config.php");
if(isset($_POST['login']))
	{$username=$_POST["username"];
	$password=$_POST["password"];
	$sql="SELECT * FROM accdetails WHERE username=? AND password = ? LIMIT 1";
	$stmtselect=$db->prepare($sql);
	$result = $stmtselect->execute([$username, $password]);
	if($result){
		$user=$stmtselect->fetch(PDO::FETCH_ASSOC);
		if($stmtselect->rowCount()>0){
			echo "<h1>Logged In Successfully<h1><br>";
			echo $user["username"]."<br>";
		}else{
			echo "<h1>Invalid user name or password<h1><br>";
		}
	}else{
		echo "<h1>There were errors while connecting to the database<h1><br>";
	}
}
?>