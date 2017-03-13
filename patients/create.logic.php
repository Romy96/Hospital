<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name_pet = $db->escape_string($_POST["name_pet"]);
		$name_client = $db->escape_string($_POST["name_client"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);

		// Prepare query and execute
		$query = "insert into patient (name_pet, name_client, species, gender, status) values ('$name_pet','$name_client','$species','$gender','$status')";
		$result = $db->query($query);

		if(!$result) {
			echo("Error description: " . mysqli_error($db));
		}

		var_dump($result);
	
    // Tell the browser to go back to the index page.
    //header("Location: ./");
    exit();
	endif;

?>