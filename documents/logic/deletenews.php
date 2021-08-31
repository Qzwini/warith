
<?php
$msg = "";
include('db.php');
include('../../variables.php');
// If upload button is clicked ... 
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM news where ID=" . $_GET['id'];
    $result = $link->query($sql);
    $news = mysqli_fetch_assoc($result);
    echo $uploads_dir;
    print_r($news);

    $src = $uploads_dir . $news['File_Name'];

    if (file_exists($src)) {
        $unlink = unlink($src);
    }


    $delnews = "DELETE FROM news where ID=" . $_GET['id'];
    if ($link->query($delnews) === TRUE) {
        $msg = "news removed successfully";
        header('Location: ../dashboard.php?active=news&message=' . $msg);
    }
}

?> 