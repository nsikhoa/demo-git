<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật sản phẩm</title>
    <script type="text/javascript" src="../js/thu_vien.js"></script>
</head>
<body>
<?php
    $arrMechandise = array();
    //Khai báo đường dẫn
    $path = "text/san_pham.txt";
    //Kiểm tra đường dẫn
    if(file_exists($path)){
        //Mở file
        $file = fopen($path, "r");
        //Duyệt file
        while(!feof($file)){
            //Đọc 1 dòng
            $line = fgets($file);
            $arrMechandise[] = $line;
        }
        fclose($file);
    }
    else{
        die("File không tồn tại");
    }
    //print_r($_FILES["file"]);
    if(isset($_POST["submit"])){
        if($_FILES["file"]["error"] == 0){
            $tmp_name = $_FILES["file"]["tmp_name"];
            $name = $_FILES["file"]["name"];
            $res = move_uploaded_file($tmp_name, "upload/image/$name");
        }
    }
?>
    <form name="Form" method="post" enctype="multipart/form-data">
        <table border="0" cellpadding="6">
            <caption>Cập nhật sản phẩm</caption>
            <tr>
                <td>Tên sản phẩm:</td>
                <td>
                    <input type="text" name="txtName" id="txtName" placeholder="Nhập tên sản phẩm">
                </td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td>
                    <input type="text" name="txtPrice" id="txtPrice" placeholder="Nhập đơn giá">VND
                </td>
            </tr>
            <tr>
                <td>Loại sản phẩm:</td>
                <td>
                    <select name="sltType" id="sltType">
                        <?php
                            foreach($arrMechandise as $work){
                        ?>
                        <option value="<?php echo $work;?>"><?php echo $work;?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Mô tả:</td>
                <td>
                    <textarea name="txaDescribe" id="txaDescribe" cols="30" rows="10" placeholder="Nhập thông tin mô tả"></textarea>
                </td>
            </tr>
            <tr>
                <td>Sản phẩm tiêu biểu:</td>
                <td>
                    <input type="checkbox" name="chkWork" id="chkWork">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Hình sản phẩm</legend>
                        <input type="file" name="file" id="file">
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input style="width:25rem; height: 2rem;" type="submit" name="submit" value="Lưu sản phẩm" onclick="return Kiem_tra_san_pham()">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>