<?php session_start() ?>
            <ul class="nav nav-tabs ">
                <li class="nav-item">
                    <a class="nav-link" href="themtaikhoan.php">Thêm tài khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="TTQL.php">Thông tin tài khoản QL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="TTGV.php">Thông tin tài khoản GV</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><?php echo $_SESSION['tenTK']; ?></a>
                    <a class="dropdown-item" href="doimatkhauqt.php">Đổi mật khẩu</a>
                    <a class="dropdown-item" href="../dangxuat.php">Đăng xuất</a>
                    </div>
                </li>
                
            </ul>