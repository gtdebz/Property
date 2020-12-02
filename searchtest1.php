



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Title of your search engine</title>
</head>
<body>
<form action='searchtest1.php' method='GET'>
<center>
<h1>My Search Engine</h1>
<input type='text' size='90' name='search'></br></br>
<input type='submit' name='submit' value='Search source code' ></br></br></br>
</center>
</form>



<?php
 $x='';
 $construct='';
$button = $_GET ['submit'];
$search = $_GET ['search']; 
 
if(!$button)
echo "you didn't submit a keyword";
else
{
if(strlen($search)<=1)
echo "Search term too short";
else{
echo "You searched for <b>$search</b> <hr size='1'></br>";
$con=mysqli_connect("localhost","root","") or die(mysqli_error($con));
mysqli_select_db($con,"property");
 
$search_exploded = explode (" ", $search);
 
foreach($search_exploded as $search_each)
{
$x++;
if($x==1)
$construct .="keywords LIKE '%$search_each%'";
else
$construct .="AND keywords LIKE '%$search_each%'";
 
}
 
$construct ="SELECT * FROM purpose WHERE $construct";
$run = mysqli_query($con,$construct);
 
$foundnum = mysqli_num_rows($run);
 
if ($foundnum==0)
echo "Sorry, there are no matching result for <b>$search</b>.</br></br>1. 
Try more general words. for example: If you want to search 'how to create a website'
then use general keyword like 'create' 'website'</br>2. Try different words with similar
 meaning</br>3. Please check your spelling";
else
{
echo "$foundnum results found !<p>";
 
while($runrows = mysqli_fetch_assoc($run))
{
$city_name = $runrows ['city_name'];
$purpose = $runrows ['purpose'];
$rooms = $runrows ['rooms'];
 
echo "
<a href='$url'><b>$city_name</b></a><br>
$purpose<br>
<a href='$url'>$rooms</a><p>
";
 
}
}
 
}
}
 
?>


</body>
</html>