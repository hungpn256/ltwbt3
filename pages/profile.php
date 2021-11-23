<?php
include_once("../controllers/requireLogin.php");
require_once('../configs/dbhelp.php');
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
                        <h3 class="h3 mb-0 text-gray-800">THÔNG TIN CÁ NHÂN</h3>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <form class="md-form">
                                    <div class="file-field">
                                        <div class="mb-4 d-flex justify-content-center">
                                            <img id="avatar-image" width="60%" style="aspect-ratio: 1 / 1;" src="<?php if ($image != '') echo $image;
                                                                                    else echo "https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" ?>" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="btn btn-mdb-color btn-rounded float-left">
                                                <input type="file" id="input-avatar" onchange="readURL(this)">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();
                                            reader.onload = function(e) {
                                                $('#avatar-image').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
                            </div>
                            <div class="col-8">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4 text-center">
                                    <h3 class="h3 mb-0 text-gray-800">Chỉnh sửa thông tin cá nhân</h3>
                                </div>
                                <form class="text-center" style="color: #757575;" action="../controllers/register.php" method="POST">

                                    <div class="md-form mt-5">
                                        <input required type="text" id="materialRegisterFormName" class="form-control" name="name" value="<?= $name ?>">
                                        <label for="materialRegisterFormName">Name</label>
                                    </div>

                                    <!-- E-mail -->
                                    <div class="md-form mt-0">
                                        <input required type="text" id="materialRegisterFormUsername" class="form-control" name="username" value="<?= $username ?>">
                                        <label for="materialRegisterFormUsername">Username</label>
                                    </div>

                                    <!-- Password -->
                                    <div class="md-form">
                                        <input required type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name="password" value="<?= $password ?>">
                                        <label for="materialRegisterFormPassword">Password</label>
                                    </div>

                                    <!-- Sign up button -->
                                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="edit-profile">Chỉnh sửa</button>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

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