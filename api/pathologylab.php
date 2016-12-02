<?php

//api for pathologylabs list

include '../admin/config.php';

//$conn = mysqli_connect('localhost:8889', 'root', 'root', 'myhospital');


if ($_GET['id'])
{
	$id = $_GET['id'];
	$sql = "SELECT * FROM pathologylabs where id = $id";
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

$sql = "SELECT * FROM pathologylabs";

$result = mysqli_query($conn, $sql);

$json_array = array();

while($row = mysqli_fetch_assoc($result))
{
	$json_array[] = $row;

}

//print_r($json_array);

echo json_encode($json_array);

}
?>