<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$order = '';
	$query = "select * from patient";
	$where = '';

if(isset($_GET["sort"]))
{
	$sort = $_GET["sort"];   
    $order = $_GET["order"];

	if($order == 'ASC')
     { 
        $order='DESC';
     }
     else  
     { 
        $order='ASC';
     }

	if ($_GET['sort'] == 'name_pet')
	{
		$sort = "name_pet";
	}
	elseif ($_GET['sort'] == 'name_client')
	{	
		$sort = "name_client";
	}
	elseif ($_GET['sort'] == 'species')
	{
	    $sort = "species";
	}
	$where = " ORDER BY $sort $order";
	$query = "select * from patient " . $where;
}
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>