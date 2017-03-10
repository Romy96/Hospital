<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');

		if ($db->connect_error) {
	    	die("Connection failed: " . $db->connect_error);
		} 

		echo "Connected successfully";

		var_dump($db);
		var_dump($db->client_info);
		var_dump($db->client_version);
		var_dump($db->info);
		var_dump($db->connect_error);
		var_dump($db->connect_errno);
		
		// Prepare data for insertion
		$species = $db->escape_string($_POST["species"]);
		
		// Prepare query and execute
		$query = "insert into species (species) values ('$species')";
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