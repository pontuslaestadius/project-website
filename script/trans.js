// Updates the game from 4ms to 16ms


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



maxmargin = 200;
minmargin = 35;
ttime = [0.5, 10];

var e = [];
var n = 0;

function transition(prop){
    e.push(new E(prop, maxmargin, 1));
}

function detransition(prop){
    e.push(new E(prop, minmargin, 2));
}

function E(prop, ml, d){
    this.prop = prop;
    this.ml = ml;
    this.d = d;

    /*
     Add in a system for if the current prop is already in use
     so it wont start from a stale value. Make it start from
     the value already set by another e[n] this.ml tag.
     */

    /*
     Make it only do the following code IF there exists another
     e(object) at the moment with the same prop.
     And take it's place with that.ml = this.ml;
     This is to enable smooth transitions all the time.
     */

    /*
     With some help i discovred i can start from a top value or not remove the
     object at all. Just set it's values to 0 or null.
     */

    /*
     The system below works as intended. But only works when transitioning
     out to another box
     */



    for (var i = e.length; i > 1; i--){
        for (var z = e.length; z > 1; z--){
            if (e[i -1].prop == e[z -1].prop && z != i && e[i -1].prop != 0){
                if (z > i){
                    e[z -1].ml = e[i -1].ml;
                    e[i -1].prop = 0;

                } else {
                    e[i -1].ml = e[z -1].ml;
                    e[z -1].prop = 0;

                }
            }

        }

    }



    //document.getElementById(this.prop).style.backgroundImage = 'url(http://dl.dropboxusercontent.com/u/2997382/img/' + this.prop + '.gif)';

}

E.prototype.update = function () {
    /*
     The next 6 rows I haven't done myself. Because i couldn't
     figure out how to call for the class name added with another tag.
     Source:
     http://stackoverflow.com/questions/26010757/extracting-value-from-a-div-sent-in-to-javascript
     */
    var els = document.getElementsByTagName("div");
    for(var i=0;i<els.length;i++){
        if(els[i].className==this.prop+"-smallbox"){
            els[i].style.marginLeft = this.ml + "px";
        }
    }

    if (this.prop != 0){
        // Go back


        if (this.d == 2){

            if (this.ml < maxmargin){
                this.ml += ttime[0] + (maxmargin - this.ml)/ttime[1];
            } else if (this.ml > maxmargin){
                this.ml = maxmargin;
                //document.getElementById(this.prop).style.backgroundImage =
                //    'url(http://dl.dropboxusercontent.com/u/2997382/img/' + this.prop + '.png)';


                this.prop = 0;
            } else if (this.ml > maxmargin -20) {
                //document.getElementById(this.prop).style.backgroundImage =
                //    'url(http://dl.dropboxusercontent.com/u/2997382/img/' + this.prop + '.png)';
            }
        }
        // Go Forward
        else if (this.d == 1){

            if (this.ml > minmargin){
                this.ml -= ttime[0] * 2 + (maxmargin - this.ml)/ttime[1];;
            } else if (this.ml < minmargin){
                this.ml = minmargin;
                this.prop = 0;
            }
        }


        /*

        if (this.d == 2){
            this.ml = maxmargin;
        } else if (this.d == 1){
            this.ml = minmargin;

        }

         */



    }

}

function update (){


}


trans();
function trans(){
    requestAnimationFrame(trans);
	uuu();
	www();
    for (n in e){
        e[n].update();
    }

}