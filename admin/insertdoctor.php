<?php

include 'config.php';

?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$doctor_name        = $_POST['doctor_name'];
	$Address            = $_POST['Address'];
	$contact_no         = $_POST['contact_no'];
	$Specialists        = $_POST[''];
	$list_of_treatments = $_POST['list_of_treatments'];
	$list_of_services   = $_POST['list_of_services'];

	$sql = " INSERT INTO hospital (id, hospitalname, address, contactno, listofdoctors, listoftreatments, listofservices) VALUES (NULL, $hospital_name, $Address, $contact_no, $list_of_doctors, $list_of_treatments, $list_of_services)";

		
	$query = mysqli_query($conn, $sql);
	
	if($query)
	{

			echo "Data Inserted Successfully.";
	}
}






?>