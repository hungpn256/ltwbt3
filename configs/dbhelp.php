<?php
require_once ('../configs/config.php');
function execute($sql) {
	$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE) ;
	mysqli_query($conn, $sql) or die( mysqli_error($conn));
	mysqli_close($conn);
}
function executeResult($sql) {
	$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
	$resultset = mysqli_query($conn, $sql) or die( mysqli_error($conn));
	$list      = [];
	while ($row = mysqli_fetch_array($resultset, 1) ) {
		$list[] = $row;
	}
	mysqli_close($conn);

	return $list;
}