<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->







<style>

@import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";

.container { margin-top: 20px; }
.mb20 { margin-bottom: 20px; } 

hgroup { padding-left: 15px; border-bottom: 1px solid #ccc; }
hgroup h1 { font: 500 normal 1.625em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin-top: 0; line-height: 1.15; }
hgroup h2.lead { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin: 0; padding-bottom: 10px; }

.search-result .thumbnail { border-radius: 0 !important; }
.search-result:first-child { margin-top: 0 !important; }
.search-result { margin-top: 20px; }
.search-result .col-md-2 { border-right: 1px dotted #ccc; min-height: 140px; }
.search-result ul { padding-left: 0 !important; list-style: none;  }
.search-result ul li { font: 400 normal .85em "Roboto",Arial,Verdana,sans-serif;  line-height: 30px; }
.search-result ul li i { padding-right: 5px; }
.search-result .col-md-7 { position: relative; }
.search-result h3 { font: 500 normal 1.375em "Roboto",Arial,Verdana,sans-serif; margin-top: 0 !important; margin-bottom: 10px !important; }
.search-result h3 > a, .search-result i { color: #248dc1 !important; }
.search-result p { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; } 
.search-result span.plus { position: absolute; right: 0; top: 126px; }
.search-result span.plus a { background-color: #248dc1; padding: 5px 5px 3px 5px; }
.search-result span.plus a:hover { background-color: #414141; }
.search-result span.plus a i { color: #fff !important; }
.search-result span.border { display: block; width: 97%; margin: 0 15px; border-bottom: 1px dotted #ccc; }

</style>









<div class="container">

  <?php

$conn=mysqli_connect("localhost","root","","property")or die(mysqli_error($conn));
mysqli_select_db($conn,"property");
 //if ($conn){echo  "<div class='col-lg-12 text-center' style='font-size:20px; color:#fff;'>Very good we're CONNECTED</div>";}
	
//if(isset($_GET['$keywords'])){

	
//define variables
$city_id = '';
$purpose ='';
$city_name ='';
$purpose_id = '';
$rooms = '';
$image = '';
$min_price = '';
$max_price ='';
$construct='';
$submit='';
$search='';
$x='';
$foundnum='';
$keyword='';

 
//$button = $_GET ['submit'];
//$search = $_GET ['search']; 

?>     

<?php 


 
 $queryk= "SELECT * FROM purpose WHERE city_name LIKE '%$city_name%' AND keyword LIKE '%$keyword%' ORDER BY city_id";
 //$queryk= "SELECT * FROM purpose WHERE city_name = 'id'";
 $resk=mysqli_query($conn,$queryk);

	 if($resk){
	 		
	while ($row=mysqli_fetch_assoc($resk)){			
$image=$row['image'];
$city_id = $row ['city_id'];
$city_name = $row ['city_name'];
$purpose = $row ['purpose'];
$rooms = $row ['rooms'];
//$city_name = $row ['city_name'];
$keyword = $row ['keyword'];
$minprice = $row ['minprice'];
$maxprice = $row['maxprice'];
	
	
?>
        
    <hgroup class="mb20">
		<h1><?php echo $purpose; ?></h1>
		<h2 class="lead"><strong class="text-danger"><?php echo $city_id; ?></strong> <?php echo $city_name; ?> <strong class="text-danger"><?php echo $keyword; ?></strong></h2>								
	</hgroup>

    <section class="col-xs-12 col-sm-6 col-md-12">
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img  style="width:600px;height:420px" src="images/<?php echo $row['image']; ?>"></img></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-bed"></i> <span><?php echo $rooms; ?></span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span><?php echo $minprice; ?></span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span><?php echo $maxprice; ?></span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				<h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
		</article>

       <!-- <article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img src="images/prop3.jpg" width:"100" height="100" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>02/13/2014</span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span>8:32 pm</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>Food</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
		</article>

		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img src="images/prop4.jpg" width:"100" height="100" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>01/11/2014</span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span>10:13 am</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>Sport</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix border"></span>
		</article>	-->		
<?php 
	}
?>

<?php 
	}
?>

	</section>
</div>