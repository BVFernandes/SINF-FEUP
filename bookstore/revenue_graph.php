<?php

	include_once('DBConnection.php');
	include_once('queries.php');
	
	$connection = new Database();
	$connection->connectDB();
	
	$sql = Queries::getSaftFiles();
	$result_saft = $connection->selectDB($sql);
	$sql = Queries::getCosts();
	$result = $connection->selectDB($sql);
	
	$array = array();
	for($i=1; $i<13;$i++){
		$array[$i] = 0;
	}
	
	if ($result->num_rows > 0) {
	// output data of each row
		while($row = $result->fetch_assoc()) {
			$datetime = new DateTime($row["date"]);
			$condition = $datetime->format('m');
				foreach($array as $k => $v){	
					if($k == $condition){
						$array[$k] -= $row['total_price'];
					}
				}
		}
	}
	
	if ($result_saft->num_rows > 0) {
	// output data of each row
		while($row = $result_saft->fetch_assoc()) {
			$datetime = new DateTime($row["end_date"]);
			$condition = $datetime->format('m');
			foreach($array as $k => $v){	
				if($k == $condition){
					$array[$k] += $row['total_price'];
				}
			}
		}
	}
	
	echo json_encode(array_values($array));
?>