<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
//khởi taoj một session
session_start();
$flag = 0;
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address'])) {
    $_SESSION["name"]=$_POST['name'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['address']=$_POST['address'];
    $flag = 1;
}
?>
    <form action="" method="post">
        <table >
            <tr class="title"><td colspan="3">Thông Tin Khách Hàng</td></tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr class="submit">
                <td colspan="3"><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
    <?php
if ($flag == 1) {
    ?>
        <table>
            <tr>
                <td>information client<br>
                <?php echo "tên khách hàng: ".$_SESSION['name'].'<br>';
                echo "email khách hàng: ".$_SESSION['email'].'<br>';
                echo 'address khach hang: '.$_SESSION['address'].'<BR>';?>
            </td>
            <td><a href="doc_session.php">truy cập</a></td>
            </tr>
        </table>
        <?php
}
?>

    <style style="text/css">
        table{
            width: 500px;
            margin: 0 auto;
            background: red;
            border-spacing :0px;
            border: 1px solid black;
        }
        input[type="text"]{
            width: 300px;
            height: 30px;
            line-height: 30px;
            float: right;
        }
        .title,.submit{
            background: yellow;
            text-align: center;
            font-size: 20px;
            color: red;
            font-weight: bold;
        }
        input[type="submit"] {
            background: blue;
            color: red;
            font-size: 15px;
            padding:5px 20px;
            margin : 2px;

        }
    </style>
</body>
</html>
