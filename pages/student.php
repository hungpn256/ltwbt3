<?php
include_once("../controllers/requireLogin.php");
require_once('../configs/dbhelp.php');
$s_maSV = $s_name = $s_gender = $s_email = $s_phone = $s_classID = '';

if (!empty($_POST)) {
    $s_id = '';

    if (isset($_POST['maSV'])) {
        $s_maSV = $_POST['maSV'];
    }

    if (isset($_POST['name'])) {
        $s_name = $_POST['name'];
    }

    if (isset($_POST['gender'])) {
        $s_gender = $_POST['gender'];
    }

    if (isset($_POST['email'])) {
        $s_email = $_POST['email'];
    }

    if (isset($_POST['phone'])) {
        $s_phone = $_POST['phone'];
    }

    if (isset($_POST['classID'])) {
        $s_classID = $_POST['classID'];
    }

    if (isset($_POST['id'])) {
        $s_id = $_POST['id'];
    }
    $s_maSV = str_replace('\'', '\\\'', $s_maSV);
    $s_name = str_replace('\'', '\\\'', $s_name);
    $s_gender = str_replace('\'', '\\\'', $s_gender);
    $s_email = str_replace('\'', '\\\'', $s_email);
    $s_phone = str_replace('\'', '\\\'', $s_phone);
    $s_classID = str_replace('\'', '\\\'', $s_classID);
    $s_id = str_replace('\'', '\\\'', $s_id);

    if ($s_id != '') {
        //update
        $sql = "update user set maSV = '$s_maSV', name = '$s_name', gender = '$s_gender', email = '$s_email', phone = '$s_phone', classID = '$s_classID' where id = " . $s_id;
    } else {
        //insert
        $sql = "insert into user(maSV, name, gender, email, phone, classID) value ('$s_maSV', '$s_name', '$s_gender','$s_email','$s_phone','$s_classID')";
    }
    execute($sql);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quản lý học viện</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../components/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../components/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body id="page-top">

    <div id="wrapper">
        <?php
        include_once("sidebar.php");
        ?>

        <div id="content-wrapper" class="d-flex flex-column" style="height:100vh; overflow-y:scroll">
            <div id="content">
                <div>
                    <?php include_once("topbar.php"); ?>
                </div>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="h3 mb-0 text-gray-800">BẢNG QUẢN LÝ SINH VIÊN</h3>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div id="table" class="table-student">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <form class="form-inline" method="get">
                                            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Tìm kiếm theo tên" name="s">
                                            <i class="fas fa-search" aria-hidden="true" type="submit"></i>
                                        </form>
                                        <span class="table-add float-right mb-3 mr-2 ml-4">
                                            <a href="#!" class="text-success">
                                                <button type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#basicExampleModal">
                                                    <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </span>
                                    </div>

                                    <table class="table table-bordered table-responsive-md table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th class="text-center">STT</th>
                                                <th class="text-center">Mã sinh viên</th>
                                                <th class="text-center">Họ và tên</th>
                                                <th class="text-center">Giới tính</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Số điện thoại</th>
                                                <th class="text-center">Lớp</th>
                                                <th class="text-center">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_GET['s']) && $_GET['s'] != '') {
                                                $sql = 'select id,maSV,name,gender,email,phone,classID from user where name like "%' . $_GET['s'] . '%"';
                                            } else {
                                                $sql = 'select id,maSV,name,gender,email,phone,classID from user';
                                            }
                                            $studentList = executeResult($sql);
                                            $index = 1;
                                            ?>

                                            <?php foreach ($studentList as $std) : ?>
                                                <tr>
                                                    <td><?= ($index++) ?></td>
                                                    <td><?= $std['maSV'] ?></td>
                                                    <td><?= $std['name'] ?></td>
                                                    <td><?= $std['gender'] ?></td>
                                                    <td><?= $std['email'] ?></td>
                                                    <td><?= $std['phone'] ?></td>
                                                    <td><?= $std['classID'] ?></td>
                                                    <td>
                                                        <span class="table-remove">
                                                            <button data-toggle="modal" data-target="#basicExampleModal2" class="btn btn-primary btn-rounded btn-sm my-0" onclick="editStudent(<?= $std['id'] ?>)">
                                                                Edit
                                                            </button>
                                                            <button type="button" class="btn btn-danger btn-rounded btn-sm my-0" name="remove" onclick="deleteStudent(<?= $std['id'] ?>)">
                                                                Remove
                                                            </button>
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm sinh viên</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="">
                                            <label for="basic-url">Mã sinh viên</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="maSV" value="<?= $s_maSV ?>">
                                            </div>
                                            <label for="basic-url">Họ và tên</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="name" value="<?= $s_name ?>">
                                            </div>
                                            <label for="basic-url">Giới tính</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="gender" value="<?= $s_gender ?>">
                                            </div>
                                            <label for="basic-url">Email</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="email" value="<?= $s_email ?>">
                                            </div>
                                            <label for="basic-url">Số điện thoại</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="phone" value="<?= $s_phone ?>">
                                            </div>
                                            <label for="basic-url">Lớp</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="classID" value="<?= $s_classID ?>">
                                            </div>
                                            <button class="btn btn-primary">Lưu</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Editable table -->
                        <div class="modal fade show" id="basicExampleModal2" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" id="modal-content">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function deleteStudent(id) {
                option = confirm('Bạn có muốn xoá sinh viên này không')
                if (!option) {
                    return;
                }

                console.log(id)
                $.post('../controllers/delete_student.php', {
                    'id': id
                }, function(data) {
                    alert(data)
                    location.reload()
                })
            }

            function editStudent(id) {
                $.ajax({
                    url: '../controllers/edit_student.php',
                    data: {
                        'id': id
                    },
                    type: 'POST',
                    success: function(result) {
                        $('#modal-content').html(result)
                    }
                })
            }
        </script>
    </div>
    <?php include_once("logout.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../components/vendor/jquery/jquery.min.js"></script>
    <script src="../components/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../components/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../components/js/sb-admin-2.min.js"></script>
    <script src="../components/vendor/chart.js/Chart.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="../components/js/demo/chart-pie-demo.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>