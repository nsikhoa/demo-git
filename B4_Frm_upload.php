<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form upload</title>
    <script src="../js/thu_vien.php"></script>
</head>
<body>
<script>
    function Kiem_tra_file_upload(){
    var file1 = document.getElementById("file");
    if(Larong(file1.value)){
        alert("Vui lòng tải file lên");
        return false;
    }
    return true;
}
</script>

<?php
    $slt = $_POST["sltFile"];
    $arrFile = array(); //mảng chứa tên thư mục
    //Khai báo đường dẫn
    $path = "upload";
    //Kiểm tra đường dẫn
    if(is_dir($path)){
        //Mở thư mục
        $dir = opendir($path) or die("Lỗi mở thư mục");
        //Duyệt thư mục
        while($_dir = readdir($dir)){
            if($_dir != ".." && $_dir != ".")
            $arrFile[] = $_dir;
        }
        closedir($dir);
    }
    
    if(isset($_POST["submit"])){
        if($_FILES["file"]["error"] == 0){
            $tmp_name = $_FILES["file"]["tmp_name"];
            $name = $_FILES["file"]["name"];
            $res = move_uploaded_file($tmp_name, "upload/$slt/$name");
        }
    }
    
?>
    <form name="form" method="post" enctype="multipart/form-data">
        <table border="0" cellpadding="5">
            <caption>Upload files</caption>
            <tr>
                <td colspan="2">
                    <input type="file" name="file" id="file">
                </td>
            </tr>
            <tr>
                <td>
                    Chọn thư mục upload: 
                </td>
                <td>
                    <select name="sltFile" id="sltFile">
                        <?php
                            foreach($arrFile as $folder){
                        ?>
                        <option value="<?php echo $folder; ?>"><?php echo $folder;?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name="submit" value="Upload" onclick="return Kiem_tra_file_upload()">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>