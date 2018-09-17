<?php  
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "File ". basename( $_FILES["fileToUpload"]["name"]). " Berhasil di Upload.<br>";
        $file_name = basename( $_FILES["fileToUpload"]["name"]);
    } 
    else {
        echo "Sorry, File Gagal Di Upload";
    }
?>
<img src="<?php echo $target_dir.$file_name;?>">
