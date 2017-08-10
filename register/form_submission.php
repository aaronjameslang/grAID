<?php

include "db_functions.php";
$name = $_POST["name"];
$email = $_POST["email"];
$uni = $_POST["uni"];
$course = $_POST["course"];

registerTutor_stage1($name, $email, $uni, $course);

?>
