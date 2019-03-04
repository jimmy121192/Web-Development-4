
<div class="panel panel-default">
	<div class="panel-heading">Search</div>
	<div class="panel-body">
		<form>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="search ..."> <span
					class="input-group-btn">
					<button class="btn btn-warning" type="button">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
	</div>
</div>
<!-- end search panel -->

<?php include 'travel-data.php' ;?>

<div class="panel panel-info">
	<div class="panel-heading">Continents</div>
	<ul class="list-group">               
              <?php
			  sort ( $continents );
			  foreach ( $continents as $conts ) {
				  echo "<li class='list-group-item'><a href='#'> $conts </a></li>";
			  }
			  
			  ?>    
           </ul>
</div>
<!-- end continents panel -->
<div class="panel panel-info">
	<div class="panel-heading">Popular Countries</div>
	<ul class="list-group">
	
	<?php
	$org =  $countries;
	sort ( $countries );
	
	foreach ( $countries as $country ) {
		echo "<li class='list-group-item'><a href='country.php?code=".array_search($country,$org)."'> $country </a></li>";
	}
	
	?>
		
	</ul>
</div>