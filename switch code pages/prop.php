<?php ob_start() ?>


<?php
		if(isset($_GET['source'])){
			
			$source= $_GET['source'];
			
		}else{$source= '';}
		
		
	switch($source){
			
			
			//case 'add_profile';
			//include "add_profile.php";
			//break;
			
			case 'edit_property';
			include "editpropertynew.php";
			break;
			
			default: 
		include "viewdetails.php";
			break;
			
			
			
		}
			
			
		//}
		
		
		?>
       