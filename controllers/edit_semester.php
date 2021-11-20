<?php
    require_once('../configs/dbhelp.php');
    $id = '';
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = 'select * from semester where id = ' . $id;
        $semesterList = executeResult($sql);
        if ($semesterList != null && count($semesterList) > 0) {
            $std        = $semesterList[0];
            $s_type = $std['type'];
            $s_startYear = $std['startYear'];
            $s_endYear = $std['endYear'];
            echo '<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel2">Chỉnh sửa thông tin kì học</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form method="post">
        <label for="basic-url">Loại kì học</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="type" value="'.$s_type.'">
        </div>
        <label for="basic-url">Họ và tên</label>
        <input type="number" name="id" value="'.$id.'" style="display: none;">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="startYear" value="'.$s_startYear.'">
        </div>
        <label for="basic-url">Giới tính</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="endYear" value="'.$s_endYear.'">
        </div>
        <button class="btn btn-primary">Lưu thay đổi</button>
    </form>
</div>';
        } else {
            $id = '';
        }
    }
    
?>