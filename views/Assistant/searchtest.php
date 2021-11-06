<?php
	require_once '../../controllers/TestController.php';
	$key = $_GET["key"];
	$binventirys = liveSearch($key);
	
	foreach($binventirys as $binventiry){
		echo "<tr>";
		echo '<td onclick="fill_suggest(this)">'.$binventiry["MT_ID"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["MT_NAME"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["MT_TYPE"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["MT_DATE"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["MT_RESULT"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["MT_OBSERVATION"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["PA_ID"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["A_ID"].'</td>';
		echo '<td onclick="fill_suggest(this)">'.$binventiry["D_ID"].'</td>';
		
		
		
		echo "</tr>";
	}
	
?>