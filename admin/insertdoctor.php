<?php

include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	echo $doctor_name        = $_POST['doctor_name'];
	echo $Address            = $_POST['Address'];
	echo $contact_no         = $_POST['contact_no'];
	echo $Specialists        = $_POST['specialists'];
	echo $timing             = $_POST['timing'];
	

	$s = "INSERT INTO doctors(id, doctorname, address, contactno, specialists, timing) VALUES(NULL, '$doctor_name', '$Address', '$contact_no', '$Specialists', $timing')";

		
	$query = mysqli_query($conn, $s);
	
	if(!empty($query))
	{

		echo "Data Inserted Successfully.";
	}
	else 
	{
		echo "Data not inserted";
	}
}

?>