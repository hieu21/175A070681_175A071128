<?php
    session_start();
?>            
            <div class="header-left">
                <a href="themtaikhoan.php"><img src="../style/images/logo.png" alt="logo"></a>
            </div>
            <div class="header-right" style="margin-left: auto;" >
            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tài khoản
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#"><?php echo $_SESSION['tenTK']; ?></a>
                <a class="dropdown-item" href="doimatkhauql.php">Đổi mật khẩu</a>
                <a class="dropdown-item" href="../dangxuat.php">Đăng xuất</a>
                </div>
            </div>
            </div>