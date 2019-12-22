<?php
include_once('DBConnection.php');
include_once('queries.php');

$connection = new Database();
$connection->connectDB();

$sql = Queries::getProducts();
$result = $connection->selectDB($sql);
$products = array();
if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
		$products[$row["description"]] = 0;
	}
}


$sql = Queries::getInvoices();
$result = $connection->selectDB($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
		foreach ($products as $k => $v) {
			if ($row["product"] == $k) {
				$products["$k"] += $row["quantity"];
			}
		}
	}
}

arsort($products);
echo json_encode(array_keys($products));
?>