<?php
    require_once('../configs/dbhelp.php');
    $id = '';
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = 'select * from subjectsemester where id = ' . $id;
        $list = executeResult($sql);

        
        if ($list != null && count($list) > 0) {
            $std        = $list[0];
            $s_room = $std['room'];
            $s_numberOfSlot = $std['numberOfSlot'];
            $s_totalTime = $std['totalTime'];
            $s_roomExam = $std['roomExam'];
            $s_examAt = $std['examAt'];

            echo '<div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Chỉnh sửa thông tin Kỳ học - Môn học</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        
                        <input type="number" name="id" value="'.$id.'" style="display: none;">
                        <label for="basic-url">Phòng</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="room" value="'.$s_room.'">
                        </div>
                        <label for="basic-url">Số học sinh</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="numberOfSlot" value="'.$s_numberOfSlot.'">
                        </div>
                        <label for="basic-url">Thời gian học</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="totalTime" value="'.$s_totalTime.'">
                        </div>
                        <label for="basic-url">Phòng thi</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="roomExam" value="'.$s_roomExam.'">
                        </div>
                        <label for="basic-url">Ngày thi</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="examAt" value="'.$s_examAt.'">
                        </div>
                        <button class="btn btn-primary">Lưu thay đổi</button>
                    </form>
                </div>';
        } else {
            $id = '';
        }
    }
