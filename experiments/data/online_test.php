<?php
	//$result_string = $_POST['expHTML'].PHP_EOL;
	$result_string = $_POST['expHTML'];
	$subid = $_POST['subid'];


	file_put_contents($subid . '.json', $result_string, FILE_APPEND);
?>
