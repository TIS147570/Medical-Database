<?php
	require_once '../../controllers/PresController.php';
	$key = $_GET["key"];
	$binventirys = liveSearch($key);
	
	foreach($binventirys as $binventiry){
		echo "<tr>";
		echo '<td onclick="fill_suggest(this)">'.$binventiry["PRID"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["DISEASE1"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["MEDNAME"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["MEDPOWER"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["MEDPRICE"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["MEDTIME"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["PAID"].'</td>';
		
		
		
		
		echo "</tr>";
	}
	
?>