<?php

session_start();
$dbhost	= "localhost";$dbname = "GA";$dbuser = "root";$dbpass = "";
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
$STH = $DBH->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
$STH->bindParam(':username', $_POST["username"]);
$STH->bindParam(':password', $_POST["password"]);
$STH->execute();
$DBH = null;
if($row = $STH->fetch()){
	$_SESSION["username"] = $row["username"];
	$_SESSION["language"] = $row["language"];
	$_SESSION["name"] = $row["name"];
	header("Location: ../index.php");
}
?>
<a href="../index.php">Something is fishy.</a>
