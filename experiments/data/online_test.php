<?php

	//$result_string = $_POST['expHTML'].PHP_EOL;
    $result_string = $_POST['expHTML'];
	$time = date("Y-m-d-H-i");

	file_put_contents('online_test_' . $time . '.json', $result_string, FILE_APPEND);
?>
