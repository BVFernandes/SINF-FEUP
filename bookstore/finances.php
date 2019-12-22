<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bookstore finances</title>

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
    $(function() {
      console.log("Document Ready");
      var allRevenues = false;

      //Number of items
      getMaterialItems(function(response) {
        total = 0;
        for (var i in response) {
          for (var j in response[i]["materialsItemWarehouses"]) {
            total += response[i]["materialsItemWarehouses"][j].stockBalance;
          }
        }
        $('#NumberOfItems').text(total);
      });

      var totalRevenue = 0;
      //Total Revenue
      getInvoices(function(response) {
        var total;
        tax = 0;
        total = 0;
        payment = 0;
        for (var i in response) {
          tax += response[i].taxTotal["amount"];
        }
        getInvoicesExpenses(function(response2) {
          for (var k in response2) {
            payment += response2[k].payableAmount["amount"];
            $('#Expenses').text(total);
          }
          totalRevenue -= tax;
          totalRevenue -= payment;
          if (allRevenues == true)
            $('#TotalRevenue').text(totalRevenue.toFixed(2) + " €");
          else
            allRevenues = true;
        });
      });
      //Value of items
      getMaterialItems(function(response) {
        total = 0;
        for (var i in response) {
          for (var j in response[i]["materialsItemWarehouses"]) {
            total += response[i]["materialsItemWarehouses"][j].inventoryBalance["amount"];
          }
        }
        $('#ValueOfItems').text(total + " €");
      });

      getPurchaseOrders(function(response) {
        total = 0;
        for (var i in response) {
          total += response[i].payableAmount["amount"];

        }
        $('#SupliersDebt').text(total + " €");
      });

      jQuery.ajax({
        type: "POST",
        url: '../getTotalSales.php',
        dataType: 'json',
        data: {},
        success: function(obj, textstatus) {
          totalRevenue += Number(obj);
          if (allRevenues == true)
            $('#TotalRevenue').text(totalRevenue.toFixed(2) + " €");
          else
            allRevenues = true;
          console.log("SALES:" + obj);
        }
      });
    });
  </script>
</head>

<body id="page-top">
  <?php

  include_once('DBConnection.php');
  include_once('queries.php');

  $connection = new Database();
  $connection->connectDB();
  ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include_once('sidebar.php') ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-1 mt-3 text-gray-800">Finances</h1>
          </div>

          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Income</h1>
          </div>


          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total income</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $sql = Queries::getSaftFiles();
                        $result = $connection->selectDB($sql);
                        $total = 0;
                        if ($result->num_rows > 0) {
                          // output data of each row
                          while ($row = $result->fetch_assoc()) {
                            $total += $row["total_price"];
                          }
                        }
                        echo  "€" . $total;

                        ?>
                      </div>
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
            <div class="col-xl">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Income trend</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div id="data" style="display: none;">
                    <?php

                    include_once('income.php');
                    ?>

                  </div>

                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Costs</h1>
          </div>

          <div class="row">

            <!-- Debts -->
            <div class="col-xl-3 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total outcome</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $sql = Queries::getCosts();
                        $result = $connection->selectDB($sql);
                        $total = 0;
                        if ($result->num_rows > 0) {
                          // output data of each row
                          while ($row = $result->fetch_assoc()) {
                            $total += $row["total_price"];
                          }
                        }
                        echo  "€" . $total;

                        ?>
                      </div>
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
            <div class="col-xl">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-danger">Cost trend</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div id="data_cost" style="display: none;">
                    <?php

                    include_once('cost_trend_graph.php');
                    ?>

                  </div>

                  <div class="chart-area">
                    <canvas id="myAreaChart_cost"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Revenue</h1>
          </div>

          <div class="row">

            <!-- Debts -->
            <div class="col-xl-3 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total revenue</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $total = 0;
                        $sql = Queries::getSaftFiles();
                        $result = $connection->selectDB($sql);
                        if ($result->num_rows > 0) {
                          // output data of each row
                          while ($row = $result->fetch_assoc()) {
                            $total += $row["total_price"];
                          }
                        }

                        $sql = Queries::getCosts();
                        $result = $connection->selectDB($sql);
                        if ($result->num_rows > 0) {
                          // output data of each row
                          while ($row = $result->fetch_assoc()) {
                            $total -= $row["total_price"];
                          }
                        }
                        echo  "€" . $total;

                        ?>
                      </div>
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
            <div class="col-xl">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-success">Revenue trend</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div id="data_revenue" style="display: none;">
                    <?php
                    include_once('revenue_graph.php');
                    ?>

                  </div>

                  <div class="chart-area">
                    <canvas id="myAreaChart_revenue"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include_once('footer.php') ?>

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
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>