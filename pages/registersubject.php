<?php
include_once("../controllers/requireLogin.php");
require_once('../configs/dbhelp.php');
$s_room = $s_numberOfSlot = $s_totalTime = $s_roomExam = $s_examAt = '';

if (!empty($_POST)) {
    $s_id = '';
    $s_subjectid = '';
    $s_semesterid = '';

    if (isset($_POST['subjectid'])) {
        $s_subjectid = $_POST['subjectid'];
    }
    if (isset($_POST['room'])) {
        $s_room = $_POST['room'];
    }

    if (isset($_POST['semesterid'])) {
        $s_semesterid = $_POST['semesterid'];
    }

    if (isset($_POST['numberOfSlot'])) {
        $s_numberOfSlot = $_POST['numberOfSlot'];
    }

    if (isset($_POST['totalTime'])) {
        $s_totalTime = $_POST['totalTime'];
    }

    if (isset($_POST['roomExam'])) {
        $s_roomExam = $_POST['roomExam'];
    }

    if (isset($_POST['examAt'])) {
        $s_examAt = $_POST['examAt'];
    }


    if (isset($_POST['id'])) {
        $s_id = $_POST['id'];
    }
    $s_subjectid = str_replace('\'', '\\\'', $s_subjectid);
    $s_semesterid = str_replace('\'', '\\\'', $s_semesterid);
    $s_room = str_replace('\'', '\\\'', $s_room);
    $s_numberOfSlot = str_replace('\'', '\\\'', $s_numberOfSlot);
    $s_totalTime = str_replace('\'', '\\\'', $s_totalTime);
    $s_roomExam = str_replace('\'', '\\\'', $s_roomExam);
    $s_id = str_replace('\'', '\\\'', $s_id);


    if ($s_id != '') {
        //update
        $sql = "update subjectsemester set room = '$s_room', numberOfSlot = '$s_numberOfSlot', totalTime = '$s_totalTime', roomExam = '$s_roomExam' where id = " . $s_id;
    } else {
        //insert
        $sql = "insert into subjectsemester(room, numberOfSlot, totalTime, roomExam, examAt, Semesterid, Subjectid ) value ( '$s_room', '$s_numberOfSlot','$s_totalTime','$s_roomExam','$s_examAt','$s_semesterid', '$s_subjectid')";
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
    <title>Qu???n l?? h???c vi???n</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../components/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../components/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
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
                        <h1 class="h3 mb-0 text-gray-800">B???NG QU???N L?? ????NG K?? M??N H???C</h1>
                    </div>
                    <div class="row mb-5">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-sm-flex flex-column align-items-center  mb-4">
                                    <h3 class=" mb-3 text-gray-800">Ch???n m??n h???c </h3>
                                    <form method="post" action="../controllers/registersubject.php">
                                        <?php
                                        $sql = 'SELECT  subjectsemester.id, type, startYear, endYear, subject.name FROM subjectsemester INNER JOIN subject ON subject.id = subjectsemester.Subjectid inner join semester on semester.id = subjectsemester.Semesterid ;';
                                        $List = executeResult($sql);
                                        ?>
                                        <label for="basic-url">M??n h???c</label>
                                        <div class="d-flex justify-content-center ">
                                            <select class="form-select form-select-md shadow" name="subjectsemesterid">
                                                <?php foreach ($List as $l) : ?>
                                                    <option value="<?= $l['id'] ?>"> <?= $l['type'] . "-" . $l['startYear'] . "-" . $l['endYear'] . "-" . $l['name'] ?> </option>

                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <?php
                                        $sql = 'select * from user';
                                        $List = executeResult($sql);
                                        ?>
                                        <label for="basic-url" class="mt-3">Sinh vi??n</label>
                                        <div class="d-flex justify-content-center ">
                                            <select class=" form-select form-select-md mb-3 shadow" name="userid">
                                                <?php foreach ($List as $sl) : ?>
                                                    <option value="<?= $sl['id'] ?>"> <?= $sl['name'] . "-" . $sl['maSV'] ?> </option>

                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <span class="table-add d-flex justify-content-center m-3">
                                            <button type="submit" class="btn btn-primary btn-rounded btn-md">
                                                Th??m sinh vi??n
                                            </button>
                                        </span>
                                    </form>
                                </div>
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-center">STT</th>
                                            <th class="text-center">K??? h???c</th>
                                            <th class="text-center">M?? m??n h???c</th>
                                            <th class="text-center">Sinh vi??n</th>
                                            <th class="text-center">Thao t??c</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = 'SELECT  registersubject.id, semester.type, semester.startYear, semester.endYear, maMH, user.name  FROM registersubject 
                                        INNER JOIN user on user.id = registersubject.Userid inner join subjectsemester on subjectsemester.id = registersubject.SubjectSemesterid 
                                        inner join semester on semester.id = subjectsemester.Semesterid INNER JOIN subject ON subject.id = subjectsemester.Subjectid;';

                                        $List = executeResult($sql);
                                        $index = 1;

                                        ?>

                                        <?php foreach ($List as $std) : ?>
                                            <tr>
                                                <td><?= ($index++) ?></td>
                                                <td><?= $std['type'] . "-" . $std['startYear'] . "-" . $std['endYear'] ?></td>
                                                <td><?= $std['maMH'] ?></td>
                                                <td><?= $std['name'] ?></td>

                                                <td>
                                                    <span class="table-remove">
                                                        <button data-toggle="modal" data-target="#basicExampleModal2" class="btn btn-primary btn-rounded btn-sm my-0" onclick="editS(<?= $std['id'] ?>)">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-danger btn-rounded btn-sm my-0" name="remove" onclick="deleteS(<?= $std['id'] ?>)">
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
                </div>
            </div>
        </div>
    </div>
    <?php include_once("logout.php") ?>
    <script type="text/javascript">
        function deleteS(id) {
            option = confirm('B???n c?? mu???n xo?? b???n n??y kh??ng?')
            if (!option) {
                return;
            }

            console.log(id)
            $.post('../controllers/delete_subjectsemester.php', {
                'id': id
            }, function(data) {
                alert(data)
                location.reload()
            })
        }

        function editS(id) {
            $.ajax({
                url: '../controllers/edit_subjectsemester.php',
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

</body>

</html>