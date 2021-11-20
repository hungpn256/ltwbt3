<?php
require_once ('../configs/config.php');

/**
 * insert, update, delete -> su dung function
 */
function execute($sql) {
	//create connection toi database
	$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE) ;
	//query
	mysqli_query($conn, $sql) or die( mysqli_error($conn));
	//dong connection
	mysqli_close($conn);
}

/**
 * su dung cho lenh select => tra ve ket qua
 */
function executeResult($sql) {
	//create connection toi database
	$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

	//query
	$resultset = mysqli_query($conn, $sql) or die( mysqli_error($conn));
	$list      = [];
	while ($row = mysqli_fetch_array($resultset, 1) ) {
		$list[] = $row;
	}

	//dong connection
	mysqli_close($conn);

	return $list;
}