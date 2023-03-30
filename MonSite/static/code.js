
function navbar(){
	doc = document.getElementById("navheader").innerHTML ;

	nav = "<link rel='stylesheet' href='../../../static/CSS/navbar.css'>"+
	"<div class='topnav'>"+
		"<a href= '/app/views/users/register.php'>Register</a> <a href= '#'>Divers</a>"+
		"<a href= '/app/views/users/login.php'>Login</a> <a href= '#'>Mentions légales</a>"+
	"</div>";
	nav += doc;
	document.getElementById("navheader").innerHTML = nav;
};