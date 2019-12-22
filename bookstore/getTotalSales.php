<?php

include_once('DBConnection.php');
include_once('queries.php');
$connection = new Database();
$connection->connectDB();

$sql = Queries::getSaftFiles();
$result = $connection->selectDB($sql);
$total = 0;
if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
		$total += $row["total_price"];
	}
}

echo json_encode($total);
?>