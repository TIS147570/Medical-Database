<?php
	require_once '../../controllers/donorController.php';
	$key = $_GET["key"];
	$binventirys = liveSearch($key);
	
	foreach($binventirys as $binventiry){
		echo "<tr>";
		echo '<td onclick="fill_suggest(this)">'.$binventiry["c_id"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["name"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["dob"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["gender"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["bloodgroup"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["type"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["mobile"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["email"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["address"].'</td>';
		
		echo "</tr>";
	}
	
?>