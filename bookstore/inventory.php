<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bookstore inventory</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Requests -->
<script src="./js/requests.js"></script>
<script>
	$(function(){

    //Get random color
    function getRandomColor() {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++ ) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

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

    //Products Table and PieChart
	  getMaterialItems(function(response) {
      var products = [];
      for(var i in response)
      {       
        var product = new Object();
        //Get Name
        product["name"] = response[i]["itemKey"];
        for(var j in response[i]["materialsItemWarehouses"])
        {
          //Get Quantity
          if(!("quantity" in product))
            product["quantity"] = 0;
          product["quantity"] += response[i]["materialsItemWarehouses"][j]["stockBalance"];

          //Get Total Value
          if(!("inventoryBalance" in product))
            product["inventoryBalance"] = 0;
          product["inventoryBalance"] += response[i]["materialsItemWarehouses"][j].inventoryBalance["amount"];
        }

        //Add to Table
        $('#table').append('<tr><td>' + product["name"] + '</td><td>' + product["quantity"] + '</td><td>' + product["inventoryBalance"] + '€' + '</td></tr>');

        products.push(product);
      }

      //Sort quantity
      products.sort(function(a, b){
        if(a["quantity"] < b["quantity"])
          return 1;
        return -1
      })

      //Extract data for pie chart
      var labels = [];
      var data = [];
      var colors = [];
      for (let i = 0; i < products.length; i++) {
        labels.push(products[i]["name"]);
        data.push(products[i]["quantity"]);
        colors.push(getRandomColor());
      }

      //Add to pie chart
      var ctx = document.getElementById("myPieChart");
      var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: labels,
          datasets: [{
            data: data,
            backgroundColor: colors,
          }],
        },
        options: {
          maintainAspectRatio: false,
          tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
          },
          legend: {
            display: false
          },
          cutoutPercentage: 80,
        },
      });

    });
    
    //Warehouses Value
    getMaterialItems(function(response) {
      var warehouses = new Object();
      for(var i in response)
      {       
        for(var j in response[i]["materialsItemWarehouses"])
        {
          if(!(response[i]["materialsItemWarehouses"][j]["warehouse"] in warehouses))
            warehouses[response[i]["materialsItemWarehouses"][j]["warehouse"]] = 0;
            
            warehouses[response[i]["materialsItemWarehouses"][j]["warehouse"]] += response[i]["materialsItemWarehouses"][j]["inventoryBalance"]["amount"];
        }
      }

      //Extract data for bar chart
      var labels = [];
      var value = [];
      for(warehouse in warehouses)
      {
        labels.push(warehouse);
        value.push(warehouses[warehouse]);
      }

      var ctx = document.getElementById("myBarChart");
      var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: labels,
          datasets: [{
            label: "Value",
            backgroundColor: "#4e73df",
            hoverBackgroundColor: "#2e59d9",
            borderColor: "#4e73df",
            data: value,
          }],
        },
        options: {
          maintainAspectRatio: false,
          layout: {
            padding: {
              left: 10,
              right: 25,
              top: 25,
              bottom: 0
            }
          },
          scales: {
            xAxes: [{
              time: {
                unit: 'warehouse'
              },
              gridLines: {
                display: false,
                drawBorder: false
              },
              ticks: {
                maxTicksLimit: 6
              },
              maxBarThickness: 200,
            }],
            yAxes: [{
              ticks: {
                min: 0,
                max: Math.max(...value),
                maxTicksLimit: 5,
                padding: 10,
              },
              gridLines: {
                color: "rgb(234, 236, 244)",
                zeroLineColor: "rgb(234, 236, 244)",
                drawBorder: false,
                borderDash: [2],
                zeroLineBorderDash: [2]
              }
            }],
          },
          legend: {
            display: false
          }
        }
      });

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
            <h1 class="h1 mb-1 mt-3 text-gray-800">Inventory</h1>
          </div>


		  <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Total inventory</h1>
          </div>
          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Items in inventory</div>
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
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Value of inventory</div>
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

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
			<div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Warehouse Value</h6>
              </div>
              <div class="card-body">
                <div class="chart-bar">
                <canvas id="myBarChart"></canvas>
                </div>
                <hr>
                </div>
            </div>
			</div>

            <!-- Pie Chart -->
            <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Product Quantity Share</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

          </div>

		  <div>
			<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">List of products</h6>
                </div>
				<div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Value</th>
                    </tr>
                  </thead>
				  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Value</th>
                    </tr>
                  </tfoot>
                  <tbody id="table">
                  </tbody>
                </table>
				</div>
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
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
