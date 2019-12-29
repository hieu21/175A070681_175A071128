<?php
    session_start();
?>
<ul class="nav nav-tabs">
    
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Quản lý ngành học</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="taonganhhoc.php">Tạo ngành học</a>
        <a class="dropdown-item" href="thongtinnganhhoc.php">Thông tin ngành học</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Quản lý môn học</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="taomonhoc.php">Tạo môn học</a>
        <a class="dropdown-item" href="thongtinmonhoc.php">Thông tin môn học</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Quản lý lớp môn học</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="taolopmonhoc.php">Tạo lớp môn học</a>
        <a class="dropdown-item" href="thongtinlopmonhoc.php">Thông tin lớp môn học</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Quản lý lớp học phần</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="taolophocphan.php">Tạo lớp học phần</a>
        <a class="dropdown-item" href="thongtinlophocphan.php">Thông tin lớp học phần</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Quản lý thời gian</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="taothoigian.php">Tạo thời gian</a>
        <a class="dropdown-item" href="thongtinthoigian.php">Thông tin thời gian</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="#"><?php echo $_SESSION['tenTK']; ?></a>
        <a class="dropdown-item" href="doimatkhauql.php">Đổi mật khẩu</a>
        <a class="dropdown-item" href="../dangxuat.php">Đăng xuất</a>
        </div>
    </li>
    
  
  
</ul>