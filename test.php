<html>
		<head>
    	<title>slashJS - Test sida</title>
    	<link href="script/style.css" rel="stylesheet" type="text/css">
    	<link rel='stylesheet' href='font/typicons.min.css' />
			
			
			<link href='http://fonts.googleapis.com/css?family=Comfortaa:700' rel='stylesheet' type='text/css'>
		
			<style>
			
#logo img {
    max-height:70px;
    max-width:110px;
}

#logo {
    float:left;
    margin:39px 0 -110px 40px;
}

#menu {
	width:100%;
    clear:both;
    height:100px;
	margin-bottom: 10px;
	text-align:center;
	font-family: 'Comfortaa', cursive;
}			

.menu-hover, menu-div li {
	width:90px;
	height:90px;
}
				
.menu-div {
	overflow:hidden;
	float:left;
	margin-left:20px;
	width:90px;
	height:90px;
}
				
.menu-hover {
	float:left;
	margin-left:-90px;	
	z-index:5;
}
				
.menu-nr {
	width:90px;
	margin-top:10px;
	transition: 0.25s linear 0.25s;
	margin-left:-10px;
	padding:10px 10px 20px 10px;
	z-index:15;	
}					
				
li p {
	color:white;
	font-size:16px;
	margin-top:60px;
}

.menu-span {
    color:white;
    text-decoration: none;
    font-size: 48px;
}

li {
    display:inline;
	cursor:pointer;
	z-index:10;
	width:90px;
	height:90px;
}

ul {
    margin-left:-40px;
	margin-top:30px;
}

#static-nav {
    position: relative;
    width:auto;
    height:78px;
    float:left;
    clear:left;
    z-index: 10;
    margin-left:130px;
	font-size:9px;
	padding-right:9px;
}

.share {
    float:left;
    font-size:16px;
    height:auto;
    width:30px;
    margin-top:35px;
    z-index: 5;
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px;
}

.share a {
    text-decoration: none;
    float:left;
}
.share span {
    color:white;
    transition:0.15s;
    z-index: 3;
    padding:3px 3px 3px 3px;
    float:right;
	margin-top:-22px;
}
				
.share-div {
	height:22px;
	width:0px;
	overflow:hidden;
}
				

.share-div p {
	color:white;
	text-decoration:none;
	float:left;
	margin-top:-1px;
	margin-left:3px;
}				
			</style>
			<script src="script/menu.js"></script>
			<script src="script/menuwog.js"></script>

			
		
		</head>
		<body>
			<div id="menu">
 <a href="index.php" id="logo">
     <img src="img/logo_mobile.png">
 </a>

 <nav id="static-nav">
     <ul>		 
			 <div class="menu-div"  style="background-color: #00d000">
				 <div id="menu-1" class="menu-nr">
					 <li class="menu-span"><span class="typcn typcn-home"></span></li>
					 <li><p id="op1">HOME</p></li>
				 </div>				 
			 </div>
			 <a href="index.php"><div class="menu-hover" onmouseover="menuHover(op1)" onmouseout="menuOut(op1)"></div></a>
		 
			 <div class="menu-div" style="background-color: #3142ff">
				 <div id="menu-2" class="menu-nr">
					 <li class="menu-span"><span class="typcn typcn-headphones"></span></li>
					 <li><p id="op2">GAMES</p></li>
				</div>
			 </div>
			 <a href="games.php"><div class="menu-hover" onmouseover="menuHover(op2)" onmouseout="menuOut(op2)"></div></a>

			 <div class="menu-div" style="background-color: #ff521c">
				 <div id="menu-3" class="menu-nr">
				 	<li class="menu-span"><span class="typcn typcn-upload"></span></li>
				 	<li><p id="op3">UPLOAD</p></li>
				</div>
			 </div>
			 <a href="upload.php"><div class="menu-hover" onmouseover="menuHover(op3)" onmouseout="menuOut(op3)"></div></a>
		 
		 <div class="menu-div" style="background-color: #b1de23">
				 <div id="menu-4" class="menu-nr">
				 	<li class="menu-span"><span class="typcn typcn-mail"></span></li>
				 	<li><p id="op4">UPLOAD</p></li>
				</div>
			 </div>
			 <a href="upload.php"><div class="menu-hover" onmouseover="menuHover(op4)" onmouseout="menuOut(op4)"></div></a>
         
         
         
     </ul>
 </nav>

<div class="share">
      <a href="http://www.twitter.com" onmouseover="share1in()" onmouseout="share1out()">
		  <div class="share-div" style="background-color:#4f7cd5;" id="share1" >			  
			  <p>Twitter</p>			  
		  </div> 
		  <span class="typcn typcn-social-twitter" style="background-color:#6699ff;" ></span>
      </a>
	
	<a href="http://www.facebook.com" onmouseover="share2in()" onmouseout="share2out()">
		  <div class="share-div" style="background-color:#0c4075;" id="share2" >			  
			  <p>Facebook</p>			  
		  </div> 
		  <span class="typcn typcn-social-facebook" style="background-color:#336699;" ></span>
      </a>
	
	
	<a href="http://www.plus.google.com" onmouseover="share3in()" onmouseout="share3out()">
		  <div class="share-div" style="background-color:#aa1313;" id="share3" >			  
			  <p>Google+</p>			  
		  </div> 
		  <span class="typcn typcn-social-google-plus" style="background-color:#cc3333;" ></span>
      </a>

  </div>
</div>	
			
	</body>
</html>