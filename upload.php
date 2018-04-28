<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!--Biểu mẫu cũng cần thuộc tính sau: enctype = "multipart / form-data". Nó chỉ định loại nội dung sẽ sử dụng khi gửi biểu mẫu -->

    <form action="upload.php" method="post" enctype ="multipart /form-data">
    <input type="file" id="upfile" name="upfile">
    <input type="submit" value="submit" name="submit">
    </form>
    <?php
// $ target_dir = "uploads /" - chỉ định thư mục nơi tệp sẽ được đặt
// $ target_file chỉ định đường dẫn của tệp được tải lên
// $ uploadOk = 1 chưa được sử dụng (sẽ được sử dụng sau)
// $ imageFileType giữ phần mở rộng của tệp (trong trường hợp thấp hơn)
$target_dir = "Document/";
$target_file= $target_dir.basename($_FILES['upfile']['name']);
$uploadOk =1;
$imageFileType =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//check if image file is a actual image or fake image
if(isset($_POST['submit'])){
    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if($check !==false){
        echo "file is an image -" . $check["mime"];
        $uploadOk =1;
    }else{
        echo "file is not an image";
        $uploadOk =0;
    }

}
?>
</body>
</html>
