<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New cliënt</h1>
	<form method="post" action="create.logic.php">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>