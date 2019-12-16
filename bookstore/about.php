<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>About the bookstore</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
            <h1 class="h1 mb-0 text-gray-800">About the bookstore</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Project overview</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body align-text-center">
                 The goal of this project is to develop an web application that shows the most importantinformation extracted from our Primavera database in order to improve the management ofthe company.The premise of our company is a bookstore based on a single location.  The bookstore sellsa variety of books and also other products, like posters and school supplies.All of the books are purchased in bulk from the suppliers based on their price estimation.When we receive the books, we calculate our own expenses and increase the prices by a smallamount and the sell them to either other companies or to ordinary customers.  If companiesdecide to buy books from us they have a smaller price based on the fact that they are buyingin bulk, compared to the regular price we sell them to our ordinary customers.The application is expected to compare the present company information with the previousmonths in the forms of graphs and data charts.First of all, we need to have the a proper way of extracting the data from the Primaveradatabase.  For that purpose, we are using two ways, first with the extraction of the SAF-Tfiles directly from the database, and the other by making API calls to the database to get theremaining data that SAF-T file does not have.Because the specifications of the web application demand that we have a comparison incompany results from the past times, we also need to develop our own database, a simpler onethat will have every product and customer from the Primavera database so we can extractvaluable informations out of it.This information will be presented to the user in a user-friendly interface, using graphicscharts, among other relevant information shown to the user by the application such as generalstatus  of  the  company,  taxes  payed  to  taxes  authority’s,  Financials  of  the  company,  Noofsales and purchases.
                </div>
              </div>
            </div>


        </div>
		
		 <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tools & technologies</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body align-text-center">
				To accomplish the project we are using a variety of technologies regarding the frontend andbackend development, testing of the created APIs and many more.The majority of the backend of the project is done in PHP and it is also used for parsing the SAF-T file extracted from thePrimavera database and writing it in our database.  Based on the data in the database andthe data parsed with the new SAF-T files, we organise the data in objects and then forwardit to the frontend part of the application.Frontend part of the application is developed using NodeJS, JavaScript as well as HTML 5and CSS 3 programming languages.  NodeJS is used for making the API calls to the Primaveradatabase to extract all the remaining data we need that we can not originally get from theSAF-T files.  JavaScript is our foundation for the graphs and charts we want to use to visualisethe data.  All the data needed for the graphs is received through backend PHP database callsand then structured to be visualised using JavaScript.  HTML 5 and CSS 3 are the industrystandards for making the static website that will be used as a template for us to fill it withthe JavaScript graphs.
                </div>
              </div>
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
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
