<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thoát SESSION</title>
</head>
<body>
  <!--Nếu bạn muốn xóa hết tất cả các Session thì ta dùng hàm session_destroy().-->
  <!--unset($_SESSION['session_name']) để hủy một đối tượng session-->
  <?php
session_start();
unset($_SESSION['name']);
?>
<a href="session.php">quay lại trang thông tin khách hàng</a>
</body>
</html>