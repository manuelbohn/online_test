<?php
	//$result_string = $_POST['expHTML'].PHP_EOL;
	$result_string = $_POST['expHTML'];
	$subid = $_POST['subid'];
	$time = date("Y-m-d");

	file_put_contents($time . '-' . $subid . '.json', $result_string, FILE_APPEND);
?>
