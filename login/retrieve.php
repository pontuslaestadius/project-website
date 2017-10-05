<?php
if (isset($_GET['lang'])) {
    $lang = htmlspecialchars($_GET["lang"]);
} else {
	$lang = 0;
}

$dbhost	= "localhost";$dbname = "GA";$dbuser = "root";$dbpass = "";
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
$STH = $DBH->prepare("SELECT * FROM users WHERE email = :email");
$STH->bindParam(':email', $_POST["email"]);
$STH->execute();$DBH = null;
if($row = $STH->fetch()){
	 $message = "Hello" . $row['name'] . "!\r\n \r\nHere is your password for SlashJS: " . $row['password'];

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

mail($_POST['email'], 'Retrieve your password', $message);
header("Location: ../index.php" . $newURL = "?lang=" . $lang . "&m=29");

}
?>