<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm hoa</title>
    <script src="../js/thu_vien.js"></script>
</head>
<body>
    <?php
        //Kiểm tra giá trị nhập
        if(isset($_POST["btnTim"])){
            echo "Server xử lý";
            $gt = $_POST["txtSearch"];
        }
        else{
            echo "Shiba";
        }
    ?>
    <form name="searchForm" method="post">
        <div>
            <input type="text" name="txtSearch" id="txtSearch" size="28" placeholder="Nhập giá trị cần tìm" value="<?php echo $gt;?>">
            <input type="submit" value="Tìm" name="btnTim" onclick="return Kiem_tra_tim()">
        </div>
    </form>
</body>
</html>
