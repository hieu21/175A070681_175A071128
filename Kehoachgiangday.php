
<?php require("includes/connection.php");?>
<?php
error_reporting(0);
ini_set('display_errors', 0);
?>
<?php
    if (isset($_POST["btn_submit"])){
        $nhapthongtin = $_POST["nhapthongtin"];
        $sql = "SELECT * FROM kehoachgiangday WHERE maGV =(SELECT maGV FROM giangvien WHERE hoTenGV like '$nhapthongtin')";
        $query = mysqli_query($conn,$sql);        
        
        $sql1 = "SELECT * FROM giangvien WHERE hoTenGV = '$nhapthongtin'";
        $query1 = mysqli_query($conn,$sql1);

        $sql2 = "SELECT *FROM mon WHERE maMon= (SELECT maMon FROM giangvien_mon WHERE maGV =(SELECT maGV FROM giangvien WHERE hoTenGV = '$nhapthongtin'))";
        $query2 = mysqli_query($conn,$sql2);
    }
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kế hoạch giảng dạy</title>
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/css/style.css">
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
            <div class="wrapper" style="display: block">
            <div class="main">
            <form action="Kehoachgiangday.php" method="post" >
            
                <div class="form-group">
                    <label for="exampleInputPassword1">Thông tin giảng viên</label>
                    <input type="text" class="form-control" id="nhapthongtin" name="nhapthongtin" >
                </div>
                
                <input type="submit" class="btn btn-primary" value="Xem" name="btn_submit" >
            </form>
            </div>
                <div>
                <table class="table">
                        <thead class="thead-light">
                            <tr>
                            
                            <th scope="col">Tên giảng viên</th>
                            <th scope="col">Bài học </th>
                            <th scope="col">Địa điểm</th>
                            <th scope="col">Thòi gian </th>
                            <th scope="col">Môn</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                                while ( $data1 = mysqli_fetch_array($query1)) {
                                
                                    // $maLHP = $data['ma'];
                            ?>
                            <tr>
                            <td scope="row"><?php echo $data1['hoTenGV']; ?></td>
                            
                            <?php } ?>
                            <?php 
                                while ( $data = mysqli_fetch_array($query)) {
                                
                                    // $maLHP = $data['ma'];
                            ?>
                            <td scope="row"><?php echo $data['baiHocDK']; ?></td>
                            <td scope="row"><?php echo $data['diaDiemDK']; ?></td>
                            <td scope="row"><?php echo $data['thoiGianDK']; ?></td>
                            <?php } ?>
                            <?php 
                                while ( $data2 = mysqli_fetch_array($query2)) {
                                
                                    // $maLHP = $data['ma'];
                            ?>
                            <td scope="row"><?php echo $data2['tenMon']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
			        </table>
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
    <script src="style/js/bootstrap.min.js"></script>
</body>
</html>