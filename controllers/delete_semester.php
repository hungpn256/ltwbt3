<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('../configs/dbhelp.php');
	$sql = 'delete from semester where id = '.$id;
	execute($sql);

	echo 'Xoá kì học thành công';
}