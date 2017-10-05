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
		<title>slashJS - Startsida</title>
		<link href="script/style.css" rel="stylesheet" type="text/css">
		<script src="script/js-image-slider.js" type="text/javascript"></script>    	
		<link href="script/js-image-slider.css" rel="stylesheet" type="text/css" />
		<link rel='stylesheet' href='font/typicons.min.css' />
		<link href="script/index.css" rel="stylesheet" type="text/css">
		<link href="script/disgame.css" rel="stylesheet" type="text/css">
		<link href="script/menu.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Comfortaa:700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:500,100' rel='stylesheet' type='text/css'>		<script src="script/menu.js" type="text/javascript"></script>
		<script src="script/menuwog.js" type="text/javascript"></script>
		<script type="text/javascript">function expand() {document.getElementById("expand").style.display = "none";document.getElementById("tumblr_embed").style.height = "auto";}			
		</script>	
	</head>
	<body>	
		<div id="fm" data-0="height:0px;" data-249="height:0px;"  data-250="height:25px;">
			<div id="fm_content" data-0="opacity:0.0;" data-250="opacity:1.0;">
				<a href="index.php" data-0="display:none;" data-250="display:inherit;"><span class="typcn typcn-home" style="background-color: #00d000" ></span></a>
			<a href="games.php" data-0="display:none;" data-250="display:inherit;"><span class="typcn typcn-headphones" style="background-color: #3142ff" ></span></a>
			<a href="upload.php" data-0="display:none;" data-250="display:inherit;"><span class="typcn typcn-upload" style="background-color:#ff521c" ></span></a>
			</div>		
		</div>
		<div id="follow">		
           <div id="message"><?php
       if (isset($_SESSION['m'])){ echo $_SESSION['m'];}?></div>
           <div id="account"><?php
if(!isset($_SESSION['username'])){
   echo "<a onclick='showLogin()'>Login</a>";} else {    
   echo "Welcome <a onclick='showDropDown()'>" . $_SESSION['name'] . "</a>
   <span onclick='showDropDown()' id='arrow_down_dropdown' class='typcn typcn-arrow-sorted-down'></span>
   <span onclick='removeDropDown()' id='arrow_up_dropdown' class='typcn typcn-arrow-sorted-up'></span>";    
   echo "<div id='dropdown_holder'><a class='dropdown' href='profile/settings.php?'>settings</a>
   <a class='dropdown' onmouseover='showDropDown()' href='profile/profile.php?'>profile</a>
   <a class='dropdown' onmouseover='showDropDown()' href='profile/games.php?'>my games</a>
   <a class='dropdown' href='login/logout.php?'>logout</a></div>";
}?></div>        
           <div id="login" class="popout">
               <div class="exiter" onclick="removeLogin()">
                   <span class="typcn typcn-times"></span>
                   <span class="typcn typcn-times-outline"></span>
               </div>                
               <form method="POST" action="login/login.php">
                   <input type="text" name="username" placeholder="Name">
                   <input type="password" name="password" placeholder="Password">
                   <input type="submit" value="Logga in"><br/>
               </form>
               <a onclick="showReg()" style="cursor:pointer">Register</a>
               <a onclick="showLost()" style="cursor:pointer">lost password?</a>
           </div>
           <div id="lostPW" class="popout">
               <div class="exiter" onclick="removeLost()">
                   <span class="typcn typcn-times"></span>
                   <span class="typcn typcn-times-outline"></span>
               </div>
               <form method="POST" action="login/retrieve.php">
                   <input type="text" name="email" placeholder="Email">
                   <input type="submit" value="Retrieve"><br/>
               </form>
           </div>
           <div id="regform" class="popout">
               <div class="exiter" onclick="removeReg()">
                   <span class="typcn typcn-times"></span>
                   <span class="typcn typcn-times-outline"></span>
               </div>    
               <form method="POST" action="login/reg.php">
                   <input type="text" name="email" placeholder="Email">
                   <input type="text" name="name" placeholder="Name">
                   <input type="text" name="username" placeholder="Username">
                   <input type="password" name="password" placeholder="Password">

                   <p style="font-size:12px;" class="givesomeFloat">*Registering refreshes the page</p>
                   <p style="font-size:12px;" class="givesomeFloat">By signing up you accept our <a href="tos.php">terms and conditions.</a></p>
                   <input class="givesomeFloat" type="submit" value="Sign up">
               </form>
           </div>
       </div>		
		<div id="main_container" onclick="removeDropDown()">	
			<?php echo $codeMenu; ?>
			<div id="main_left">
				<div id="sliderR">
					<div id="sliderFrame">
						<div id="slider">
							<a href="#" target="_blank">
								<img src="img/sliderimg/image-slider-1.jpg" alt="#alt1" />
							</a>
							<img src="img/sliderimg/image-slider-2.jpg" alt="" />
							<img src="img/sliderimg/image-slider-3.jpg" alt="" />
							<img src="img/sliderimg/image-slider-4.jpg" alt="" />
							<img src="img/sliderimg/image-slider-5.jpg" />
						</div>
					</div>
				</div>	


				<div id="index_ad1">				
					<div class="x728">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- index_ad1 -->
						<ins class="adsbygoogle"
							 style="display:inline-block;width:728px;height:90px"
							 data-ad-client="ca-pub-8040616065949561"
							 data-ad-slot="9766579407"></ins>
						<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				</div>								

				<a href="http://pontusloggbok.tumblr.com/">
					<div id="tumblr_head">
						<img src="img/tumblr_head_profile.png">

					</div>
				</a>
				<div id="tumblr_embed">	

					<script type="text/javascript" src="http://pontusloggbok.tumblr.com/js"></script>

				</div>
				<div id="expand" onmouseup="expand()">
					<h3>SHOW MORE</h3>
				</div>

			</div>
			<div id="main_right">
				<div id="main_right_frame">
					<div id="update_frame">				
						<?php
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
$STH = $DBH->prepare("SELECT * FROM updates ORDER BY id DESC");
$STH->bindParam(':id', $id);
$STH->execute();
$arr = $STH->fetchAll();
$count = 0; $amount = 3;					
foreach($arr as $row){

	if ($amount > $count) {
		$count = $count +1;

		echo '<div class="update_post">
						<h4>' . $row['headline'] . '</h4>
						<p class="update_text">' . $row['text'] . '</p>
						<p class="update_timestamp">' . $row['timestamp'] . '</p> 
						</div>';
	}
} 
						?>

					</div>			
					<br/>

					<div id="index_feature">
						<h4>Featured Games</h4>
						<?php

$STH = $DBH->prepare("SELECT * FROM gameSWE");
$STH->bindParam(':id', $gameId);
$STH->execute();
$arr = $STH->fetchAll();
$DBH = null; $count = 0; $amount = 3;
foreach($arr as $value){

	if ($amount +1 > $count) {
		$count = $count +1;

		echo "		
	<div class='gamebox'><a href='play.php?gameId=" . $value['gameId'] . "'><img src='" .  $value['boxBG'] . "'></a><p>" . $value['description'] . "</p>
    </div>";

	}
}

						?>
					</div>
				</div>
			</div>
			<div class="fix"></div>
		</div>

	</div>	

	<?php echo $codeFooter; $STH = null; $DBH = null;  ?>	
	<script type="text/javascript" src="script/skrollr.min.js"></script>
    <script type="text/javascript">
    var s = skrollr.init();
    </script>
</body>
</html>
