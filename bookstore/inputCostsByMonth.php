<?php
	
	include_once('DBConnection.php');
	include_once('queries.php');
	
	$data = $_POST['data'];
	$monthData = $_POST['monthData'];

	$connection = new Database();
	$connection->connectDB();
	
	$counter = 0;
	
	foreach($data as $row) {
		$counter++;
	}
	
	$datetime_month = new DateTime($monthData);
	$condition2 = $datetime_month->format('m');
	foreach($data as $row) {
		$date = $row[0];
		$amount = $row[1];
		$datetime = new DateTime($date);
		$condition = $datetime->format('m');
		if($condition == $condition2) {
			$query = Queries::insertCost(date($date), $amount);
			$connection->updateDB($query);
		}
	}

	echo $counter;