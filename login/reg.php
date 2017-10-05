<?php
$dbhost	= "localhost";$dbname = "ga";$dbuser = "root";$dbpass = "";
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
$STH = $DBH->prepare("INSERT INTO users (email, name, username, password) value (:email, :name, :username, :password)");
$STH->bindParam(':email', $_POST["email"]);
$STH->bindParam(':name', $_POST["name"]);
$STH->bindParam(':username', $_POST["username"]);
$STH->bindParam(':password', $_POST["password"]);
$STH->execute();
$DBH = null;
header("Location: ../index.php");
?>