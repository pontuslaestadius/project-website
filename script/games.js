(function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
            || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); },
                timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };

    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };
}());
			
			// width, direction (-1, 1), distance traveled
			var share1 = [0, 0, 0];
			var share2 = [0, 0, 0];
			var share3 = [0, 0, 0];
			var speedWidth = 1.7;
			
			// opacity, direciton, margin-top
			var op1 = [0.0, 0, 0];
			var op2 = [0.0, 0, 0];
			var op3 = [0.0, 0, 0];
			var op4 = [0.0, 0, 0];

			var greendale;
			// height, speed, max-height;
			var greens = 0
			var peacemaker = [0, 0];
			var timeOut = 0;
			var opH = [0, 0, 0];
			
			wog();
			function wog() {
				requestAnimationFrame(wog);				
				uuu();
				www();
				if (greens != 0) {
					lanuchPotato();
				}
				
				if (opH[2] == 1) {
					doOpacity();
				}
			}
			function pleaseDoThis() {	
				if (window.location == "http://localhost/windows7/games.php#button3"){
					setTimeout(function () { document.getElementById('potato1').style.display = "inherit"; }, timeOut);			
				}
				
				if (window.location == "http://localhost/windows7/games.php#button2"){
						
					setTimeout(function () { document.getElementById('potato2').style.display = "inherit"; }, timeOut);
				}
				
				if (window.location == "http://localhost/windows7/games.php#button1"){
					setTimeout(function () { document.getElementById('potato3').style.display = "inherit"; }, timeOut);			
				}
		
			}
						
			function doPotato(element, stuff){
				document.getElementById('potato1').style.display = "none";
				document.getElementById('potato2').style.display = "none";
				document.getElementById('potato3').style.display = "none";				
				peacemaker[0] = element;
				peacemaker[1] = stuff;	
				document.getElementById(peacemaker[0] + 'small').style.opacity = opH[0];
				
				setTimeout(function () { greens += 30; document.getElementById('greendale').style.display = "inherit";}, 1500)
						
			}

			function lanuchPotato() {
				document.getElementById('greendale').style.height = greens;
				
					greens += 30;
				
				
				if (greens >= 1200){
					greens = 0;
					document.getElementById('greendale').style.display = "none";
					doPotato2();
				}
			}

			function doPotato2(element, stuff) {									
					document.getElementById(peacemaker[0] + 'small').style.opacity = 0.0;
					document.getElementById(peacemaker[0]).style.display = "inherit";
					document.getElementById(peacemaker[0]).style.height = window.innerHeight-11 + "px";
					opH[2] = 1;
			}

			function doOpacity() {
				document.getElementById(peacemaker[0] + 'small').style.opacity = opH[0];
				opH[0] += 0.05;
				opH[1]++;
				if (opH[1] == 20){
					opH[2] = 0;
				}
			}
