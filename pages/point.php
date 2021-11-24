<?php
include_once("../controllers/requireLogin.php");
require_once('../configs/dbhelp.php');
$s_pointCC = $s_pointKT = $s_pointExam = '';

if (!empty($_POST)) {

    if (isset($_POST['pointCC'])) {
        $s_pointCC = $_POST['pointCC'];
    }

    if (isset($_POST['pointKT'])) {
        $s_pointKT = $_POST['pointKT'];
    }

    if (isset($_POST['pointExam'])) {
        $s_pointExam = $_POST['pointExam'];
    }

    if (isset($_POST['id'])) {
        $s_id = $_POST['id'];
    }
    $s_pointCC = str_replace('\'', '\\\'', $s_pointCC);
    $s_pointKT = str_replace('\'', '\\\'', $s_pointKT);
    $s_pointExam = str_replace('\'', '\\\'', $s_pointExam);
    $s_id = str_replace('\'', '\\\'', $s_id);

    //update
    $sql = "update registersubject set pointCC = '$s_pointCC', pointKT = '$s_pointKT', pointExam = '$s_pointExam' where id = " . $s_id;
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

</head>

<body id="page-top">

    <div id="wrapper">
        <?php
        include_once("sidebar.php");
        ?>

        <div id="content-wrapper" class="d-flex flex-column ">
            <div id="content">
                <div>
                    <?php include_once("topbar.php"); ?>
                </div>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">BẢNG QUẢN LÝ ĐIỂM SINH VIÊN</h1>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                

                                    <form method="post" action="">
                                        <div class="row" style="justify-content: center">
                                            <div class="col-3">
                                                <h3 class=" mb-3 text-gray-800">Nhập học kì xem điểm thi</h3>
                                                <div class="input-group mb-3 ">
                                                    <input type="text" class="form-control" placeholder="1-2019-2020" aria-label="" aria-describedby="button-addon2" />
                                                    <button class="btn-outline-primary ml-2" type="submit">
                                                        Xem
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <table class="table table-bordered table-responsive-md table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th class="text-center">STT</th>
                                                <th class="text-center">Mã sinh viên</th>
                                                <th class="text-center">Tên sinh viên</th>
                                                <th class="text-center">Mã môn học</th>
                                                <th class="text-center">Tên môn học</th>
                                                <th class="text-center">Điểm CC</th>
                                                <th class="text-center">Điểm KT</th>
                                                <th class="text-center">Điểm thi</th>
                                                <th class="text-center">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = 'SELECT registersubject.id, user.name as sName, maSV, maMH, subject.name, pointCC, pointKT, pointExam from registersubject INNER JOIN user on user.id = registersubject.Userid inner join subjectsemester on subjectsemester.id = registersubject.SubjectSemesterid 
                                            inner join semester on semester.id = subjectsemester.Semesterid INNER JOIN subject ON subject.id = subjectsemester.Subjectid;';
                                            $List = executeResult($sql);
                                            $index = 1;

                                            ?>

                                            <?php foreach ($List as $std) : ?>
                                                <tr>
                                                    <td><?= ($index++) ?></td>
                                                    <td><?= $std['maSV'] ?></td>
                                                    <td><?= $std['sName'] ?></td>
                                                    <td><?= $std['maMH'] ?></td>
                                                    <td><?= $std['name'] ?></td>
                                                    <td><?= $std['pointCC'] ?></td>
                                                    <td><?= $std['pointKT'] ?></td>
                                                    <td><?= $std['pointExam'] ?></td>
                                                    <td>
                                                        <span class="table-remove">
                                                            <button data-toggle="modal" data-target="#basicExampleModal2" class="btn btn-primary btn-rounded btn-sm my-0" onclick="editP(<?= $std['id'] ?>)">
                                                                Edit
                                                            </button>                                                           
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>

                                        </tbody>
                                    </table>
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
            </div>
        </div>
    </div>
    <?php include_once("logout.php") ?>
    <script type="text/javascript">       
        function editP(id) {
            $.ajax({
                url: '../controllers/edit_point.php',
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../components/vendor/jquery/jquery.min.js"></script>
    <script src="../components/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../components/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../components/js/sb-admin-2.min.js"></script>
    <script src="../components/vendor/chart.js/Chart.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="../components/js/demo/chart-pie-demo.js"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>