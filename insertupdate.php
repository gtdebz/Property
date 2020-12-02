<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
include 'dbcon.php';
	


?>




<?php
$mysqli=new mysqli("localhost:3306","greendig_tboy","jetlog77$","greendig_property");

if($mysqli->connect_error){
	
	printf("could not connect to database %s\n",$mysqli->connect_error);
	exit();
	}
	
	
//if(isset($_POST['submit'])){
	
	$target_dir="uploads/";
	$target_file=$target_dir . basename($_FILES["images"]["name"]);
	$temp_file=$_FILES["images"]["name"];
	move_uploaded_file($_FILES['images']['tmp_name'], $target_file);
	$mysqli='';
	$insert='';
	$insert_id='';
	$query=mysqli_query($con,"update estate set name=$name,charge=$charge,address=$address,access=$access,utility=$utility,floor='$floor';descrip=$descrip,images='$img_name',  where id='$id'")or die(mysqli_error($query));
	//charge,address,access,floor,utility,descrip,images) VALUES('$name','$charge','$address','$access','$floor','$utility','$descrip','$images')";
	//$insert=$mysqli->query($query);
	//$last_id=$mysqli->$insert_id;
	//$c=count($_FILES["images"]["name"]);
	//if($insert){
	//	if ($c < 10){
	//for ($i=0; $i < $c; $i++){
	//	$img_name=$_FILES['img']['name'][$i];
		//move_uploaded_file($_FILES['img']['tmp_name'][$i] , "uploads/" . $img_name);
	  // $query_multi="INSERT INTO details(images,proid) VALUES ('$img_name','$last_id')";
	  // $ins=$mqsqli->query($query_multi);
	//}//else
	//{
		
		//echo "MAX LIMIT EXCEEDED";
	//}
		//}
	//}
//}



		

	
	echo "<script type='text/javascript'>alert('Successfully updated product details!');</script>";
	echo "<script>document.location='insert.php'</script>";  
?>













