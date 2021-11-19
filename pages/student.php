<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quản lý học viện</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="../components/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
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

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="https://tuyensinh.ptit.edu.vn/_next/static/images/logo-c5be62e95f69e6f8285d1fd2ee0688ca.png" width="35" height="50">
                </div>
                <div class="sidebar-brand-text fs-4 mx-3">PTIT</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">

                    <span class="fs-5 ">Quản lý Học viện</span></a>
            </li>

            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading fs-6">
                Danh mục
            </div>

            <li class="nav-item">
                <a class="nav-link" href="bangtin.php">

                    <span class="fs-6">Bảng tin</span>
                </a>
            </li>
            <!-- -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#NganhHocThuGon" aria-expanded="true" aria-controls="NganhHocThuGon">
                    <span class="fs-6">Ngành học</span>
                </a>
                <div id="NganhHocThuGon" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chỉnh sửa thông tin</h6>
                        <a class="collapse-item fs-6" href="congnghe.php">Công nghệ</a>
                        <a class="collapse-item fs-6" href="kinhte.php">Kinh tế</a>

                    </div>
                </div>
            </li>
            <!-- -->
            <li class="nav-item">
                <a class="nav-link" href="student.php">

                    <span class="fs-6">Sinh viên</span></a>
            </li>
            <!-- -->
            <li class="nav-item">
                <a class="nav-link fs-5" href="point.php">

                    <span class="fs-6">Điểm sinh viên</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) 
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> 
            -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4  shadow">
                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="ThongBao_Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow " aria-labelledby="ThongBao_Dropdown">
                                <h6 class="dropdown-header">
                                    Thông báo
                                </h6>
                                <!--thông báo-->
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <!--hết thông báo-->
                                <a class="dropdown-item text-center small text-gray-500" href="#">Hiển thị thêm</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="TinNhan_Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter-->
                                <span class="badge badge-danger badge-counter">+</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="TinNhan_Dropdown">
                                <h6 class="dropdown-header">
                                    Tin nhắn
                                </h6>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <!-- End Messages -->
                                <a class="dropdown-item text-center small text-gray-500" href="#">Hiển thị thêm</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Tên ADMIN</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Thông tin cá nhân
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cài đặt
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Lịch sử hoạt động
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">BẢNG QUẢN LÝ SINH VIÊN</h1>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div id="table" class="table-student">
                                    <form class="form-inline">
                                        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                                        <i class="fas fa-search" aria-hidden="true"></i>
                                        <span class="table-add float-right mb-3 mr-2 ml-4"><a href="#!" class="text-success">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
                                                    <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
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
                                                    <span class="table-remove"><button type="button" data-toggle="modal" data-target="#basicExampleModal2" class="btn btn-primary btn-rounded btn-sm my-0">
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
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm sinh viên</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" method="post">
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
                        <div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn muốn dăng xuất?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"> </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <a class="btn btn-primary" href="login.html">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>


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