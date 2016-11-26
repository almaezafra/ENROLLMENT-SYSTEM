<?php

include "dbconfig.php";



function display_students(){
	include "dbconfig.php";
	$sql = "SELECT * FROM `student`";
	$result = mysqli_query($conn, $sql);	
	return $result;
}

function insert_students($Stud_fname, $Stud_lname, $Stud_mname, $Stud_bday, $Stud_gender, $Stud_address, $Stud_mother, $Mother_work, $Mother_contact, $Stud_father, $Father_work, $Father_contact, $Stud_guardian, $Guardian_work, $Guardian_contact, $admit_date, $Schedule_ID, $Section_ID, $Grade_lvl_ID, $Grade_ID, $Payment_ID, $Enrollment_ID, $password, $School_yr_ID)
{

include "dbconfig.php";

	
$sql =  "INSERT INTO `student`(`id`,`Student_ID`, `Stud_fname`, `Stud_lname`, `Stud_mname`, `Stud_bday`, `Stud_gender`, `Stud_address`, `Stud_mother`, `Mother_work`, `Mother_contact`, `Stud_father`, `Father_work`, `Father_contact`, `Stud_guardian`, `Guardian_work`, `Guardian_contact`, `admit_date`, `Schedule_ID`, `Section_ID`, `Grade_lvl_ID`, `Grade_ID`, `Payment_ID`, `Enrollment_ID`, `password`, `School_yr_ID`) 
	VALUES ('','', '$Stud_fname', '$Stud_lname', '$Stud_mname', '$Stud_bday', '$Stud_gender', '$Stud_address', '$Stud_mother', '$Mother_work', '$Mother_contact', '$Stud_father', '$Father_work', '$Father_contact', '$Stud_guardian', '$Guardian_work', '$Guardian_contact', 'CURDATE()', '$Schedule_ID', '$Section_ID', '$Grade_lvl_ID', '$Grade_ID', '$Payment_ID', '$Enrollment_ID', '$password', '$School_yr_ID');";
	$result = mysqli_query($conn, $sql);
	return $result;
	
}

function edit_students($Student_ID, $Stud_fname, $Stud_lname, $Stud_mname, $Stud_bday, $Stud_gender, $Stud_address, $Stud_mother, $Mother_work, $Mother_contact, $Stud_father, $Father_work, $Father_contact, $Stud_guardian, $Guardian_work, $Guardian_contact, $admit_date, $Schedule_ID, $Section_ID, $Grade_lvl_ID, $Grade_ID, $Payment_ID, $Enrollment_ID, $password, $School_yr_ID){

include "dbconfig.php";

	
	$sql = "UPDATE `student` SET `Student_ID`=`$Student_ID`,`Stud_fname`='$Stud_fname',`Stud_lname`=`$Stud_lname`,`Stud_mname`='$Stud_mname',`Stud_bday`=`$Stud_bday`,`Stud_gender`='$Stud_gender',`Stud_address`='$Stud_address',`Stud_mother`='$Stud_mother',`Mother_work`='$Mother_work',`Mother_contact`='$Mother_contact',`Stud_father`='$Stud_father',`Father_work`='$Father_work',`Father_contact`='$Father_contact',`Stud_guardian`='$Stud_guardian',`Guardian_work`='$Guardian_work',`Guardian_contact`= '$Guardian_contact',`admit_date`='$admit_date',`Schedule_ID`='$Schedule_ID',`Section_ID`='$Section_ID',`Grade_lvl_ID`='$Grade_lvl_ID',`Grade_ID`='$Grade_ID',`Payment_ID`='$Payment_ID',`Enrollment_ID`='$Enrollment_ID',`password`='$password',`School_yr_ID`='$School_yr_ID')";
	
	// echo "<br />$sql";
	//execute
	$result = mysqli_query($conn, $sql);
}

function delete_students($id){
include "dbconfig.php";

	
	$sql = "DELETE FROM `student` WHERE `delete`.`id` = $id";
	
	// echo "<br />$sql";
	//execute
	$result = mysqli_query($conn, $sql);
}

function getbyID($id){
include "dbconfig.php";

	
	$sql = "SELECT * FROM `student` WHERE `id` LIKE $id";
	
	// echo "<br />$sql";
	//execute
	$result = mysqli_query($conn, $sql);
	if($myrow = mysqli_fetch_array($result)){
		do{

	
			$name = $myrow['stud_name'];
			
		}while($myrow = mysqli_fetch_array($result));
	}
	return $name;
}

// $result = display_students();
// echo "Total: ".mysqli_num_rows($result);

// echo "Total: ".mysqli_num_rows($result);

?>