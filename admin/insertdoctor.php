<?php

include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$doctor_name        = $_POST['doctor_name'];
	$Address            = $_POST['Address'];
	$contact_no         = $_POST['contact_no'];
	$Specialists        = $_POST['specialists'];
	$timing             = $_POST['timing'];
	

	$s = "INSERT INTO doctors(id, doctorname, address, contactno, specialists, timing) VALUES(NULL, '$doctor_name', '$Address', '$contact_no', '$Specialists', '$timing')";

		
	$query = mysqli_query($conn, $s);
	
	if(!empty($query))
	{

		header("location: doctor.php" );
	}
	else 
	{
		echo "Data not inserted";
	}
}

?>