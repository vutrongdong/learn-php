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
//mảng nhiều chiều
$cars = array
    (
    array("BMV", "1.000.000$"),
    array("messadec", "750.000$"),
);
echo "name of firt number cars is: " . $cars[0][0] . "<br>";
echo "cost of firt number cars is: " . $cars[0][1] . "<br>";
echo "name of second number cars is: " . $cars[1][0] . "<br>";
echo "cost of second number cars is: " . $cars[1][1] . "<br>";
?>
    <?php
    //sử dụng vòng lặp for để duyệt mảng
$cars = array
    (
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15),
);

for ($i = 0; $i < count($cars); $i++) {
    echo "<p><b>Row number $i</b></p>";
    echo "<ul>";
    for ($j = 0; $j < 3; $j++) {
        echo  $cars[$i][$j]."<br>";
    }
    echo "</ul>";
}
?>

<?php

// Hàm PHP date()được sử dụng để định dạng ngày và / hoặc thời gian.
// d - Thể hiện ngày trong tháng (01 đến 31)
// m - Đại diện cho một tháng (01 đến 12)
// Y - Đại diện cho một năm (bằng bốn chữ số)
// l (chữ thường 'L') - Thể hiện ngày trong tuần
// h - Định dạng 12 giờ của một giờ với số 0 đứng đầu (01 đến 12)
// i - Phút có số 0 đứng đầu (từ 00 đến 59)
// s - Giây với số 0 đứng đầu (00 đến 59)
// a - Chữ thường Ante meridiem và Post meridiem (am hoặc pm)
echo date("d/m/y/l");

// Ví dụ bên dưới tạo ngày và thời gian từ một số tham số trong mktime()hàm:
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
</body>
</html>