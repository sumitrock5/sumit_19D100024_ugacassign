<!-- php to add the registered information to the database -->
<?php
    require_once("config.php");
	if(isset($_POST['create'])){
		$username=$_POST["username"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$passwordc=$_POST["passwordc"];
		$errors=array();
		if($password!=$passwordc)
		{
			array_push($errors,"Password do not match");
		}
		$sql1="SELECT * FROM accdetails WHERE username=? LIMIT 1";
		$stmtselect1=$db->prepare($sql1);
		$result1 = $stmtselect1->execute([$username]);
		if($result1){
			$user1=$stmtselect1->fetch(PDO::FETCH_ASSOC);
			if($stmtselect1->rowCount()>0){
				array_push($errors,"Account already present");
			}
		}
		if(count($errors)===0)
		{
			$sql= "INSERT INTO accdetails(username,emailid,password) VALUES (?,?,?)";
			$stmtinsert= $db->prepare($sql);
			$result=$stmtinsert->execute([$username,$email,$password]);
			if($result)
			{
				echo "<h2>Successfully Registered</h2><br>";
				echo "Username:" .$username. "<br>";
				echo "Password:" .$password. "<br>";
			}
			else
			{
				echo "error";
			}
		}
		else
		{
			echo $errors[0]."<br>";
			echo "Register again<br>";
		}
	}
?> 