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
						while($row = $result->fetch_assoc()) {
								$products[$row["id"]] = 0;
							}
						}
						$sql = Queries::getInvoices();
						$result = $connection->selectDB($sql);
						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							foreach($products as $k => $v){
								if($row["product"] == $k){
									$products["$k"] += $row["quantity"];
								}
							}
						}
						}
						$sql = Queries::getProducts();
						$result = $connection->selectDB($sql);
						
						$topProducts = array();
						
						while($row = $result->fetch_assoc()) {
							foreach($products as $k => $v){
								if($row["id"] == $k){
									$topProducts[$row["description"]] = $v;
								}
								
						}
						}
						
						arsort($topProducts);
						$top5Products = array_slice($topProducts,0,5,true);
			?>