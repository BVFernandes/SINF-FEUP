<?php
if(isset($_POST["submit"])) {

    $file = $_FILES['saft_file'];
    $xml_file_content = file_get_contents($_FILES['saft_file']['tmp_name']);

    $file_content = simplexml_load_string($xml_file_content);

    echo "<pre>";
    echo "Start date: " . $file_content->Header->StartDate . "</br>";
    echo "End date: " . $file_content->Header->EndDate . "</br>";
    echo "No. of invoice entries: " . $file_content->SourceDocuments->SalesInvoices->NumberOfEntries . "</br>";
    echo "Total debit: " . $file_content->SourceDocuments->SalesInvoices->TotalDebit . "</br>";
    echo "Total credit: " . $file_content->SourceDocuments->SalesInvoices->TotalCredit . "</br>";

    $counter = 1;
    foreach($file_content->SourceDocuments->SalesInvoices->Invoice as $invoice) {
        echo "\n\nFile invoice number: " . $counter++ . "\n";
        echo "Invoice Jasmin No. " . $invoice->InvoiceNo . "</br>";
        echo "CustomerID: " . $invoice->CustomerID . "</br>";
        echo "Product: " . $invoice->Line->ProductCode . "</br>";
        echo "Product quantity: " . $invoice->Line->Quantity . "</br>";
        echo "Unit price: " . $invoice->Line->UnitPrice . "</br>";
        echo "Total price: " . $invoice->Line->CreditAmount . "</br>";

    }
}