function stripesbutton() {
	document.getElementById("bluecontainer").style.display="flex"
}

//Blue

function bluebutton() {
	        document.getElementById("pinkcontainer").style.display="flex";
			document.getElementById("bluecontainer").style.display="none";
}

//pink

function pinkbuttonback() {
		document.getElementById("bluecontainer").style.display="flex";
		document.getElementById("pinkcontainer").style.display="none";
}
function pinkbutton() {
	document.getElementById("yellowcontainer").style.display="flex";
	document.getElementById("pinkcontainer").style.display="none";
}

//Yellow

function yellowbuttonback() {
		document.getElementById("pinkcontainer").style.display="flex";
		document.getElementById("yellowcontainer").style.display="none";
}
function yellowbutton() {
	document.getElementById("greencontainer").style.display="flex";
	document.getElementById("yellowcontainer").style.display="none";
}

//Green

function greenbuttonback() {
		document.getElementById("yellowcontainer").style.display="flex";
		document.getElementById("greencontainer").style.display="none";
}
function greenbutton() {
	document.getElementById("redcontainer").style.display="flex";
	document.getElementById("greencontainer").style.display="none";
}

//Red

function redbuttonback() {
		document.getElementById("greencontainer").style.display="flex";
		document.getElementById("redcontainer").style.display="none";
}
