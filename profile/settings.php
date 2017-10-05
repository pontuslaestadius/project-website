<?php
session_start();

if (!isset($_SESSION['username'])){
	header("location: ../index.php");
}

$dbhost = "localhost"; $dbname = "GA";	$dbuser = "root"; $dbpass = "";
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$STH = $DBH->prepare("SELECT * FROM base");
$STH->execute();$row = $STH->fetch();
$codeFooter = $row["footer"];$codeMenu = $row["menu"];$codeFollow = $row["follow"];$DBH = null;

$dbhost = "localhost"; $dbname = "GA";	$dbuser = "root"; $dbpass = "";
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$STH = $DBH->prepare("SELECT * FROM users WHERE username = " . $_SESSION['username']);
$STH->execute();$user = $STH->fetch();
echo $user;

?>

<html>
	<head>
		<link rel="shortcut icon" href="../img/favicon.ico" />
		<meta charset="utf-8">
		<title>slashJS - Startsida</title>
		<link href="../script/style.css" rel="stylesheet" type="text/css">
		<link rel='stylesheet' href='font/typicons.min.css' />
		<link href="../script/settings.css" rel="stylesheet" type="text/css">
		<link href="../script/menu.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Comfortaa:700' rel='stylesheet' type='text/css'>
		<script src="../script/menu.js" type="text/javascript"></script>
		<script src="../script/menuwog.js" type="text/javascript"></script>
	</head>
	<body>
		<?php echo $codeFollow; ?>
		<div id="main_container">
			<?php echo $codeMenu; ?>
			
			<pre><?php print_r($_SESSION); ?></pre>
			
			<section id="personal">
				<h4>Personal Information</h4>
				<input type="text" value="<?php echo $_SESSION['username']; ?>" >
				<input type="text" value="<?php echo $_SESSION["name"]; ?>" >
				<input type="password" value="<?php echo $user["password"]; ?>" >
				<input value="Save" type="submit">
			</section>
			
			<section id="language">
				<h4>Language</h4>
				<a href="#">SWE</a>
				<a href="#">ENG</a>
				<p>Slash JS currently only supports english. Switching between lnaguages has no affect at this time.</p>
			</section>
			
			This page is under construction.
		</div>
		<?php echo $codeFooter; ?>
	</body>
</html>

<?php $DBH = null; ?>