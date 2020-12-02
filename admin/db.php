<?php
$db['db_host'] = "localhost";

$db['db_user'] = "root";

$db['db_pass'] = "";

$db['db_name'] = "property";

foreach($db as $key => $value){
	
	define(strtoupper($key), $value);
	
	}

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$db){
	
	die("Could not connect to database" . mysqli_connect_error($db));
}


?>