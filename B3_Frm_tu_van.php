<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tư vấn</title>
    <script src="../js/thu_vien.js"></script>
</head>
<body>
<?php
    if(isset($_POST["submit"])){
        echo "Server xử lý";
    }
?>
    <form name="Form" method="post">
        <table border="0" cellpadding="20">
            <caption>Cập nhật tư vấn</caption>
            <tr>
                <td><label>Nick name:</label></td>
                <td>
                    <input type="text" name="txtNick" id="txtNick" placeholder="Nhập nick name">
                </td>
            </tr>
            <tr>
                <td><label>Info:</label></td>
                <td>
                    <input type="text" name="txtInfo" id="txtInfo" placeholder="Nhập thông tin">
                </td>
            </tr>
            <tr>
                <td><label>Icon:</label></td>
                <td>
                    <select name="sltIcon" id="sltIcon">
                        <option value="0">--Chọn icon--</option>
                        <?php 
                            for($i = 1; $i < 25; $i++){
                        ?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name="submit" value="Cập nhật" onclick="return Kiem_tra_tu_van()">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>