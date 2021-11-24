<?php
require_once('../configs/dbhelp.php');
if (!empty($_POST)) {
    $s_id = '';
    $s_userid = '';
    $s_subjectsemesterid = '';

    if (isset($_POST['userid'])) {
        $s_userid = $_POST['userid'];
    }  
    if (isset($_POST['subjectsemesterid'])) {
        $s_subjectsemesterid = $_POST['subjectsemesterid'];
    }

    if (isset($_POST['id'])) {
        $s_id = $_POST['id'];
    }
    $s_userid = str_replace('\'', '\\\'', $s_userid);
    $s_subjectsemesterid = str_replace('\'', '\\\'', $s_subjectsemesterid);
    $s_id = str_replace('\'', '\\\'', $s_id);


    if ($s_id != '') {
        //update
        $sql = "update subjectsemester set room = '$s_room', numberOfSlot = '$s_numberOfSlot', totalTime = '$s_totalTime', roomExam = '$s_roomExam' where id = " . $s_id;
    } else {
        //insert
        $sql = "insert into registersubject( SubjectSemesterid, Userid ) value ( '$s_subjectsemesterid', '$s_userid')";
    }
    execute($sql);
    header("Location: ../pages/kyhocmonhoc.php");
}
?>