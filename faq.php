<?php
session_start();
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
		<link rel='stylesheet' href='font/typicons.min.css' />
		<link href="script/menu.css" rel="stylesheet" type="text/css">
		<link href="script/faq.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Comfortaa:700' rel='stylesheet' type='text/css'>
		<script src="script/menu.js" type="text/javascript"></script>
		<script src="script/menuwog.js" type="text/javascript"></script>
		<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php print_r($codeFollow) ; ?>
		<div id="main_container">
			<?php echo $codeMenu; ?>

			<div id="navigation">
				<div id="nav-controls"></div>
				<div id="nav-upload"></div>
				<div id="nav-about"></div>
				<div id="nav-terms"></div>
				<div id="nav-contact"></div>
				<div id="nav-credits"></div>


			</div>
			<section id="general" class="light-section">
				<div class="section-image">
					<img src="img/faq_general.png">
				</div>
				<div class="section-text">
					<h3>Title</h3>
					<p>This page contains all information required and if there seems to be anything missing. Do no hesitate to contact us if anything seems confusing or is poorely worded.</p>
					<p>Use the buttons shown below to take you to any of the detailed sections on the topic.</p>
					<a href="#nav-controls" a>Advanced Controls</a>
					<a href="#nav-upload" a>Uploading</a>
					<a href="#nav-about" a>About me</a>
					<a href="#nav-terms" a>Terms and conditions</a>
					<a href="#nav-contact">contact me.</a>
					<a href="#nav-credits" a>Credits</a>
				</div>		
			</section>

			<section id="controls" class="dark-section">			
				<div class="section-text">
					<h3>Advanced controls</h3>
					<p>To improve upon the structure and design of the controls shown under each game (<a href="play.php?gameId=1">click for example</a>) a simple &lt;h2> tag is embeded to seperate the difference, If you take a look at the image to the right. You will see an example of how the code is displayed and what you will need to add to your controls when uploading your game. </p>
					<p>For future improvement would be a checkbox and a table of controls which makes it easier to read and follow each and every instruction. This feature is not added on release because it is unnessecary and will be put on a TO-DO list among other improvements. Please <a href="#contact">contact me</a> if you got any concerns concerning this subject with the title "advanced controls".</p>
				</div>
				<div class="section-image">
					<img src="img/faq_control.png" >
				</div>
			</section>

			<section id="upload" class="light-section">
				<div class="section-image"></div>
				<div class="section-text">
					<h3>Upload</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec libero pellentesque, sagittis purus id, gravida elit. Vivamus quam lorem, feugiat et commodo sed, venenatis ac nunc. Aliquam placerat nibh scelerisque nisi ullamcorper, non condimentum turpis pretium. Aenean posuere tortor</p>
					<p>et massa tincidunt, id viverra velit sagittis. Ut tempor hendrerit ornare. Etiam sed velit id leo congue fringilla a eu sapien. Morbi facilisis euismod lorem, semper auctor arcu tempus eget. Aliquam auctor nibh a commodo viverra. Mauris aliquam vulputate vehicula</p>
				</div>

			</section>

			<section id="terms" class="dark-section">
				<div class="section-text">
					<h3>Terms and Condtions</h3>
					<p>By uploading your game to slashJS you agree to the following:</p>
					<p>You will not recieve any profit if you have not been told otherwise in an offical message sent from slashJS signed by the organisation and CEO. If your game displays no advertisements there will be no profit from ours and your side, there for you account cannot be credited with anything concerning your game except the creation and uploading of it. You grant us acces to edit, copy or use any of the code you upload to our website without asking for permission if we wish so. SlashJS is not responsible for any code stolen after uploaded to our site by other users without our permission, please <a href="#nav-contact">contact us</a> if you think your work or code has been stolen by other users and we will help you to our ability. A slashJS assosiate or employee will never ask for your game lock password. Do not give it out beause changing it can take time and we take no responsability if the game gets changed by the game lock code. By uploading code to the site you will be grated a game lock password which is your key to changing your code. It is not user bound so that it can be shared among your assosiates or partners at your own risk.</p>
					<p>By signing up you agree to the following:</p>
					<p>By signing up you agree to us using your information for marketing and research. You give us permission to add you to our mail list and send you regularly emails by default, which can be disabled if they are intrudding, offensive, inapropriate or annoying in a matter that can be described as spam. Any communication between our support and you are bound to unlimited acces from our staff. By sharing your account to anyone you at your own risk are at fault if any data or personal information is lost, we cannot retrieve lost data that has been overwritten or deleted. Staff of SlashJS are allowed to send out warning or even remove account in the case of offensive uploading, inapropriate games, inapropriate name or comments in some cases. SlashJS can remove or lock you out of your account at any given time in the case of any rule breaking. A user may not have more than one active account, in the case of more than one active account on a single user a warning will be sent with directions to remove one of it's accounts. </p>
					<div class="section-image">
						<img src="img/faq_terms.png">
					</div>
				</div>
			</section>

			<section id="about2" class="light-section">
				<div class="section-image">
				</div>
				<div class="section-text">
					<h3>About me</h3>
					<p>My name is Pontus and the intentions of designing and producing this website is part of a graduation project which will show my knowledge withing the <a href="#credits" >following</a> courses. </p>
					<p>When in the early drawing process of this website it didn't seem like that much work but as both my ambitions for what I wanted grew with the project and the features I felt glad to delelop and provide to future visitors.</p>
				</div>

			</section>

			<section id="contact" class="dark-section">
				<div class="section-text">
					<h3>Contact us</h3>
					<p>There are three types of ways to get in contact with us. By email, phone or in person.</p>
					<p>Use the form below to send us your questions or concerns by selecting the correct form for your issue. </p>
					
				<form method="POST" action="login/login.php">
					<select>
						<option value="account">Account</option>
						<option value="games">Games</option>
						<option value="website">Website</option>
						<option value="financial">Financial</option>
						<option value=""></option>
						<option value=""></option>
					</select>
					
					<input type="checkbox" name="general" 	value="" >
					<input type="email" name="email" placeholder="your email*">
					<textarea name="text" rows="10" cols="60" ></textarea>
					<input type="submit" value="Logga in"><br/>
				</form>
					
				</div>
				
				<p>* Enter your email so that we can send you a respons to your questions or issues.</p>

			</section>

			<section id="credits" class="light-section">

				<div class="section-text">
					<h3>credits</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec libero pellentesque, sagittis purus id, gravida elit. Vivamus quam lorem, feugiat et commodo sed, venenatis ac nunc. Aliquam placerat nibh scelerisque nisi ullamcorper, non condimentum turpis pretium. Aenean posuere tortor</p>
					<p>et massa tincidunt, id viverra velit sagittis. Ut tempor hendrerit ornare. Etiam sed velit id leo congue fringilla a eu sapien. Morbi facilisis euismod lorem, semper auctor arcu tempus eget. Aliquam auctor nibh a commodo viverra. Mauris aliquam vulputate vehicula</p>
				</div>
				<div class="section-image">
					<img src="img/faq_credits.png">
				</div>

			</section>

			<div class="fix"></div>
		</div>
		<?php echo $codeFooter; ?>
	</body>
</html>

<?php $DBH = null; ?>