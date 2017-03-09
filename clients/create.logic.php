<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//echo "clients/create.logic.php";
		$db = new mysqli('localhost','root','','hospital');

		if ($db->connect_error) {
	    	die("Connection failed: " . $db->connect_error);
		} 

		var_dump($db);
		var_dump($db->client_info);
		var_dump($db->client_version);
		var_dump($db->info);
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);

		var_dump($name);
		
		// Prepare query and execute
		$query = "insert into client (name) values (".$name.")";
		$result = $db->query($query);

		var_dump($result);

    // Tell the browser to go back to the index page.
    //header("Location: ./");
    exit();
    }

?>