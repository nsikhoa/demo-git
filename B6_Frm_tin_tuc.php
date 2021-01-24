<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tin tức sản phẩm</title>
    <script type="text/javascript" src="../js/thu_vien.js"></script>
</head>
<body>
<?php
    if(isset($_POST["submit"])){
        if($_FILES["file"]["error"] == 0){
            $tmp_name = $_FILES["file"]["tmp_name"];
            $name = $_FILES["file"]["name"];
            $res = move_uploaded_file($tmp_name, "upload/image/$name");
        }
        else{
            die("Lỗi mở file");
        }
    }
?>
    <form action="B6_Frm_tin_tuc.php" method="post" enctype="multipart/form-data">
        <table border="0" cellpadding="4">
            <caption>Cập nhật tin tức sản phẩm</caption>
            <tr>
                <td>Tiêu đề: </td>
                <td>
                    <input type="text" name="txtTopic" id="txtTopic" size="48" placeholder="Nhập tiêu đề">
                </td>
            </tr>
            <tr>
                <td>Nội dung: </td>
                <td>
                    <textarea name="txaContent" id="txaContent" placeholder="Nhập nội dung" cols="50" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Hình tin tức</legend>
                        <input type="file" name="file" id="file">
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input style="width:100%; height:2rem;" type="submit" name="submit" value="Lưu tin tức" onclick="return Kiem_tra_tin_tuc()">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>