<?php

//api for bloodbank list

$conn = mysqli_connect('localhost:8889', 'root', 'root', 'myhospital');


$sql = "SELECT * FROM bloodbank";

$result = mysqli_query($conn, $sql);

$json_array = array();

while($row = mysqli_fetch_assoc($result))
{
	$json_array[] = $row;

}

//print_r($json_array);

echo json_encode($json_array);
?>