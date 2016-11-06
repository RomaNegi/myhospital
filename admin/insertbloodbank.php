<?php

include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	 $Bloodbank         =  $_POST['Bloodbank'];
	$Address            = $_POST['Address'];
 	$Timing             = $_POST['timing'];
	
	$sql = "INSERT INTO bloodbank(id, bloodbankname, address, timing) VALUES(NULL, '$Bloodbank', '$Address', '$Timing')";

		
	$result = mysqli_query($conn, $sql);
	
	if(!empty($result))
	{

		header("location: bloodbank.php");
	}
	else 
	{
		echo "Data not inserted";
	}
}

?>