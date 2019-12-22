<?php
include_once('DBConnection.php');
include_once('queries.php');

$connection = new Database();
$connection->connectDB();

$sql = Queries::getCustomers();
$result = $connection->selectDB($sql);
$customers = array();
if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
		$customers[$row["id"]] = 0;
	}
}

$sql = Queries::getInvoices();
$result = $connection->selectDB($sql);
$topCustomers = array();
while ($row = $result->fetch_assoc()) {
	foreach ($customers as $k => $v) {
		if ($row["customer"] == $k) {
			$customers["$k"]++;
		}
	}
}

$sql = Queries::getCustomers();
$result = $connection->selectDB($sql);
$topCustomers = array();

while ($row = $result->fetch_assoc()) {
	foreach ($customers as $k => $v) {
		if ($row["id"] == $k) {
			$topCustomers[$row["name"]] = $v;
		}
	}
}
arsort($topCustomers);
?>