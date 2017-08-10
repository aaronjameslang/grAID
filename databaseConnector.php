<?php

function connectToDatabase() {
	$connection = mysql_connect("localhost", "ajlccom_grAID", "gradeaid0wl");
	if (!$connection) exit('Could not connect: ' . mysql_error());//Exit; not the best plan
	mysql_select_db("ajlccom_grAID", $connection);
	return $connection;
}
//function executeSQL($sqlString) {
	//return mysql_query($sqlString);
//}
//function disconnectFromDatabase() {
	//mysql_close($connection);
//}

//function registerTutor_stage1($name, $email, $uni, $course) {
	//$connection = connectToDatabase();
	//mysql_query("INSERT INTO Tutor (Name, Email, Uni, Course) VALUES ('".$name."', '".$email."', '".$uni."' ,'".$course."')");//TODO check for failure
	//mysql_close($connection);
//}

?>
