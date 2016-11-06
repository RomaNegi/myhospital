<?php

include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$Pathologyname      = $_POST['pathologyname'];
	$Address            = $_POST['Address'];
	$Timing             = $_POST['timing'];
	
	$sql = "INSERT INTO pathologylabs(id, pathologyname, address, timing) VALUES(NULL, '$Pathologyname', '$Address', '$Timing')";

		
	$result = mysqli_query($conn, $sql);
	
	if(!empty($result))
	{

		header("location: pathologylabs.php");
	}
	else 
	{
		echo "Data not inserted";
	}
}

?>