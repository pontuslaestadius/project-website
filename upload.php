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

?>

<html>
	<head>
		<link rel="shortcut icon" href="img/favicon.ico" />
		<meta charset="utf-8">
		<title>slashJS - Startsida</title>
		<link href="script/style.css" rel="stylesheet" type="text/css">
		<script src="script/js-image-slider.js" type="text/javascript"></script>    	
		<link href="script/js-image-slider.css" rel="stylesheet" type="text/css" />
		<link rel='stylesheet' href='font/typicons.min.css' />
		<link href="script/upload.css" rel="stylesheet" type="text/css">
		<link href="script/menu.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Comfortaa:700' rel='stylesheet' type='text/css'>
		<script src="script/menu.js" type="text/javascript"></script>
		<script src="script/upload.js" type="text/javascript"></script>
		<script src="script/menuwog.js" type="text/javascript"></script>
	</head>
	<body>
		<?php echo $codeFollow ?>
		<div id="main_container">
			<?php echo $codeMenu; ?>

			<div id="tab-holder">
				<div class="tab" id="javascript"  style="background-color:#6cade4;">
					<div class="tab-head" style="background-color:#299dff;" onclick="showTab('javascript')">
						JScript
					</div>
					<div class="tab-content" id="javascript-content">
						<div class="tab-message">
							<p>This type of entry is currently under development. Do not be alarmed if your game is not added. Try at a later time. </p>
						</div>
						<form action="uploadfile.php" method="POST">
							<div class="tab-input">
								<input type="file" name="game_file_js" value="file(s)">
								<div class="tab-help" style="z-index:95;">
									<p>Select your script file. Currently this system only supports one file.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_name_js" placeholder="Game name">
								<div class="tab-help" style="z-index:96;">
									<p>Between 3 and 16 letters. No special characters allowed.</p>
								</div>
							</div>


							<div class="tab-input">
								<input type="text" name="game_height_js" placeholder="Canvas height">
								<div class="tab-help" style="z-index:97;">
									<p>The height of your game. No cap but recommend under 700 pixels.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_width_js" placeholder="Canvas width">
								<div class="tab-help" style="z-index:98;">
									<p>The width of your game. Most be under 775 pixels.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_onload_js" placeholder="body Onload">
								<div class="tab-help" style="z-index:99;">
									<p>To load in certain properies your game requires such as keys.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_startFunction_js" placeholder="startFunction();">
								<div class="tab-help" style="z-index:100;">
									<p>To activate your javascript file. With for example run();</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_preview_js" placeholder="preview Image">
								<div class="tab-help" style="z-index:101;">
									<p>Use sites such as Imgur.com for the images and insert the URL.</p>
								</div>
							</div>

							<div class="tab-input">
								<textarea name="game_description_js" ></textarea>
								<div class="tab-help" style="z-index:102;">
									<p>HTML code is accepted. Remember this is written inside a &lt;p> tag. </p>
								</div>
							</div>

							<div class="tab-input">
								<textarea name="game_controls_js" ></textarea>
								<div class="tab-help" style="z-index:103;">
									<p><a href="faq.php#controls">Click here</a> to learn how to add cool buttons inside the controls box.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="submit" value="Upload" >
								<div class="tab-help" style="z-index:103;">
									<p>By uploading to SlashJS you allow us to profit from your files.</p>
								</div>
							</div>
						</form>
					</div>	
				</div>

				<div class="tab" id="flash"  style="background-color:#da6d6d;">
					<div class="tab-head" style="background-color:#e75b5b;" onclick="showTab('flash');">
						Flash
					</div>
					<div class="tab-content" id="flash-content">
						<div class="tab-message">
							<p>This type of entry is currently under development. Do not be alarmed if your game is not added. Try at a later time. </p>
						</div>
						<form action="uploadfile.php" method="POST">
							<div class="tab-input">
								<input type="file" name="game_file_js" value="file(s)">
								<div class="tab-help" style="z-index:95;">
									<p>Select your script file. Currently this system only supports one file.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_name_js" placeholder="Game name">
								<div class="tab-help" style="z-index:96;">
									<p>Between 3 and 16 letters. No special characters allowed.</p>
								</div>
							</div>


							<div class="tab-input">
								<input type="text" name="game_height_js" placeholder="Canvas height">
								<div class="tab-help" style="z-index:97;">
									<p>The height of your game. No cap but recommend under 700 pixels.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_width_js" placeholder="Canvas width">
								<div class="tab-help" style="z-index:98;">
									<p>The width of your game. Most be under 775 pixels.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_onload_js" placeholder="body Onload">
								<div class="tab-help" style="z-index:99;">
									<p>To load in certain properies your game requires such as keys.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_startFunction_js" placeholder="startFunction();">
								<div class="tab-help" style="z-index:100;">
									<p>To activate your javascript file. With for example run();</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_preview_js" placeholder="preview Image">
								<div class="tab-help" style="z-index:101;">
									<p>Use sites such as Imgur.com for the images and insert the URL.</p>
								</div>
							</div>

							<div class="tab-input">
								<textarea name="game_description_js" ></textarea>
								<div class="tab-help" style="z-index:102;">
									<p>HTML code is accepted. Remember this is written inside a &lt;p> tag. </p>
								</div>
							</div>

							<div class="tab-input">
								<textarea name="game_controls_js" ></textarea>
								<div class="tab-help" style="z-index:103;">
									<p><a href="faq.php#controls">Click here</a> to learn how to add cool buttons inside the controls box.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="submit" value="Upload" >
								<div class="tab-help" style="z-index:103;">
									<p>By uploading to SlashJS you allow us to profit from your files.</p>
								</div>
							</div>
						</form>
					</div>	
				</div>

				<div class="tab" id="iframe"  style="background-color:#95f88e;">
					<div class="tab-head" style="background-color:#65e75b;" onclick="showTab('iframe');">
						Iframe
					</div>
					<div class="tab-content" id="iframe-content">
						<div class="tab-message">
							<p>This type of entry is currently under development. Do not be alarmed if your game is not added. Try at a later time. </p>
						</div>
						<form action="uploadfile.php" method="POST">
							<div class="tab-input">
								<input type="file" name="game_file_js" value="file(s)">
								<div class="tab-help" style="z-index:95;">
									<p>Select your script file. Currently this system only supports one file.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_name_js" placeholder="Game name">
								<div class="tab-help" style="z-index:96;">
									<p>Between 3 and 16 letters. No special characters allowed.</p>
								</div>
							</div>


							<div class="tab-input">
								<input type="text" name="game_height_js" placeholder="Canvas height">
								<div class="tab-help" style="z-index:97;">
									<p>The height of your game. No cap but recommend under 700 pixels.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_width_js" placeholder="Canvas width">
								<div class="tab-help" style="z-index:98;">
									<p>The width of your game. Most be under 775 pixels.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_onload_js" placeholder="body Onload">
								<div class="tab-help" style="z-index:99;">
									<p>To load in certain properies your game requires such as keys.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_startFunction_js" placeholder="startFunction();">
								<div class="tab-help" style="z-index:100;">
									<p>To activate your javascript file. With for example run();</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="text" name="game_preview_js" placeholder="preview Image">
								<div class="tab-help" style="z-index:101;">
									<p>Use sites such as Imgur.com for the images and insert the URL.</p>
								</div>
							</div>

							<div class="tab-input">
								<textarea name="game_description_js" ></textarea>
								<div class="tab-help" style="z-index:102;">
									<p>HTML code is accepted. Remember this is written inside a &lt;p> tag. </p>
								</div>
							</div>

							<div class="tab-input">
								<textarea name="game_controls_js" ></textarea>
								<div class="tab-help" style="z-index:103;">
									<p><a href="faq.php#controls">Click here</a> to learn how to add cool buttons inside the controls box.</p>
								</div>
							</div>

							<div class="tab-input">
								<input type="submit" value="Upload" >
								<div class="tab-help" style="z-index:103;">
									<p>By uploading to SlashJS you allow us to profit from your files.</p>
								</div>
							</div>
						</form>
					</div>	
				</div>		
			</div>

			<div id="help">
				<div id="help-head">
					<h4>Frequent Questions</h4>
				</div>

				<div id="help-content">
					<a href="faq.php#upload">FAQs about uploading</a>
					<a href="https://www.google.se/search?newwindow=1&safe=off&site=&source=hp&q=make+your+own+game&oq=make+your+own+game&gs_l=hp.3...1572.4614.0.4841.19.11.0.0.0.0.485.1047.2-1j1j1.3.0.msedr...0...1c.1.60.hp..17.2.562.0.d4PUNeSKaEA">Make your own game</a>
					<a href="#">Tips and tricks for selective keys</a>
					<a href="faq.php#controls">Make your controls look more appealing</a>
					<a href="faq.php#browser">Page doesn't show up properly?</a>
					<a href="faq.php#upload">What happens after I upload my game?</a>
					<a href="faq.php#upload">I got more than 1 file. Help!</a>
					<a href="faq.php#tos">Terms of Service</a>
					<a href="faq.php#contact">Ask a question or send a mail</a>
					<a href="faq.php#mobile">Mobile devices wont work.</a>		
				</div>	
				<a href="faq.php" id="help-full-list">Click here to learn more</a>
			</div>

			<div id="preview">
				<div id="preview-head">
					<h3>Where goes what?</h3>
				</div>
				<div id="preview-code">
					<p class="light-p"> <b class="tag"> &lt;html> </b> </p>
					<p class="dark-p"> <b class="tag"> &lt;head> </b> </p>
					<p class="dark-p"> <b class="tag"> &lt;head> </b> </p>
					<p class="dark-p"> <b class="tag"> &lt;/head> </b> </p>
					<p class="light-p"> 
						<b class="tag"> &lt;body </b><b class="select"> onload=</b><b class="property">"onload();" </b><b class="tag"> > </b> </p>
					<p class="dark-p"> 
						<b class="tag"> &lt;div </b><b class="select"> id=</b><b class="property">"coverup" </b><b class="select">height=</b><b class="property">"canvasHeight"</b> <b class="tag"> > </b>
					</p>
					<p class="light-p"> 
						<b class="tag"> &lt;canvas </b><b class="select"> height= </b><b class="property">"canvasHeight" </b> 
					</p>
					<p class="dark-p"> 
						<b class="select"> width=</b><b class="property">"canvasWidth"</b> <b class="tag"> >  &lt;/canvas> </b> 
					</p>
					<p class="light-p"><b class="tag"> &lt;/body></b> </p>
					<p class="dark-p"><b class="tag"> &lt;/html></b> </p>
				</div>
			</div>




			<div class="fix"></div>
		</div>
		<?php echo $codeFooter; ?>
	</body>
</html>