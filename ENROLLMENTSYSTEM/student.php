<?PHP
session_start();

include "MODELS/student.php";

if( isset($_GET['action']) ){
	switch($_GET['action']){
	
	
	case 'addNew':
		add();
		break;

	case 'insert':
	insert();
	break;

	case 'list':
	studlist();
	break;
	
	default:
		home();
		break;
	
	}
}
else{
	home();
}


function add (){

	include "VIEWS/pages/STUDENT/insert.php";
}

function studlist (){

	include "VIEWS/pages/STUDENT/list.php";
}
function home (){

	include "VIEWS/pages/STUDENT/index.php";
}
function insert ()
{
	$sfname = $_POST["slname"];
	$slname = $_POST["sfname"];
	$smname = $_POST["smname"];
	$sgender = $_POST["sgender"];
	$sbday = $_POST["sbday"];
	$saddress = $_POST["saddress"];

	$mfname = $_POST["mlname"];
	$mlname = $_POST["mfname"];
	$mmname = $_POST["mmname"];
	$mjob = $_POST["mjob"];
	$mnum = $_POST["mnum"];
	$smother = $mfname." ".$mmname." ".$mlname;

	$ffname = $_POST["flname"];
	$flname = $_POST["ffname"];
	$fmname = $_POST["fmname"];
	$fjob = $_POST["fjob"];
	$fnum = $_POST["fnum"];

	$sfather = $ffname." ".$fmname." ".$flname;

	$gfname = $_POST["glname"];
	$glname = $_POST["gfname"];
	$gmname = $_POST["gmname"];
	$sguardian = $gfname." ".$gmname." ".$glname;
	$gjob = $_POST["gjob"];
	$gnum = $_POST["gnum"];

	insert_students($sfname, $slname, $smname, $sbday, $sgender, $saddress, $smother, $mjob, $mnum, $sfather, $fjob, $fnum,$sguardian, $gjob, $gnum, "","", "", "", "", "", "", "", $smname, "");

	echo "".$sfname;



}



