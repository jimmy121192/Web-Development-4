<?php

include 'Customer.class.php';
include 'Order.class.php';


function readCustomers($filename) {
    // read the file into memory; if there is an error then stop processing
    $arr = file($filename) or die('ERROR: Cannot find file');

    // our data is comma-delimited
    $delimiter = ',';

    // loop through each line of the file
    foreach ($arr as $line) {  
        // returns an array of strings where each element in the array
        // corresponds to each substring between the delimiters       
        $aCustomer = SOME_CODE;
  
        // add customer to array of customers
        $customers[SOME_GETTER] = $aCustomer;
   }
   return $customers;
}


function readOrders($customer, $filename) {


   $arr = file($filename) or die('ERROR: Cannot find file');

   // our data is comma-delimited
   $delimiter = ',';

   // loop through each line of the file
   foreach ($arr as $line) {         
      
      $anOrder = SOME_CODE;      
      $orders[SOME_GETTER] = $anOrder;    
   }
   
   foreach ($orders as $ord) {
      if ($ord->getCustomerId() == $customer) $filtered[] = $ord;
   }
   
   if (isset($filtered) )
      return $filtered;
   else
      return null;

}
?>