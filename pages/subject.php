<?php
include_once("../controllers/requireLogin.php");
require_once('../configs/dbhelp.php');
$s_maMH = $s_name = $s_numberOfCreadits = '';

if (!empty($_POST)) {
    $s_id = '';

    if (isset($_POST['maMH'])) {
        $s_maMH = $_POST['maMH'];
    }

    if (isset($_POST['name'])) {
        $s_name = $_POST['name'];
    }

    if (isset($_POST['numberOfCreadits'])) {
        $s_numberOfCreadits = $_POST['numberOfCreadits'];
    } 

    if (isset($_POST['id'])) {
        $s_id = $_POST['id'];
    }
    $s_maMH = str_replace('\'', '\\\'', $s_maMH);
    $s_name = str_replace('\'', '\\\'', $s_name);
    $s_numberOfCreadits = str_replace('\'', '\\\'', $s_numberOfCreadits);
    $s_id = str_replace('\'', '\\\'', $s_id);

    if ($s_id != '') {
        //update
        $sql = "update subject set maMH = '$s_maMH', name = '$s_name', numberOfCreadits = '$s_numberOfCreadits' where id = " . $s_id;
    } else {
        //insert
        $sql = "insert into subject(maMH, name, numberOfCreadits) value ('$s_maMH', '$s_name', '$s_numberOfCreadits')";
    }

    execute($sql);
    header('Location: subject.php');
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
                        <h3 class="h3 mb-0 text-gray-800">BẢNG QUẢN LÝ MÔN HỌC</h3>
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
                                        <span class="table-add float-right mb-3 mr-2 ml-4"><a href="#!" class="text-success">
                                                <button type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#basicExampleModal">
                                                    <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
                                                </button></a></span>
                                    </div>

                                    <table class="table table-bordered table-responsive-md table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th class="text-center">STT</th>
                                                <th class="text-center">Mã môn học</th>
                                                <th class="text-center">Tên môn học</th>
                                                <th class="text-center">Số tín chỉ</th>
                                                <th class="text-center">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_GET['s']) && $_GET['s'] != '') {
                                                $sql = 'select id,maMH,name,numberOfCreadits from subject where name like "%' . $_GET['s'] . '%"';
                                            } else {
                                                $sql = 'select id,maMH,name,numberOfCreadits from subject';
                                            }
                                            $subjectList = executeResult($sql);
                                            $index = 1;
                                            ?>

                                            <?php foreach ($subjectList as $std) : ?>
                                                <form>
                                                    <input value="<?= $std['id'] ?>" type="hidden" name="id">
                                                    <tr>
                                                        <td><?= ($index++) ?></td>
                                                        <td><?= $std['maMH'] ?></td>
                                                        <td><?= $std['name'] ?></td>
                                                        <td><?= $std['numberOfCreadits'] ?></td>
                                                        <td>
                                                            <span class="table-remove">
                                                                <button data-toggle="modal" data-target="#basicExampleModal2" id="edit<?= $std['id'] ?>" class="btn btn-primary btn-rounded btn-sm my-0" name="edit">
                                                                    Edit
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-rounded btn-sm my-0" name="remove" onclick="deleteS(<?= $std['id'] ?>)">
                                                                    Remove
                                                                </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#edit<?= $std['id'] ?>').click(function(e) {
                                                                console.log(<?= $std['id'] ?>)
                                                                e.preventDefault();
                                                                $.ajax({
                                                                    url: '../controllers/edit_subject.php',
                                                                    data: {
                                                                        'id': <?= $std['id'] ?>
                                                                    },
                                                                    type: 'POST',
                                                                    success: function(result) {
                                                                        console.log(result)
                                                                        $('#modal-content').html(result)
                                                                    }
                                                                })
                                                            });
                                                        });
                                                    </script>
                                                </form>
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
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm môn học</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="">
                                            <label for="basic-url">Mã môn học</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="maMH" value="<?= $s_maMH ?>">
                                            </div>
                                            <label for="basic-url">Tên môn học</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="name" value="<?= $s_name ?>">
                                            </div>
                                            <label for="basic-url">Số tín chỉ</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="numberOfCreadits" value="<?= $s_numberOfCreadits ?>">
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
            function deleteS(id) {
                option = confirm('Bạn có muốn xoá môn học này không')
                if (!option) {
                    return;
                }

                console.log(id)
                $.post('delete_subject.php', {
                    'id': id
                }, function(data) {
                    alert(data)
                    location.reload()
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