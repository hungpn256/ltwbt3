<?php
    require_once('../configs/dbhelp.php');
    $id = '';
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = 'select * from subject where id = ' . $id;
        $subjectList = executeResult($sql);
        if ($subjectList != null && count($subjectList) > 0) {
            $std        = $subjectList[0];
            $s_maMH = $std['maMH'];
            $s_name = $std['name'];
            $s_numberOfCreadits = $std['numberOfCreadits'];
            echo '<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel2">Chỉnh sửa thông tin sinh viên</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form method="post">
        <label for="basic-url">Mã môn học</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="maMH" value="'.$s_maMH.'">
        </div>
        <label for="basic-url">Tên môn học</label>
        <input type="number" name="id" value="'.$id.'" style="display: none;">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="name" value="'.$s_name.'">
        </div>
        <label for="basic-url">Số tín chỉ</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="numberOfCreadits" value="'.$s_numberOfCreadits.'">
        </div>        
        <button class="btn btn-primary">Lưu thay đổi</button>
    </form>
</div>';
        } else {
            $id = '';
        }
    }
    
?>