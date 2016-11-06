<?php

include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	    
	echo "<br>".$Address            = $_POST['Address'];
	echo "<br>".$Timing             = $_POST['timing'];
	
	$sql = "INSERT INTO bloodbank(id, address, timing) VALUES(NULL, '$Address', '$Timing')";

		
	$result = mysqli_query($conn, $sql);
	
	if(!empty($result))
	{

		echo "Data Inserted Successfully.";
	}
	else 
	{
		echo "Data not inserted";
	}
}

?>