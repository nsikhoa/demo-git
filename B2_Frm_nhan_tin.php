<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký nhận tin</title>
    <script src="../js/thu_vien.js"></script>
</head>
<?php
    if(isset($_POST["submit"])){
        $name = $_POST["txtName"];
        $email = $_POST["txtEmail"];
        $code = $_POST["txtCode"];
        echo "Server xử lý";
    }
?>

<body>
    <form name="form" method="post">
        <table border="0" cellpadding="1">
            <caption>Đăng ký nhận tin</caption>
            <tr>
                <td>Họ tên</td>
                <td>
                    <input type="text" name="txtName" id="txtName" placeholder="Nhập họ tên">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="txtEmail" id="txtEmail" placeholder="Nhập Email">
                </td>
            </tr>
            <tr>
                <td>Nhập code</td>
                <td>
                    <input type="text" name="txtCode" id="txtCode" placeholder="Nhập Code">
                    <img src="../images/Capture.png" style="width:150px; position:relative; top:10px;">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Gửi" name="submit" onclick="return Kiem_tra_dang_ky_tin()">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>