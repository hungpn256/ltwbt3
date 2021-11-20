<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('../configs/dbhelp.php');
	$sql = 'delete from user where id = '.$id;
	execute($sql);

	echo 'Xoá sinh viên thành công';
}