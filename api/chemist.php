<?php

//api for chemist list

include '../admin/config.php';

//$conn = mysqli_connect('localhost:8889', 'root', 'root', 'myhospital');

if ($_GET['id'])
{
	$id = $_GET['id'];
	$sql = "SELECT * FROM chemist where id = $id";
	$result = mysqli_query($conn, $sql);

	$json_array = array();

		while($row = mysqli_fetch_assoc($result))
		{
			$json_array[] = $row;

		}

	echo json_encode($json_array);

}
else
{


	$sql = "SELECT * FROM chemist";

	$result = mysqli_query($conn, $sql);

	$json_array = array();

		while($row = mysqli_fetch_assoc($result))
		{
			$json_array[] = $row;

		}

	echo json_encode($json_array);
}

?>