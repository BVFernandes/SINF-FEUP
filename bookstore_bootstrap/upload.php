<?php
if(isset($_POST["submit"])) {

	include_once('DBConnection.php');
	include_once('queries.php');

	$connection = new Database();
	$connection->connectDB();
	
    $file = $_FILES['saft_file'];
    $xml_file_content = file_get_contents($_FILES['saft_file']['tmp_name']);
    $file_content = simplexml_load_string($xml_file_content);
	
    $start_date =  date($file_content->Header->StartDate);
    $end_date = date($file_content->Header->EndDate);
	$query = Queries::insertSaftFile($start_date, $end_date);
	$saft_id = $connection->updateDB($query);
	
    echo "No. of invoice entries: " . $file_content->SourceDocuments->SalesInvoices->NumberOfEntries . "</br>";
    echo "Total debit: " . $file_content->SourceDocuments->SalesInvoices->TotalDebit . "</br>";
    echo "Total credit: " . $file_content->SourceDocuments->SalesInvoices->TotalCredit . "</br>";

    foreach($file_content->SourceDocuments->SalesInvoices->Invoice as $invoice) {
		$query = Queries::insertInvoice($saft_id, substr($invoice->CustomerID, 0, -2), 
			$invoice->Line->ProductCode, $invoice->InvoiceNo, 
			$invoice->Line->Quantity);
		echo $query;
		$connection->updateDB($query);
    }
}