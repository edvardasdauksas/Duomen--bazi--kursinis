function check_login() {
	var req;
	var stuff = "ak=" + document.login.asmk.value + "&id=" + document.login.idnum.value;
	req=new XMLHttpRequest();
	req.onreadystatechange=function() {
		if (req.readyState==4 && req.status==200) {
			whatnow=1*req.responseText;
			if (whatnow === 1) {
				login_go();
			} else {
				login_no();
			}
		}
	}
	req.open("POST","check_login.php",true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	req.send(stuff);
	//document.write('sin');
}

function login_go() {
	window.location = "page0.html" ; 
}	

function login_no() {
	document.getElementById("fail").innerHTML="GO AWAY";
}