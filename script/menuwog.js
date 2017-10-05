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
			
			wog();
			function wog() {
				requestAnimationFrame(wog);				
				uuu();
				www();
			}