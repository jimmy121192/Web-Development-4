<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chapter 8</title>

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="chapter08-project02.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>';
?>

<?php
include('header.php');
include('art-data.php');

?>


<?php

function outputCartRow($file, $product, $quantity, $price) { 
   
   echo"
   <tr>
   <td>";
   echo "<img class='img-thumbnail' src='images/art/tiny/$file' alt='...'></td>";
   echo "<td>$product</td>";
   echo "<td>$quantity</td>";
   echo "<td>$".number_format("$price",2)."</td>";
   echo "<td>$".number_format($quantity*$price,2)."</td>";
   echo "</tr>";

   $amount1 = $quantity*$price;

}


echo'
<div class="container">

      <div class="page-header">
         <h2>View Cart</h2>
      </div>
         
      <table class="table table-condensed">
         <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
         </tr>';

         outputCartRow($file1, $product1, $quantity1, $price1);
         outputCartRow($file2, $product2, $quantity2, $price2);


   echo'
         <tr class="success strong">
            <td colspan="4" class="moveRight">Subtotal</td>';

            $subtotal = $quantity1*$price1+$quantity2*$price2;
   echo"
            <td >$".number_format($subtotal,2)."</td>";
   echo'
         </tr>
         <tr class="active strong">
            <td colspan="4" class="moveRight">Tax</td>';

         $tax = $subtotal*0.1;
   echo"
          <td >$".number_format($tax,2)."</td>";


         $shipcost;
         if($subtotal >2000){
            $shipcost = 0;
         }
         else{
            $shipcost = 100;
         }
   echo'
         </tr>  
         <tr class="strong">
            <td colspan="4" class="moveRight">Shipping</td>';
   echo"
            <td>$".number_format($shipcost,2)."</td>";


      $grandtotal = $subtotal + $tax + $shipcost;
   echo'      </tr> 
         <tr class="warning strong text-danger">
            <td colspan="4" class="moveRight">Grand Total</td>';
   echo"
            <td>$".$grandtotal."</td>";
   echo'
         </tr>    
         <tr >
            <td colspan="4" class="moveRight"><button type="button" class="btn btn-primary" >Continue Shopping</button></td>
            <td><button type="button" class="btn btn-success" >Checkout</button></td>
         </tr>
      </table>         

</div> ';

?>

<?php
include('footer.php');
?>


<?php
echo '
    <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
    <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
  </body>
</html>';
?>

