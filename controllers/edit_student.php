<?php
    require_once('../configs/dbhelp.php');
    $id = '';
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = 'select * from user where id = ' . $id;
        $studentList = executeResult($sql);
        if ($studentList != null && count($studentList) > 0) {
            $std        = $studentList[0];
            $s_maSV = $std['maSV'];
            $s_name = $std['name'];
            $s_gender = $std['gender'];
            $s_email = $std['email'];
            $s_phone = $std['phone'];
            $s_classID = $std['classID'];
            echo '<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel2">Chỉnh sửa thông tin sinh viên</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form method="post">
        <label for="basic-url">Mã sinh viên</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="maSV" value="'.$s_maSV.'">
        </div>
        <label for="basic-url">Họ và tên</label>
        <input type="number" name="id" value="'.$id.'" style="display: none;">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="name" value="'.$s_name.'">
        </div>
        <label for="basic-url">Giới tính</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="gender" value="'.$s_gender.'">
        </div>
        <label for="basic-url">Email</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="email" value="'.$s_email.'">
        </div>
        <label for="basic-url">Số điện thoại</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="phone" value="'.$s_phone.'">
        </div>
        <label for="basic-url">Lớp</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="classID" value="'.$s_classID.'">
        </div>
        <button class="btn btn-primary">Lưu thay đổi</button>
    </form>
</div>';
        } else {
            $id = '';
        }
    }
    
?>