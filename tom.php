<?php
session_start();
		$dbhost = "localhost";$dbname = "GA";$dbuser = "root";$dbpass = "";
		$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
		$STH = $DBH->prepare("SELECT * FROM users WHERE username = :username");
		$STH->bindParam(':username', $_SESSION["username"]);
		$STH->execute();
		$a = $STH->fetch();

		$dbhost = "localhost";$dbname = "GA";$dbuser = "root";$dbpass = "";
		$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
		$STH = $DBH->prepare("INSERT INTO comments(userName, userID, text, fromGameId) VALUES (:userName, :userID, :text, :fromGameId)");
		$STH->bindParam(':userName', $_SESSION["username"]);
		$STH->bindParam(':userID', $a["id"]);
		$STH->bindParam(':text', $_POST["text"]);
		$STH->bindParam(':fromGameId', $_POST["gameId"]);
		$STH->execute();$DBH = null;
		header("location: play.php?gameId=" . $_GET["gameId"]);
?>