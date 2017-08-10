<?php include '/home/ajlccom/public_html/grAID/header.frag.html'?>
<h3>Tutor 1</h3>
<?php
if (!$_POST)
	echo '
		<form id="form_tutor1" action="tutor1.php" method="post">
			<label for="form_tutor1_name">Name</label>
			<input type="text" id="form_tutor1_name" name="name"/>
			<br/>
			<label for="form_tutor1_university">University</label>
			<select id="form_tutor1_university" name="uni">
				<option value="a">Uni A</option>
				<option value="b">Uni B</option>
				<option value="c">Uni C</option>
			</select>
			<br/>
			<label for="form_tutor1_course">Current Course</label>
			<input type="text" id="form_tutor1_course" name="course"/>
			<br/>
			<label for="form_tutor1_email">Email Address</label>
			<input type="text" id="form_tutor1_email" name="email"/>
			<br/>
			<input type="submit" value="Submit"/>
		</form>
		';
else {
	include '/home/ajlccom/public_html/grAID/databaseConnector.php';
	$databaseConnection = connectToDatabase();
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$course = $_POST['course'];
	$uni = $_POST['uni'];
	$insertStr = "INSERT INTO Tutor (Name, Email, Uni, Course) VALUES ('$name', '$email', '$uni', '$course')";
	mysql_query($insertStr);//TODO check for failure
	mysql_close($databaseConnection);
	
	echo '<h6>Submitted</h6>';
	//echo "Name: $name";
	//echo "Email: $email";
	//echo "Course: $course";
	//echo "
}
?>
<?php include '/home/ajlccom/public_html/grAID/footer.frag.html' ?>
