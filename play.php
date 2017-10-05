<?php
session_start();
$dbhost = "localhost";$dbname = "GA";$dbuser = "root";$dbpass = "";
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$STH = $DBH->prepare("SELECT * FROM gameSWE WHERE gameId = :id");
$STH->bindParam(':id', $_GET["gameId"]);
$STH->execute();
$row = $STH->fetch();
$gameTitle = $row["title"];
$gameControls = $row["controls"];
$gameDescription = $row["description"];
$gameCanvas = $row["canvas"];
$gameScript = $row["script"];
$gameStartFunction = $row["startFunction"];
$gameOnBody = $row["onBody"];
$gameCanvasHeight = $row["canvasHeight"];
$gameCanvasWidth = $row["canvasWidth"];
$gameId = $row["gameId"];
?><!DOCTYPE html>
<html>
	<head>					
		<link rel="shortcut icon" href="img/favicon.ico" />
		<meta charset="utf-8">
		<title><?php echo $gameTitle ?></title>
		<link href="script/style.css" rel="stylesheet" type="text/css">
		<link rel='stylesheet' href='font/typicons.min.css' />
		<link href="script/play.css" rel="stylesheet" type="text/css">
		<script src="script/menu.js" type="text/javascript"></script>
		<script src="script/menuwog.js" type="text/javascript"></script>
		<link href="script/menu.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Comfortaa:700' rel='stylesheet' type='text/css'>
		<?php echo $gameScript ?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script type="text/javascript">
			function doSomething() {
				document.getElementById("new_comment").style.display = "none";
				$.get("tom.php");return false;
			}		
			function removeCoverup() {document.getElementById("coverup").style.display = "none";}
		</script>	
	</head>
	<body <?php echo $gameOnBody ?>>
		<?php
$dbhost = "localhost"; $dbname = "GA";	$dbuser = "root"; $dbpass = "";
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); $STH = $DBH->prepare("SELECT * FROM base");
$STH->execute();$row = $STH->fetch();
$codeFooter = $row["footer"];$codeMenu = $row["menu"];$codeFollow = $row["follow"];$DBH = null;
echo $codeFollow;
			?>
		<div id="main_container">
			<?php echo $codeMenu; ?>
			
			<div id="game_title">
				<?php echo $gameTitle ?>
			</div>
			<div id="game_window" style="height:<?php echo $gameCanvasHeight ?>px;">
				<center>
					<?php echo $gameCanvas ?>

					<div id="coverup" 
						 style="margin-top:-<?php echo $gameCanvasHeight +3 ?>px; 
								height:<?php echo $gameCanvasHeight/2 + 15 ?>px; padding-top:<?php echo $gameCanvasHeight/2 - 15 ?>px";
						 onclick="removeCoverup(); <?php echo $gameStartFunction  ?>;">
						Click to play
					</div>
				</center>
			</div>

			<div id="comment_window">
				<div id="new_comment">
					<form method="POST" id="myForm" action="tom.php?gameId=<?php echo $_GET["gameId"]; ?>">										
						<?php
				if (isset($_SESSION['username'])){
				echo "<input type='text' placeholder='Commenting will refresh the page. Data might be lost.' name='text'>
								<input type='submit' onclick='doSomething();' value='Post'>";
			} else {
				echo "<input type='text' placeholder='Log in to comment.' name='text'>
								<input type='submit' onclick='doSomething();' value='Post'>";
			}							
						?>					
						<input type="text" value="<?php echo $gameId; ?>" name="gameId" style="display:none;">
					</form>
				</div>				
				<div id="previous_comments">					
					<?php 			
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
$STH = $DBH->prepare("SELECT * FROM comments WHERE fromGameId =" . $gameId);
$STH->bindParam(':fromGameId', $gameId);
$STH->execute();$arr = $STH->fetchAll();$DBH = null;		
$fakeId = 1;
foreach($arr as $value){	
	echo "<div class='old_comment'>
			<div class='old_comment_name'><a href='profile.php?i=" . $value['userID'] . "'>" . $value['userName'] . "</a></div>
			<div class='old_comment_text'>" . $value['text'] . "</div>
			<div class='old_comment_timestamp'>" . $value['timestamp'] . "</div>
			<div class='old_comment_id'>#" . $fakeId . "</div>
		</div>";	
	$fakeId = $fakeId +1;
	// Add so that an admin can remove comments.
}?>					
				</div>
			</div>
			<div id="controls_window">
				<h4>Controls</h4>
				<?php echo $gameControls ?>
			</div>
			<div id="description_window">
				<h2>Description</h2>
				<p><?php echo $gameDescription ?></p>
			</div>							
			<div class="fix"></div>
		</div>
		<?php echo $codeFooter; ?>

	</body>
</html>