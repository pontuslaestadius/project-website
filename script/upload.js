function showTab(elm) {
	document.getElementById('flash-content').style.display = "none";
	document.getElementById('flash-content').style.zIndex = "500";
	document.getElementById('javascript-content').style.display = "none";
	document.getElementById('javascript-content').style.zIndex = "500";
	document.getElementById('iframe-content').style.display = "none";
	document.getElementById('iframe-content').style.zIndex = "500";
	document.getElementById(elm + '-content').style.display = "inherit";
	document.getElementById(elm + '-content').style.zIndex = "1000";
	
	if (elm != 'javascript'){
		document.getElementById('javascript').style.backgroundColor = "#6cade4";	
	} else {
		document.getElementById('javascript').style.backgroundColor = "#77befb";
	}
	
	if (elm != 'flash'){
		document.getElementById('flash').style.backgroundColor = "#da6d6d";	
	} else {
		document.getElementById('flash').style.backgroundColor = "#f58484";
	}
	
	if (elm != 'iframe'){
		document.getElementById('iframe').style.backgroundColor = "#77d470";	
	} else {
		document.getElementById('iframe').style.backgroundColor = "#95f88e";
	}
}