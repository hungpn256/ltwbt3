<?php
    
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

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">                
                <div>
                    <?php include_once("topbar.php");?>
                </div>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">BẢNG QUẢN LÝ ĐIỂM SINH VIÊN</h1>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div id="table" class="table-subject">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <form class="form-inline">
                                            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                                            <i class="fas fa-search" aria-hidden="true"></i>

                                        </form>
                                        <span class="table-add float-right mb-3 mr-2 ml-4"><a href="#!" class="text-success">
                                                <button type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#basicExampleModal">
                                                    <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
                                                </button></a></span>
                                    </div>
                                    <div class="row" style="justify-content: center">
                                        <div class="col-3">
                                            <label for="basic-url">Nhập học kì xem điểm thi (vd 20211)</label>
                                            <div class="input-group mb-3 ">
                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2" />
                                                <button class="btn-outline-primary ml-2" type="button" data-mdb-ripple-color="dark">
                                                    Xem
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-responsive-md table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th class="text-center">STT</th>
                                                <th class="text-center">Mã sinh viên</th>
                                                <th class="text-center">Tên sinh viên</th>
                                                <th class="text-center">Mã môn học</th>
                                                <th class="text-center">Tên môn học</th>
                                                <th class="text-center">Điểm CC</th>
                                                <th class="text-center">Điểm BT</th>
                                                <th class="text-center">Điểm TH</th>
                                                <th class="text-center">Điểm thi</th>
                                                <th class="text-center">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Viet ma PHP -->
                                            <tr>
                                                <td class="pt-3-half">1</td>
                                                <td class="pt-3-half">B18DCCN189</td>
                                                <td class="pt-3-half">Đỗ Thị Thu Hà</td>
                                                <td class="pt-3-half">INT1342M</td>
                                                <td class="pt-3-half">Phân tích và thiết kế hệ thống thông tin</td>
                                                <td class="pt-3-half">10</td>
                                                <td class="pt-3-half">8</td>
                                                <td class="pt-3-half"></td>
                                                <td class="pt-3-half">8.5</td>
                                                <td>
                                                    <span class="table-remove"><button type="button" data-toggle="modal" data-target="#basicExampleModal7" class="btn btn-primary btn-rounded btn-sm my-0">
                                                            Edit
                                                        </button><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">
                                                            Remove
                                                        </button></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm điểm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" method="post">
                                        <label for="basic-url">Mã sinh viên</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Tên sinh viên</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Mã môn học</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Tên môn học</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Điểm CC</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Điểm BT</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Điểm TH</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Điểm thi</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Editable table -->
                        <div class="modal fade" id="basicExampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel7" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel7">Chỉnh sửa điểm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="basic-url">Mã sinh viên</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Tên sinh viên</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Mã môn học</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Tên môn học</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Điểm CC</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Điểm BT</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Điểm TH</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="basic-url">Điểm thi</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-primary">Lưu thay đổi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("logout.php")?>

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