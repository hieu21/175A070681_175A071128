<?php
    function connect_db(){
        global $conn;
        if(!$conn){
            $conn = mysqli_connect('localhost','root','','db_myproject') or die('Không kết nối được Database');
            mysqli_set_charset($conn,'utf8');
        }
    }
    function disconnect_db(){
        global $conn;
        if($conn) {
            mysqli_close($conn);
        }
    }
    function hienThi(){
        global $conn;
        connect_db();
        $sql = "select * from giangVien";
        $query = mysqli_query($conn,$sql);
        $result = array();
        if($query){
            while ($row = mysqli_fetch_array($query)) {
                $result[] = $row;
            }
        }
        return $result;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Manager</title>
	<link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/app-blue.css">
    <link rel="stylesheet" href="style/vendor.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
	<header>
        <div class="wrapper">
            <?php
                include("header.php");
            ?>
        </div>
    </header>
    <nav>
        <div class="wrapper">
            <?php
                include("nav.php");
            ?>
        </div>
    </nav>
    <main>
        <div class="wrapper">
            <div class="col-xl-12">
                <div class="card sameheight-item">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Quản lý </h3>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <a href="#dsgiangvien" class="nav-link active" data-target="#dsgiangvien" data-toggle="tab" aria-controls="dsgiangvien" role="tab">Danh sách giáo viên</a>
                            </li>
                            <li class="nav-item">
                                <a href="#dsmonhoc" class="nav-link" data-target="#dsmonhoc" aria-controls="dsmonhoc" data-toggle="tab" role="tab">Danh sách môn học</a>
                            </li>
                            <li class="nav-item">
                                <a href="#dslophoc" class="nav-link" data-target="#dslophoc" aria-controls="dslophoc" data-toggle="tab" role="tab">Danh sách lớp học</a>
                            </li>
                            <li class="nav-item">
                                <a href="#lichtrinh" class="nav-link" data-target="#lichtrinh" aria-controls="lichtrinh" data-toggle="tab" role="tab">Lịch trình giảng dạy</a>
                            </li>
                        </ul>
                        <div class="tab-content tabs-bordered">
                            <div class="tab-pane fade in active" id="dsgiangvien">
                                <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <div class="item-list-header">
                                                                <div class="item-row">
                                                                    <th>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1">
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                </div>
                                                            <th>STT</th>
                                                            <th>Mã giảng viên</th>
                                                            <th>Họ tên giảng viên</th>
                                                            <th>Ngày sinh</th>
                                                            <th>Địa chỉ</th>
                                                            </div>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($row as $result) { ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $item['maGV']; ?></td>
                                                                <td><?php echo $item['hotenGV']; ?></td>
                                                                <td><?php echo $item['ngaySinh']; ?></td>
                                                                <td><?php echo $item['diaChi']; ?></td>
                                                                </tr>
                                                            </tr>
                                                         <?php } ?>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                    <label class="form-check-label" for="defaultCheck1">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                    <label class="form-check-label" for="defaultCheck1">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                    <label class="form-check-label" for="defaultCheck1">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                    <label class="form-check-label" for="defaultCheck1">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>
                                                    <button type="button" class="btn btn-oval btn-primary" data-toggle="modal" data-target="#formThemGV">Thêm</button>
                                                    <button type="button" class="btn btn-oval btn-primary">Sửa</button>
                                                    <button type="button" class="btn btn-oval btn-primary">Xóa</button>
                                                </p>
                                                <div class="modal fade" tabindex="-1" role="dialog" id="formThemGV">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title">Thêm giảng viên</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <label for="name">Mã giảng viên</label>
                                                                        <input type="text" class="form-control" id="name" placeholder="Mã">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="phone">Họ tên giảng viên</label>
                                                                        <input type="text" class="form-control" id="phone" placeholder="Họ tên">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name">Ngày sinh</label>
                                                                        <input type="text" class="form-control" id="name" placeholder="yyyy-mm-dd">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name">Địa chỉ</label>
                                                                        <input type="text" class="form-control" id="name" placeholder="Địa chỉ">
                                                                    </div>
                                                                    <input type="submit" class="btn btn-primary">
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="dsmonhoc">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <section class="example">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </th>
                                                                <th>STT</th>
                                                                <th>Mã môn học</th>
                                                                <th>Tên môn học</th>
                                                                <th>Chuyên ngành</th>
                                                                <th>Số tín chỉ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            require_once "data_query.php";
                                                             ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>
                                                    <button type="button" class="btn btn-oval btn-primary" data-toggle="modal" data-target="#formThemMH">Thêm</button>
                                                    <button type="button" class="btn btn-oval btn-primary">Sửa</button>
                                                    <button type="button" class="btn btn-oval btn-primary">Xóa</button>
                                                    </p>
                                                    <div class="modal fade" tabindex="-1" role="dialog" id="formThemMH">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title">Thêm môn học</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <label for="name">Mã môn học</label>
                                                                            <input type="text" class="form-control" id="name" placeholder="Mã">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="phone">Tên môn học</label>
                                                                            <input type="text" class="form-control" id="phone" placeholder="Môn học">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="name">Chuyên ngành</label>
                                                                            <input type="text" class="form-control" id="name" placeholder="Chuyên ngành">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="name">Số tín chỉ</label>
                                                                            <input type="text" class="form-control" id="name" placeholder="Số tín">
                                                                        </div>
                                                                        <input type="submit" class="btn btn-primary">
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="dslophoc">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <section class="example">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </th>
                                                                <th>STT</th>
                                                                <th>Mã lớp học</th>
                                                                <th>Tên lớp học</th>
                                                                <th>Địa điểm</th>
                                                                <th>Thời gian học</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            require_once "data_query.php";
                                                             ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>
                                                    <button type="button" class="btn btn-oval btn-primary" data-target="#formThemLH" data-toggle="modal">Thêm</button>
                                                    <button type="button" class="btn btn-oval btn-primary">Sửa</button>
                                                    <button type="button" class="btn btn-oval btn-primary">Xóa</button>
                                                    </p>
                                                    <div class="modal fade" tabindex="-1" role="dialog" id="formThemLH">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title">Thêm lớp học</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <label for="name">Mã lớp học</label>
                                                                            <input type="text" class="form-control" id="name" placeholder="Mã">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="phone">Tên lớp học</label>
                                                                            <input type="text" class="form-control" id="phone" placeholder="Lớp học">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="name">Địa điểm</label>
                                                                            <input type="text" class="form-control" id="name" placeholder="Địa điểm">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="name">Thời gian học</label>
                                                                            <input type="text" class="form-control" id="name" placeholder="Thời gian">
                                                                        </div>
                                                                        <input type="submit" class="btn btn-primary">
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="lichtrinh">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <section class="example">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input forcheck" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </th>
                                                                <th>STT</th>
                                                                <th>Mã lịch trình</th>
                                                                <th>Giáo viên dạy</th>
                                                                <th>Lớp dạy</th>
                                                                <th>Thời gian dạy</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            require_once "data_query.php";
                                                             ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input forcheck" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input forcheck" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input forcheck" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input forcheck" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                                <td>Table cell</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>
                                                    <button type="button" class="btn btn-oval btn-primary" data-target="#formThemLT" data-toggle="modal">Thêm</button>
                                                    <button type="button" class="btn btn-oval btn-primary">Sửa</button>
                                                    <button type="button" class="btn btn-oval btn-primary">Xóa</button>
                                                    </p>
                                                    <div class="modal fade" tabindex="-1" role="dialog" id="formThemLT">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title">Thêm lịch trình</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <label for="name">Mã lịch trình</label>
                                                                            <input type="text" class="form-control" id="name" placeholder="Mã">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="phone">Giáo viên dạy</label>
                                                                            <input type="text" class="form-control" id="phone" placeholder="Giáo viên">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="name">Lớp dạy</label>
                                                                            <input type="text" class="form-control" id="name" placeholder="Lớp">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="name">Thời gian dạy</label>
                                                                            <input type="text" class="form-control" id="name" placeholder="Thời gian">
                                                                        </div>
                                                                        <input type="submit" class="btn btn-primary">
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="wrapper">
            <?php
                include("footer.php");
            ?>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="scrpit/bootstrap.min.js"></script>
    <script src="script/app.js"></script>
    <script src="script/vendor.js"></script>
    <script type="script/script.js"></script>
</body>
</html>