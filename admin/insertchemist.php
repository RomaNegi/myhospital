<?php

include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	    $Chemistname		= $_POST['Chemistname'];
		$Address            = $_POST['Address'];
		$Timing             = $_POST['timing'];
	
	$sql = "INSERT INTO chemist(id, chemistname, address, timing) VALUES(NULL,'$Chemistname', '$Address', '$Timing')";

		
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