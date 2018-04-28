<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test form</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
    <?php
function test_input($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}

//khởi tạo giá trị ban đầu cho các biến
$user = $err_user = $email = $err_email = $sex = $err_sex = $sdt = $err_sdt
= $website = $err_web;

// xây dựng giá trị cho các biến

// ["REQUEST_METHOD"] chưa. Nếu REQUEST_METHOD là POST, thì biểu mẫu đã được gửi - và nó phải được xác thực. Nếu nó chưa được gửi, bỏ qua xác thực và hiển thị một biểu mẫu trống

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['user'])) {
        $err_user = "please enter user";
    } else {
        $user = test_input($_POST['user']);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $user)) {
            $err_user = "name only contains letter and whitespace";
        }
    }

    if (empty($_POST['email'])) {
        $err_email = "please enter email";
    } else {
        $email = test_input($_POST['email']);
        //check if email address id well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_email = "invalid email format";
        }
    }
    if(empty($_POST['web'])){
        $err_web=" please enter address";
    }else{
        $website = test_input($_POST['web']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
            $err_web="invalid web address format";
        }
    }
    if (empty($_POST['sdt'])) {
        $err_sdt = "please enter phone number";
    } else {
        $sdt = test_input($_POST['sdt']);
    }

    if (empty($_POST['sex'])) {
        $err_sex = "please enter sex of you";
    } else {
        $sex = test_input($_POST['sex']);
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-inline">
    Enter user: <input class="form-control"  name="user" type="text" placeholder="user">
    <span>*<?php echo $err_user; ?></span><br><br>
    Enter email: <input class="form-control"  name="email" type="text" placeholder="email">
    <span>*<?php echo $err_email; ?></span><br><br>
    Enter sdt: <input class="form-control"  name="sdt" type="text" placeholder="sdt">
    <span>*<?php echo $err_sdt; ?></span><br><br>
    Website: <input placeholder="enter url" type="text" name="web" class="form-control">
    <span>*<?php echo $err_web;?></span><br><br>
    select sex:
     Bê Đê: <input value="bê đê"  name="sex" type="radio"><br>
     Nam: <input  name="sex" value="nam" type="radio"><br>
     Nữ: <input  name="sex" value="nữ" type="radio"><br>
    <span>*<?php echo $err_sex; ?></span><br>
    <button type="submit">submit</button>
</form>
<p style="color: blue;">
<?php
echo "tên của bạn là: $user";
echo "<br>";
echo "email là: $email";
echo "<br>";
echo "sdt là: $sdt";
echo "<br>";
echo "giới tính: $sex";
?>
</p>
<style>
 span{
     color: red;
 }
</style>
</body>
</html>