<?php
    require_once('../configs/dbhelp.php');
    $id = '';
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = 'SELECT  user.name as sName, maSV, maMH, subject.name, pointCC, pointKT, pointExam from registersubject INNER JOIN user on user.id = registersubject.Userid inner join subjectsemester on subjectsemester.id = registersubject.SubjectSemesterid 
        inner join semester on semester.id = subjectsemester.Semesterid INNER JOIN subject ON subject.id = subjectsemester.Subjectid where registersubject.id = ' . $id;
        $List = executeResult($sql);
        if ($List != null && count($List) > 0) {
            $std        = $List[0];
            $s_maSV = $std['maSV'];
            $s_sName = $std['sName'];
            $s_maMH  = $std['maMH'];
            $s_name = $std['name'];
            $s_pointCC = $std['pointCC'];
            $s_pointKT = $std['pointKT'];
            $s_pointExam = $std['pointExam'];
            echo '<div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Chỉnh sửa điểm sinh viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <label for="basic-url">Mã sinh viên</label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="maSV" value="'.$s_maSV.'" disabled>
                        </div>
                        <label for="basic-url">Tên sinh viên</label>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="sName" value="'.$s_sName.'" disabled>
                        </div>
                        <label for="basic-url">Mã môn học</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="maMH" value="'.$s_maMH.'" disabled>
                        </div>
                        <label for="basic-url">Tên môn học</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="name" value="'.$s_name.'" disabled>
                        </div>
                        <label for="basic-url">Điểm chuyên cần</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="pointCC" value="'.$s_pointCC.'">
                        </div>
                        <label for="basic-url">Điểm kiểm tra</label>
                        <input type="number" name="id" value="'.$id.'" style="display: none;">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="pointKT" value="'.$s_pointKT.'">
                        </div>
                        <label for="basic-url">Điểm thi</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="pointExam" value="'.$s_pointExam.'">
                        </div>        
                        <button class="btn btn-primary">Lưu thay đổi</button>
                    </form>
                </div>';
        } else {
            $id = '';
        }
    }
    
?>