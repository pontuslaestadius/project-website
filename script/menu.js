// width, direction (-1, 1), distance traveled, fade-out delay
var share1 = [0, 0, 0, 0];
var share2 = [0, 0, 0, 0];
var share3 = [0, 0, 0, 0];
var speedWidth = 1.7;			
// opacity, direciton, margin-top, fade-in delay
var op1 = [0, 0, 0, 0];
var op2 = [0, 0, 0, 0];
var op3 = [0, 0, 0, 0];
var op4 = [0, 0, 0, 0];

function showLogin(){
	document.getElementById('login').style.display = "inherit";
}
function removeLogin(){
	document.getElementById('login').style.display = "none";
}
function showReg(){
	document.getElementById('regform').style.display = "inherit";
}
function removeReg(){
	document.getElementById('regform').style.display = "none";
}
function showLost(){
	document.getElementById('lostPW').style.display = "inherit";
}
function removeLost(){
	document.getElementById('lostPW').style.display = "none";
}

function showDropDown(){
	document.getElementById('dropdown_holder').style.display = "inherit";
	document.getElementById('arrow_down_dropdown').style.display = "none";
	document.getElementById('arrow_up_dropdown').style.display = "inherit";
}

function removeDropDown(){
	document.getElementById('dropdown_holder').style.display = "none"
	document.getElementById('arrow_down_dropdown').style.display = "inherit";
	document.getElementById('arrow_up_dropdown').style.display = "none";
}

function insertShare(tree, fruit) {				
	if (tree[1] > 0){
		tree[2] += tree[1];
		tree[0] += tree[1] + (Math.pow(1.2, tree[2])/tree[2])/2;

		if (tree[0] >= fruit) {
			tree[0] = fruit;
			tree[2] = 0;	
			tree[3] = 0;
		}							
	}	

	if (tree[1] < 0 && tree[0] > 0){
		if (tree[3] >= 20){
			tree[2] += tree[1];
			tree[0] += tree[1] + (Math.pow(1.2, tree[2])/tree[2])/2;
		}
		tree[3] = tree[3] +1;							
	}}
function insertMenu(meepo) {					
	if (meepo[1] > 0 && meepo[0] < 1){
		if (meepo[2] >= 89){
			if (meepo[3] > 25){
				meepo[0] += 1/30;
			}						
			meepo[3] = meepo[3] || 0; //#1
			meepo[3]++;							
		}

		meepo[2] += 89/20;

		if (meepo[2] > 89){
			meepo[2] = 89;
		}


		if (meepo[0] >= 1){
			meepo[0] = 1;
		}	

		if (meepo[0] == 1 && meepo[2] == 89){
			meepo[1] = 0;
			meepo[3] = 0;
		}

	} else if (meepo[1] < 0) {

		meepo[0] -= 1/40;	

		if (meepo[0] < 30/40){
			meepo[2] -= 89/20;							
		}						

		if (meepo[0] <= 0){
			meepo[0] = 0;
		}	

		if (meepo[2] <= 0){
			meepo[2] = 0;
		}	

		if (meepo[0] == 0 && meepo[2] == 0){
			meepo[1] = 0;
		}
	}
}


function www() {				
	if (op1[1] != 0){
		document.getElementById('op1').style.opacity = op1[0];
		document.getElementById('menu-1').style.marginTop =  10 -op1[2];
		insertMenu(op1);

	}

	if (op2[1] != 0){
		document.getElementById('op2').style.opacity = op2[0];
		document.getElementById('menu-2').style.marginTop =  10 -op2[2];
		insertMenu(op2);

	}

	if (op3[1] != 0){
		document.getElementById('op3').style.opacity = op3[0];
		document.getElementById('menu-3').style.marginTop =  10 -op3[2];
		insertMenu(op3);

	}

	if (op4[1] != 0){
		document.getElementById('op4').style.opacity = op4[0];
		document.getElementById('menu-4').style.marginTop =  10 -op4[2];
		insertMenu(op4);

	}
}

function uuu() {
	if (share1[1] != 0){
		document.getElementById('share1').style.width = share1[0] + "px";				
		insertShare(share1, 100);
	}

	if (share2[1] != 0){
		document.getElementById('share2').style.width = share2[0] + "px";									insertShare(share2, 116);
	}

	if (share3[1] != 0){
		document.getElementById('share3').style.width = share3[0] + "px";
		insertShare(share3, 102);				
	}	
}

function share1in() {share1[1] = speedWidth;share1[2] = 0;}			
function share1out() {share1[1] = -speedWidth;share1[2] = 0;}			
function share2in() {share2[1] = speedWidth;share2[2] = 0;}			
function share2out() {share2[1] = -speedWidth;share2[2] = 0;}			
function share3in() {share3[1] = speedWidth;share3[2] = 0;}			
function share3out() {share3[1] = -speedWidth;share3[2] = 0;}

function menuHover(davai){davai[1] = 1;}
function menuOut(davai){davai[1] = -1;}