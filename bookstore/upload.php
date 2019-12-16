<!DOCTYPE html>
<html lang="en">
<!-- Requests -->
<?php
$file = $_FILES['saft_file'];
$xml_file_content = file_get_contents($_FILES['saft_file']['tmp_name']);
$file_content = simplexml_load_string($xml_file_content);

$start_date =  date($file_content->Header->StartDate);
$end_date = date($file_content->Header->EndDate);

?>
  <script src="./js/requests.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
      $(function(){
        console.log("Document Ready");

		var uploadData = [];
        getPurchaseOrders(function(response) {
          var counter = 0;
          for(var i in response)
          {
			var uploadDate = response[i].createdOn;
			var date = uploadDate.substr(0,10);
			counter++;
			uploadData.push( [date, response[i].payableAmount["amount"]] );
          }
		  inputCosts(uploadData);
        });
      });
	  
	  function inputCosts(uploadData) {
	    var month = "<?php echo $end_date ?>";
	    jQuery.ajax({
			type: "POST",
			url: 'inputCostsByMonth.php',
			dataType: 'text',
			data: {data : uploadData, monthData : month},
			success: function (obj, textstatus) {
				window.location.href = "index.php";
				
		   }
	    });
	  }
  </script>
<?php
if(isset($_POST["submit"])) {

	include_once('DBConnection.php');
	include_once('queries.php');
	
	$connection = new Database();
	$connection->connectDB();
	
	$total_price = date($file_content->SourceDocuments->SalesInvoices->TotalCredit);
	$query = Queries::insertSaftFile($start_date, $end_date, $total_price);
	$saft_id = $connection->updateDB($query);

    foreach($file_content->SourceDocuments->SalesInvoices->Invoice as $invoice) {
		$customerId = substr($invoice->CustomerID, 0, -2);
		$invoiceNo = $invoice->InvoiceNo;
		
		foreach($invoice->Line as $line) {
			$productCode = $line->ProductCode;
			$quantity = $line->Quantity;
			
			$query = Queries::insertInvoice($saft_id, $customerId, $productCode, $invoiceNo, $quantity);
			$connection->updateDB($query);
		}
    }
}