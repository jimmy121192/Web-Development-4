<?php
include 'book-utilities.php';
$customers = readCustomers('customers.txt');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html;
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Ella Koo_Lab10</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">

   <!-- Google fonts used in this theme  -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_bookTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme CSS -->
   <link href="bootstrap3_bookTheme/theme.css" rel="stylesheet">


   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_bookTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_bookTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<?php include 'book-header.inc.php'; ?>

<div class="container">
   <div class="row">  <!-- start main content row -->

      <div class="col-md-2">  <!-- start left navigation rail column -->
         <?php include 'book-left-nav.inc.php'; ?>
      </div>  <!-- end left navigation rail -->

      <div class="col-md-10">  <!-- start main content column -->
         <div class="panel panel-danger spaceabove">
           <div class="panel-heading"><h4>My Customers</h4></div>
           <table class="table">
             <tr>
               <th>Name</th>
               <th>Email</th>
               <th>University</th>
               <th>City</th>
             </tr>
             
             <?php
             foreach ($customers as $cust) {
               echo '<tr>';
               echo '<td><a href="chapter09-project03.php?customer=' . $cust['id'] . '">'. $cust['name'] . '</a></td>';
               echo '<td>' . $cust['email'] . '</td>';
               echo '<td>' . $cust['university'] . '</td>';
               echo '<td>' . $cust['city'] . '</td>';
               echo '</tr>    ';
            }
             ?>
           </table>
        </div>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
          if ( isset($_GET['customer']) ) {
            $requestedCustomer = $customers[$_GET['customer']];
            $orders = readOrders( $_GET['customer'], 'orders.txt' );
            if ( is_null($orders) ) {
              echo '<div class="well">No orders for that customer</div>';
            } else {
        ?>
        <div class="panel panel-danger">
          <div class="panel-heading"><h4>Orders for <strong>
            
            <?php echo $requestedCustomer['name']; ?></strong></h4></div>
          
          <table class="table">
            <tr>
              <th></th>
              <th>ISBN</th>
              <th>Title</th>
              <th>Category</th>
            </tr>
            
            <?php foreach ($orders as $ord) {
          echo '<tr>';
          echo '<td><img src="images/book/tinysquare/' . $ord['isbn'] . '.jpg"></td>';
          echo '<td>' . $ord['isbn'] . '</td>';
          echo '<td><a href="chapter09-project03.php?isbn=' . $ord['isbn'] . '">' . $ord['title'] . '</td>';
          echo '<td>' . $ord['category'] . '</td>';
          echo '</tr>';
        } ?>
          </table>
        </div>
        <?php
            }
          }
        } 
        ?>
     </div>
  </div>  <!-- end main content column -->
  </div>  <!-- end main content row -->

   
   
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>
</html>