<!-- For connecting to the database -->
<?php
$db_user="root";
$db_pass="";
$db= new PDO("mysql:host=localhost;dbname=acc;charset=utf8", $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>