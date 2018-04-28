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
// var_dump () trả về kiểu dữ liệu và giá trị:
$x = 10.365;
var_dump($x);
echo "<br>";
// Hàm PHP strlen()trả về độ dài của một chuỗi.
echo strlen("Hello world!"); // outputs 12
echo "<br>";
//Hàm PHP str_word_count()đếm số từ trong một chuỗi:
echo str_word_count("Hello world!"); // outputs 2
echo "<br>";
//Hàm PHP strrev()đảo ngược một chuỗi:
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";
// Hàm PHP str_replace()thay thế một số ký tự bằng một số ký tự khác trong một chuỗi.
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";

?>
<?php
// vòng switch
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";
// vòng lặp for
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

?>

<?php
// hàm chứa tham số
function familyName($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

echo "<br>";
//hàm trả về một giá trị
function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";
?>

<?php
// mảng trong php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "<br>";

// count()chức năng được sử dụng để trả lại chiều dài (số phần tử) của một mảng:
echo "chiều dài của mảng cars là : ".count($cars);


//sử dụng vòng lặp for để liệt kê các phần tử trong mảng
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

//Để lặp qua và in tất cả các giá trị của một mảng kết hợp, bạn có thể sử dụng một foreachvòng lặp, như sau
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "các phần tử trong mảng kết hợp "."Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
// PHP - Sắp xếp các hàm cho mảng
// Trong chương này, chúng ta sẽ đi qua các hàm sắp xếp mảng PHP sau đây:

// sort() - sắp xếp các mảng theo thứ tự tăng dần
// rsort() - sắp xếp các mảng theo thứ tự giảm dần
// asort() - sắp xếp các mảng liên kết theo thứ tự tăng dần, theo giá trị
// ksort() - sắp xếp các mảng liên kết theo thứ tự tăng dần, theo khóa
// arsort() - sắp xếp các mảng liên kết theo thứ tự giảm dần, theo giá trị
// krsort() - sắp xếp các mảng liên kết theo thứ tự giảm dần, theo khóa

sort($cars);
for($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>

<?php
//  GLOBALS là một biến toàn cầu siêu PHP được sử dụng để truy cập các biến toàn cầu từ bất kỳ đâu trong kịch bản lệnh PHP
$x = 75; 
$y = 25;
 
function addition() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
addition(); 
echo $z; 

//PHP $ _POST được sử dụng rộng rãi để thu thập dữ liệu biểu mẫu sau khi gửi biểu mẫu HTML 

?>
</body>
</html>