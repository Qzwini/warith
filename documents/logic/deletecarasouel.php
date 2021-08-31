
<?php
$msg = "";
include('db.php');
include('../../variables.php');
// If upload button is clicked ... 
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM images where ID=" . $_GET['id'];
    $result = $link->query($sql);
    $image = mysqli_fetch_assoc($result);
    echo $uploads_dir;

    $src = $uploads_dir . $image['File_Name'];

    if (file_exists($src)) {
        $unlink = unlink($src);
    }

    $delImage = "DELETE FROM images where ID=" . $_GET['id'];
    if ($link->query($delImage) === TRUE) {
        $msg = "Image removed successfully";
        header('Location: ../dashboard.php?active=home&message=' . $msg);
    }
}

?> 