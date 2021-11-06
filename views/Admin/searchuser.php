<?php
	require_once '../../controllers/userController.php';
	$key = $_GET["key"];
	$binventirys = liveSearch($key);
	
	foreach($binventirys as $binventiry){
		echo "<tr>";
		echo '<td onclick="fill_suggest(this)">'.$binventiry["U_ID"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["U_NID"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["U_NAME"].'</td>';
		
		echo '<td onclick="fill_suggest(this)">'.$binventiry["U_EMAIL"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["U_GENDER"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["HOSPITAL_Location"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["U_CONTACT"].'</td>';
		
		
		
		echo "</tr>";
	}
	
?>