<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doc SESSION</title>
</head>
<body>
    <?php
        echo "Xin Chào: ". $_SESSION['name'].'<br>';
        echo "Địa chỉ ". $_SESSION['address'];
    ?>
    <a href="thoat_session.php">thoát</a>
</body>
</html>