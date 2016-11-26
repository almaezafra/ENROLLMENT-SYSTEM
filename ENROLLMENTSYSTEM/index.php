<?PHP
session_start();

if( isset($_GET['action']) ){
	switch($_GET['action']){
	case 'home':
		home();
		break;	
	case 'authenticate':
		authenticate();
		break;
	}
}
else{
	home();
}


function home (){

	include "VIEWS/home.php";
}

function authenticate ()
{
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$type = $_POST["type"];


}



