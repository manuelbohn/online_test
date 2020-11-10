<?php
	//$result_string = $_POST['expHTML'].PHP_EOL;
	$result_string = $_POST['expHTML'];
	$subid = $_POST['subid'];
	$time = date("Y-m-d-H-i-s");

	file_put_contents('online_test_' . $subid . '_'  . $time . '.json', $result_string, FILE_APPEND);
?>
