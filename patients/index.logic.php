<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "select * from patient";

	if ($_GET['sort'] == 'name_pet')
	{
	    $query .= " ORDER BY name_pet";
	}
	elseif ($_GET['sort'] == 'name_client')
	{
	    $query .= " ORDER BY name_client";
	}
	elseif ($_GET['sort'] == 'species')
	{
	    $query .= " ORDER BY species";
	}
	
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>