
	
	
<style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');

h4{float:left; width:100%; color:#fff; margin-bottom:40px; font-size:24px; letter-spacing:7px; position:relartive; z-index:3; margin-top:30px}  /*created*/
h4 span{font-family: 'Verdana', serif; display:block; font-size:24px; text-transform:none; margin-bottom:20px; margin-top:30px; font-weight:700}/*Pro*/
h1 a{color:#fff; font-weight:bold;}

body{background: #fff;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #fff, #fff);  /* Chrome 10-25, Safari 5.1-6 */
/*background: linear-gradient(to bottom, #514A9D, #fff);  W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom, #033, #fff);
}
.head{float:left;width:100%;}
.search-box{width:90%; margin:0 auto 40px; box-shadow:10px 13px 0 rgba(0,0,0,0.2);}
.listing-block{background:#fff; height:500px; padding-top:20px; overflow-y:scroll;}
.slimScrollDiv{width:41%!important;}
.media {background:#fff; position:relative; margin-bottom:15px;}
.media img{width:200px;margin:0; height:136px;}
.media-body{border:1px solid #bcbcbc; border-left:0; height:136px;}
.media .price{float:left; width:100%; font-size:30px;font-weight:600; color:#4765AB;}
.media .price small{display:block; font-size:17px; color:#232323;}
.media .stats{float:left; width:100%; margin-top:10px;}
.media .stats span{float:left; margin-right:10px; font-size:15px;}
.media .stats span i{margin-right:7px; color:#4765AB;}
.media .address{float:left; width:50%;font-size:14px; margin-top:5px; color:#888;}
.media .fav-box{position:absolute; right:10px; font-size:20px; top:4px; color:#E74C3C;}

.map-box{background-color:#A3CCFF;}

</style>



<section class="head">
    <div class="container">
        <h4 class="text-center">PROPERTY DETAILS</h4>
    </div>
</section>
<div class="clearfix"></div>
<section class="search-box">
    
	<div class="row">
<div class="col-md-7 map-box mx-0 px-0">
       
<?php
$con=mysqli_connect("localhost","root","","property") or die(mysqli_error());

if (isset($_GET['posts'])){
	
	 $id=$_GET['posts'];

	 $query= "SELECT * FROM estate where id='$id'";
	
   $result1 = mysqli_query($con, $query);      //get result of $query 


 while($row = mysqli_fetch_array($result1))          // display the results through a "while" code function in table row
      
{?>

        
        
   <div class="box-primary">  <!--start box primary-->
   
<div class="col-xs-7" style="margin-left:11.4%;">

<!--<div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>-->




  <div class="col-md-3"> 
         
<img class="card-img-top" style="width:530px; height:400px" src="uploads/<?php echo $row['images']; ?>"></img>
<!--<img src="uploads/ak6.jfif" width="470" height="400"></img>-->
</div></div>
</div>						<!--end box primary-->
        
		    <!--<iframe width="100%" height="495" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>-->
		</div>
        
        
        <div class="row">

<div class="box-primary">

<div class="panel" style="width:500px; margin-left:2%; background:#80FFFF; padding:5px;">
<h5 class="text-center text-default" style="letter-spacing:4px; font-size:22px;">Details</h5>
</div>


<table class="table-responsive-lg table-bordered ml-3" width="494" height="300" cellpadding="3" cellspacing="6" >



  <tr>
    <th>&nbsp; Address</th>
    <td><?php echo $row['address']; ?></td>
  </tr>
  <tr>
    <th>&nbsp; Access</th>
    <td><?php echo $row['access']; ?></td>
  </tr>
  <tr>
    <th>&nbsp; Floor</th>
    <td><?php echo $row['floor']; ?></td>
  </tr>
  <tr>
    <th>&nbsp; Utility</th>
    <td><?php echo $row['utility']; ?></td>
  </tr>
  <tr>
    <th>&nbsp; Description</th>
    <td><?php echo $row['descrip']; ?></td>
  </tr>
  <tr>
    <th>&nbsp; Rooms</th>
    <td><?php echo $row['rooms'];?></td>
  </tr>
  
  
<?php  //end while 
   }
?>

<?php   //end if

}
?>
 
  
</table>
</div>  <!--end box primary div-->

</div>	<!--end row div-->
        
     
        
	</div>

</section>



















<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script>
    $(function(){
    $('.listing-block').slimScroll({
        height: '500px'
    });
});
</script>

</div>

<?php include 'footer.php';
?>