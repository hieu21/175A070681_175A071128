<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lịch trình giảng dạy</title>
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
            <form>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Thông tin giảng viên</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
                <div>
                <table class="table">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Mã giảng viên</th>
                            <th scope="col">Tên giảng viên</th>
                            <th scope="col">Ngày sinh </th>
                            <th scope="col">Ngành</th>
                            <th scope="col">Xem lịch</th>
                            </tr>
                        </thead>
                        <tbody>
                            
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