<?php
    include_once("./controllers/requireLogin.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

</head>

<body>
    <div id="slide-out" class="side-nav2 side">
        <ul class="custom-scrollbar">
          <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg rgba-blue-strong"></div>
      </div>

    <!-- CRUD sinh viên -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
            Sinh Viên
        </h3>
        <div class="card-body">
            <div id="table" class="table-student">
            <form class="form-inline" >
              <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
              aria-label="Search">
             <i class="fas fa-search" aria-hidden="true"></i>
             <span class="table-add float-right mb-3 mr-2 ml-4"><a href="#!" class="text-success">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
                        <i
                            class="fas fa-plus fa-2x" aria-hidden="true"></i>
                      </button></a></span>
            </form>
                
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Mã sinh viên</th>
                            <th class="text-center">Họ và tên</th>
                            <th class="text-center">Lớp</th>
                            <th class="text-center">Ngày sinh</th>
                            <th class="text-center">Địa chỉ</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Số điện thoại</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                      <!-- Viet ma PHP -->
                        <tr>
                            <td class="pt-3-half">1</td>
                            <td class="pt-3-half">B18DCCN189</td>
                            <td class="pt-3-half">Đỗ Thị Thu Hà</td>
                            <td class="pt-3-half">D18HTTT1</td>
                            <td class="pt-3-half">2000-04-01</td>
                            <td class="pt-3-half">Hà Nội</td>
                            <td class="pt-3-half">dothithuha140@gmail.com</td>
                            <td class="pt-3-half">0971452203</td>
                     
                            <td>
                            <span class="table-remove"><button type="button" data-toggle="modal" data-target="#basicExampleModal2"
                                    class="btn btn-primary btn-rounded btn-sm my-0">
                                    Edit
                                </button><button type="button" 
                                        class="btn btn-danger btn-rounded btn-sm my-0">
                                        Remove
                                    </button></span>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm sinh viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" method = "post">
                    <label for="basic-url">Họ và tên</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Lớp</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Ngày sinh</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Địa chỉ</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Email</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Số điện thoại</label>
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
    <div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Chỉnh sửa thông tin sinh viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="basic-url">Họ và tên</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Lớp</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Ngày sinh</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Địa chỉ</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Email</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Số điện thoại</label>
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
    <!-- CRUD Môn học -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
            Môn học theo kì học
        </h3>
        <div class="card-body">
            <div id="table" class="table-subject">
            <form class="form-inline" >
              <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
              aria-label="Search">
             <i class="fas fa-search" aria-hidden="true"></i>
             <span class="table-add float-right mb-3 mr-2 ml-4"><a href="#!" class="text-success">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal3">
                        <i
                            class="fas fa-plus fa-2x" aria-hidden="true"></i>
                      </button></a></span>
            </form>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Mã môn học</th>
                            <th class="text-center">Tên môn học</th>
                            <th class="text-center">Số tín chỉ</th>
                            <th class="text-center">Giảng viên</th>
                            <th class="text-center">Phòng học</th>
                            <th class="text-center">Thứ</th>
                            <th class="text-center">Tiết bắt đầu</th>
                            <th class="text-center">Tiết Kết thúc</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                      <!-- Viet ma PHP -->
                        <tr>
                            <td class="pt-3-half">1</td>
                            <td class="pt-3-half">INT1342M</td>
                            <td class="pt-3-half">Phân tích và thiết kế hệ thống thông tin</td>
                            <td class="pt-3-half">3</td>
                            <td class="pt-3-half">T.Đ.Quế</td>
                            <td class="pt-3-half">D18-061</td>
                            <td class="pt-3-half">Ba</td>
                            <td class="pt-3-half">9</td>
                            <td class="pt-3-half">11</td>
                            <td>
                            <span class="table-remove"><button type="button" data-toggle="modal" data-target="#basicExampleModal4"
                                    class="btn btn-primary btn-rounded btn-sm my-0">
                                    Edit
                                </button><button type="button" 
                                        class="btn btn-danger btn-rounded btn-sm my-0">
                                        Remove
                                    </button></span>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="basicExampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm môn học</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" method = "post">
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
                    <label for="basic-url">Số tín chỉ</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Giảng viên</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Phòng học</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Thứ</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Tiết bắt đầu</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Tiết kết thúc</label>
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
    <div class="modal fade" id="basicExampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Chỉnh sửa thông tin môn học</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                    <label for="basic-url">Số tín chỉ</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Giảng viên</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Phòng học</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Thứ</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Tiết bắt đầu</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Tiết kết thúc</label>
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
    <!-- CRUD kỳ học -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
            Kỳ học
        </h3>
        <div class="card-body">
            <div id="table" class="table-subject">
            <form class="form-inline" >
              <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
              aria-label="Search">
             <i class="fas fa-search" aria-hidden="true"></i>
             <span class="table-add float-right mb-3 mr-2 ml-4"><a href="#!" class="text-success">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal5">
                        <i
                            class="fas fa-plus fa-2x" aria-hidden="true"></i>
                      </button></a></span>
            </form>
                
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Mã kì học</th>
                            <th class="text-center">Năm bắt đầu</th>
                            <th class="text-center">Năm kết thúc</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                      <!-- Viet ma PHP -->
                        <tr>
                            <td class="pt-3-half">1</td>
                            <td class="pt-3-half">Học kỳ 1</td>
                            <td class="pt-3-half">2021</td>
                            <td class="pt-3-half">2022</td>
                            <td>
                            <span class="table-remove"><button type="button" data-toggle="modal" data-target="#basicExampleModal6"
                                    class="btn btn-primary btn-rounded btn-sm my-0">
                                    Edit
                                </button><button type="button" 
                                        class="btn btn-danger btn-rounded btn-sm my-0">
                                        Remove
                                    </button></span>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="basicExampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm kỳ học</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" method = "post">
                    <label for="basic-url">Kì học</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Năm bắt đầu</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Năm kết thúc</label>
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
    <div class="modal fade" id="basicExampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Chỉnh sửa thông tin kỳ học</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="basic-url">Kỳ học</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Năm bắt đầu</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Năm kết thúc</label>
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
    <!-- CRUD điểm -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
            Điểm của sinh viên
        </h3>
        <div class="card-body">
            <div id="table" class="table-subject">
            <form class="form-inline" >
              <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
              aria-label="Search">
             <i class="fas fa-search" aria-hidden="true"></i>
             <span class="table-add float-right mb-3 mr-2 ml-4"><a href="#!" class="text-success">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal8">
                        <i
                            class="fas fa-plus fa-2x" aria-hidden="true"></i>
                      </button></a></span>
            </form>
            <div class ="row" style = "justify-content: center">
                <div class = "col-3">
                <label for="basic-url">Nhập học kì xem điểm thi (vd 20211)</label>
                <div class="input-group mb-3 ">
                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username"
                        aria-describedby="button-addon2" />
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
                            <th class="text-center">Kỳ học</th>
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
                            <td class="pt-3-half">Học kì 1</td>
                            <td class="pt-3-half">10</td>
                            <td class="pt-3-half">8</td>
                            <td class="pt-3-half"></td>
                            <td class="pt-3-half">8.5</td>
                            <td>
                            <span class="table-remove"><button type="button" data-toggle="modal" data-target="#basicExampleModal7"
                                    class="btn btn-primary btn-rounded btn-sm my-0">
                                    Edit
                                </button><button type="button" 
                                        class="btn btn-danger btn-rounded btn-sm my-0">
                                        Remove
                                    </button></span>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="basicExampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel6">Thêm điểm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" method = "post">
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
                    <label for="basic-url">Kỳ học</label>
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
    <div class="modal fade" id="basicExampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel7"
        aria-hidden="true">
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
                    <label for="basic-url">Tên môn học</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <label for="basic-url">Kỳ học</label>
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
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>