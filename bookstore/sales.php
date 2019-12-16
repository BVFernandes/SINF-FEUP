<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bookstore sales</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

 <!-- Custom styles for this template-->
 <link href="css/sb-admin-2.min.css" rel="stylesheet">

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Requests -->
<script src="./js/requests.js"></script>
<script>
	$(function(){
	  console.log("Document Ready");

	  //Number of items
	  getMaterialItems(function(response) {
		total = 0;
		for(var i in response)
		{
		  for(var j in response[i]["materialsItemWarehouses"])
		  {
			total += response[i]["materialsItemWarehouses"][j].stockBalance;
		  }
		}
		$('#NumberOfItems').text(total);
	  });

	  //Value of items
	  getMaterialItems(function(response) {
		total = 0;
		for(var i in response)
		{
		  for(var j in response[i]["materialsItemWarehouses"])
		  {
			total += response[i]["materialsItemWarehouses"][j].inventoryBalance["amount"];
		  }
		}
		$('#ValueOfItems').text(total + " €");
	  });

	  //Gross Sales
	  getInvoices(function(response) {
		total = 0;
		for(var i in response)
		{
		  total += response[i].grossValue["amount"];
		  
		}
		$('#GrossSales').text(total + " €");
	  });

	  //Top Sales
	  getInvoices(function(response) {
		  //Get All Purchases
		var array = new Object();
		for(var i in response)
		{
			for(var j in response[i]["documentLines"])
			{
				if(!(response[i]["documentLines"][j]["salesItem"] in array))
					array[response[i]["documentLines"][j]["salesItem"]] = 0;
				array[response[i]["documentLines"][j]["salesItem"]] += parseInt(response[i]["documentLines"][j]["quantity"]);
			}
		}
		
		//Sort by quantity
		var items = Object.keys(array).map(function(key) {
			return [key, array[key]];
		});
		items.sort(function(first, second) {
			return second[1] - first[1];
		});

		//Top 5
		var top = items.slice(0, 5);

		//Display
		var count = 0;
		for (var key in top)
		{
			var partsString = String(top[key]).split(',');
			$('#TopItem' + count).text(partsString[1] + " - " + partsString[0]);
			count++;
		}
	  });

	});
</script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

	<?php include_once('sidebar.php')?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-1 mt-3 text-gray-800">Sales</h1>
          </div>
		  
          <!-- Content Row -->
		  
          <div class="row">
			<!-- Debts -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Gross Sales</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="GrossSales"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-euro-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Content Row -->
          <div class="row">
				<!-- Pie Chart -->
			<div class="col-lg-9">
			  <div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
				</div>
				<!-- Card Body -->
					<div class="card-body">
				  
					<div id="dataValues" style="display: none;">
					<?php

						include_once('topProductsPieChart.php');
					?>
					</div>
					<div id="dataLabels" style="display: none;">
					<?php

						include_once('listOfProducts.php');
					?>
					</div>
				<div class="chart-pie pt-4 pb-2">
					<canvas id="myPieChart"></canvas>
				  </div>
				  
				</div>
			  </div>
			</div>
			
			<div class="col-sm-3">
				<!-- Earnings (Monthly) Card Example -->
				<div class="mb-4" style="height:44%">
				  <div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
					  <div class="row no-gutters align-items-center">
						<div class="col mr-2">
						  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Number of items</div>
						  <div class="h5 mb-0 font-weight-bold text-gray-800" id="NumberOfItems"></div>
						</div>
						<div class="col-auto">
						  <i class="fas fa-boxes fa-2x text-gray-300"></i>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				
				<!-- Earnings (Monthly) Card Example -->
				<div style="height:44%">
				  <div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
					  <div class="row no-gutters align-items-center">
						<div class="col mr-2">
						  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Values of items</div>
						  <div class="h5 mb-0 font-weight-bold text-gray-800" id="ValueOfItems"></div>
						</div>
						<div class="col-auto">
						  <i class="fas fa-euro-sign fa-2x text-gray-300"></i>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			</div>
			
          </div>
		  <!-- To products card -->
		  <div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary text-center">Top products</h6>
			</div>
			<div class="card-body">
			  <?php
				include_once('topProducts.php');
				foreach($top5Products as $k => $v){
					echo "<h6 class='font-weight-bold'>" . $k . "<span class='float-right'>" . $v . "</span></h6>";
				}
				?>
			</div>
		  </div>
		  <div class="card shadow mb-4">
			<div class="card-header py-3">
			 <h6 class="m-0 font-weight-bold text-primary text-center">Top customers</h6>
			</div>
			<div class="card-body">
				<?php
				include_once('topCustomers.php');
				foreach($topCustomers as $k => $v){
					echo "<h6 class='font-weight-bold'>" . $k . "<span class='float-right'>" . $v . "</span></h6>";
				}
				?>
			</div>
		  </div>

			  <!-- To products card -->

	    </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include_once('footer.php')?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/graphs/chart_pie_sales.js"></script>

</body>

</html>
