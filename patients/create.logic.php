<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);

		// Prepare query and execute
		$query = "insert into patient (name, species, gender, status) values ('$name','$species','$gender','$status')";
		$result = $db->query($query);

		if(!$result) {
			echo("Error description: " . mysqli_error($db));
		}

		var_dump($result);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>