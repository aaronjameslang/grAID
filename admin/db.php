<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Database Summary</title>
		<meta name="author" content="Aaron J. Lang">
		<!-- Cheat Sheet
		<link rel="stylesheet" href="STYLESHEET.css" type="text/css">
		<style type="text/css"></style>
		<script type="text/javascript" src=""></script>
		<script type="text/javascript"></script>
		-->
	</head>
	<body>
		<?php
			$connection = mysql_connect("localhost", "ajlccom_grAID", "gradeaid0wl");
			if (!$connection) exit('Could not connect: ' . mysql_error());
			mysql_select_db("ajlccom_grAID", $connection);
			
			$tutors = mysql_query("SELECT * FROM Tutor");
						
			echo "<table border='1'>
			<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Uni</th>
			<th>Course</th>
			</tr>";
			
			while($tutor = mysql_fetch_array($tutors)) {
				echo "<tr>";
				echo "<td>" . $tutor['Name'] . "</td>";
				echo "<td>" . $tutor['Email'] . "</td>";
				echo "<td>" . $tutor['Uni'] . "</td>";
				echo "<td>" . $tutor['Course'] . "</td>";
				echo "</tr>";
			}
			  
			echo "</table>";
			
			mysql_close($connection);
			
			?>
	</body>
</html>
