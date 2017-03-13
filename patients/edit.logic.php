<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from patient where id=$id";
			$result = $db->query($query);
		
			$patient = $result->fetch_assoc();		
		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name_pet = $db->escape_string($_POST["name_pet"]);
		$name_client = $db->escape_string($_POST["name_client"]);
		$species = $db->escape_string($_POST["species"]);
		$gender = $db->escape_string($_POST["gender"]);
		$status = $db->escape_string($_POST["status"]);
		
		// Prepare query and execute
		$query = "update patient set name_pet='$name_pet', name_client='$name_client',species='$species', gender='$gender', status='$status' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>