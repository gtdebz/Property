<?php

$con=mysqli_connect("localhost", "root", "", "property") or die(mysqli_connect_error());
$output ="";
$id= "";
$type= "";
$bedrooms= "";
$city= "";
$minprice= "";
$maxprice= "";
$purpose= "";





$sql="SELECT * FROM livesearch WHERE type LIKE '%".$_POST['id']."%' ";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
if(mysqli_num_rows($res)>0){
	
	$output .= '<h4 align="center">Search Result</h4>
	$output .= <div class="table-responsive">
	<table class="table table bordered">
	<tr>
	<th>id</th>
	<th>Type</th>
	<th>Bedroom</th>
	<th>City</th>
	<th>Min Price</th>
	<th>Max Price</th>
	<th>Purpose</th>
	</tr>';
	while($row=mysqli_fetch_array($res)){
		$output .= '
		<tr>
		<td>'.$row["$id"].'</td>
		<td>'.$row["$type"].'</td>
		<td>'.$row["$bedrooms"].'</td>
		<td>'.$row["$city"].'</td>
		<td>'.$row["$minprice"].'</td>
		<td>'.$row["$maxprice"].'</td>
		<td>'.$row["$purpose"].'</td>
		</tr>';
	}
	echo $output;
}
	else{
		echo "Not found";
		}
?>
</table>
</div>