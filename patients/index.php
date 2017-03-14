<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th><a href="index.php?sort=name_pet">Name pet</a></th>
				<th><a href="index.php?sort=name_client">Name client</a></th>
				<th><a href="index.php?sort=species">Species</a></th>
				<th>Gender pet</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name_pet']?></td>
				<td><?=$patient['name_client']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['gender']?></td>
				<td><?=$patient['status']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>