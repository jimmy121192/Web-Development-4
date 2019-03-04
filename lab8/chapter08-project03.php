<?php
echo '
<!DOCTYPE html>
<html lang="en">
  <head>

     <!-- Google fonts used in this theme  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet" type="text/css">
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,800,600,700,300" rel="stylesheet" type="text/css">  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Travel Template</title>

    <link href="bootstrap3_travelTheme/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap3_travelTheme/theme.css" rel="stylesheet">  

  </head>

  <body>';

include('header.php');


echo'   
<div class="container"> 
   <div class="row">';
include('left-navigation.php');

function generateLink($url, $label, $class) { 
   
 echo" <a href='$url' class='".$class."'>$label</a>";

}


function outputPostRow($number) { 
  include('travel-data.php');

if($number ==1){
  $thumb = $thumb1;
  $title = $title1;
  $userID = $userID1;
  $userName = $userName1;
  $date = $date1;
  $excerpt = $excerpt1;
}
else if($number ==2){
  $thumb = $thumb2;
  $title = $title2;
  $userID = $userID2;
  $userName = $userName2;
  $date = $date2;
  $excerpt = $excerpt2;
}
else if($number ==3){
  $thumb = $thumb3;
  $title = $title3;
  $userID = $userID3;
  $userName = $userName3;
  $date = $date3;
  $excerpt = $excerpt3;
}



   
  echo "<div class='row'>
               <div class='col-md-2'> 
                  <a href='post.php?id=".$number."' class=''><img src='images/travel/".$thumb."' alt='".$title."' class='img-thumbnail'/></a>
               </div>
               <div class='col-md-10'> 
                  <h2>$title</h2>
                  <div class='details'>
                    Posted by <a href='user.php?id=$userID'>$userName</a>
                    <span class='pull-right'>$date</span>
                  </div>
                  <p class='excerpt'>
                  $excerpt
                  </p>";
                  generateLink('post.php?id='.$number, 'Read more', 'btn btn-primary btn-sm');
                echo "
               </div>
    </div>";

}




      



echo '
      <div class="col-md-9">  <!-- start main content column -->
         <ol class="breadcrumb">
           <li><a href="#">Home</a></li>
           <li><a href="#">Browse</a></li>
           <li class="active">Posts</li>
         </ol>          
      
         <div class="jumbotron" id="postJumbo">
           <h1>Posts</h1>
           <p>Read other travellers posts ... or create your own.</p>
           <p><a class="btn btn-warning btn-lg">Learn more &raquo;</a></p>
         </div>        
      
         <!-- start post summaries -->
         <div class="postlist">
         
           <!-- replace each of these rows with a function call -->
         
           <hr/>';

           outputPostRow(1);
           outputPostRow(2);
           outputPostRow(3);
          echo" </div>";


          function ouputPagination($startNum,$currentNum) { 
   
            echo "<ul class='pagination'>
            <li class='disabled'><a href='#'>&laquo;</a></li>";
            for($i=$startNum; $i<10; $i++){
              echo "<li><a href='#'>$i</a></li>";
              if($i ==$currentNum){
                echo "<li class='active'><a href='#'>$i</a></li>";
              }
            }

           };

           ouputPagination(1,4);
        
           echo"   
           </div>  
        </div>
     </div>   
   " ;    
    ?>     


   
   
<?php
include('footer.php');
?>
   

   <?php
echo '
 <script src="bootstrap3_travelTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_travelTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_travelTheme/assets/js/holder.js"></script>
</body>
</html>';
?>