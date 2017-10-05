<?php session_start();
$dbhost = "localhost"; $dbname = "GA";	$dbuser = "root"; $dbpass = "";
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$STH = $DBH->prepare("SELECT * FROM base");
$STH->execute();$row = $STH->fetch();
$codeFooter = $row["footer"];$codeMenu = $row["menu"];$codeFollow = $row["follow"];$DBH = null;
?>
<html>
	<head>
		<link rel="shortcut icon" href="img/favicon.ico" />
		<meta charset="utf-8">
		<title>slashJS - Games</title>
		<link href="script/style.css" rel="stylesheet" type="text/css">
		<link rel='stylesheet' href='font/typicons.min.css' />
		<link href="script/menu.css" rel="stylesheet" type="text/css">
		<link href="script/disgame.css" rel="stylesheet" type="text/css">
		<link href="script/games.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
		<script src="script/menu.js" type="text/javascript"></script>
		<script src="script/games.js" type="text/javascript"></script>
		<link href='http://fonts.googleapis.com/css?family=Comfortaa:700' rel='stylesheet' type='text/css'>
	</head>
	<body onload="pleaseDoThis()">	
		<?php echo $codeFollow; ?>
		<div id="main_container">
			<?php echo $codeMenu; ?>
			<div id="space_1"></div>

			<div id="container">
				<div class="good">
					<div class="greed">
						<a href="#button1" id="button1" onclick="doPotato('potato1', 1)">Featured</a>
					</div>
				</div>
				<div class="good">
					<div class="greed">				
						<a href="#button2"  id="button2" onclick="doPotato('potato2', 2)">All</a>
					</div>
				</div>

				<div class="good">
					<div class="greed">
						<a href="#button3" id="button3" onclick="doPotato('potato3', 3)">New</a>
					</div>
				</div>

				<div id="game_holder">
					<div id="greendale"></div>
					<div id="potato1" class="potato">
						<div id="potato1small">
						<?php
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
$STH = $DBH->prepare("SELECT * FROM gameSWE ORDER BY gameId DESC");
$STH->bindParam(':id', $gameId);
$STH->execute();
$arr = $STH->fetchAll();
$DBH = null;
$count = 0;
$amount = 3;
foreach($arr as $value){
	if ($amount +1 > $count) {
		$count = $count +1;
		echo "		
		<div class='gamebox'><a href='play.php?gameId=" . $value['gameId'] . "'><img src='" .  $value['boxBG'] . "'></a><p>" . $value['description'] . "</p>
		</div>";		
	}} ?>					</div></div>


					<div id="potato2" class="potato">
						<div id="potato2small">
						<?php
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
$STH = $DBH->prepare("SELECT * FROM gameSWE ORDER BY gameId DESC");
$STH->bindParam(':id', $gameId);
$STH->execute();
$arr = $STH->fetchAll();
$DBH = null;
foreach($arr as $value){
		$count = $count +1;
		echo "		
		<div class='gamebox'><a href='play.php?gameId=" . $value['gameId'] . "'><img src='" .  $value['boxBG'] . "'></a><p>" . $value['description'] . "</p>
		</div>";} ?>					</div></div>

					<div id="potato3" class="potato">	
						<div id="potato3small">
						<?php
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
$STH = $DBH->prepare("SELECT * FROM gameSWE ORDER BY gameId DESC");
$STH->bindParam(':id', $gameId);
$STH->execute();
$arr = $STH->fetchAll();
$DBH = null;
$count = 0;
$amount = 3;
foreach($arr as $value){
	if ($amount +1 > $count) {
		$count = $count +1;
		echo "		
		<div class='gamebox'><a href='play.php?gameId=" . $value['gameId'] . "'><img src='" .  $value['boxBG'] . "'></a><p>" . $value['description'] . "</p>
		</div>";		
	}} ?>					</div></div>

				</div>

			</div>
			<div class="fix"></div>
	</div>


		
		<?php echo $codeFooter; ?>	
</body>
</html>
