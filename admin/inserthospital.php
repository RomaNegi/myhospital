<?php

include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$hospital_name      = $_POST['hospital_name'];
	$Address            = $_POST['Address'];
    $contact_no         = $_POST['contact_no'];
	$list_of_doctors    = $_POST['list_of_doctors'];
	$list_of_treatments = $_POST['list_of_treatments'];
	$list_of_services   = $_POST['list_of_services'];

	$sql = "INSERT INTO Hospital(id, hospitalname, address, contactno, listofdoctors, listoftreatments, listofservices) VALUES(NULL, '$hospital_name', '$Address', '$contact_no', '$list_of_doctors', '$list_of_treatments', '$list_of_services')";

		
	$result = mysqli_query($conn, $sql);
	
	if(!empty($result))
	{

		header("location: hospital.php");
	}
	else 
	{
		echo "Data not inserted";
	}
}

?>