
<?php
$msg = "";
include('db.php');
include('../../variables.php');
// If upload button is clicked ... 
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM speaker where ID=" . $_GET['id'];
    $result = $link->query($sql);
    $speaker = mysqli_fetch_assoc($result);
    echo $uploads_dir;
    print_r($speaker);

    $src = $uploads_dir . $speaker['File_Name'];

    if (file_exists($src)) {
        $unlink = unlink($src);
    }

    $delspeaker = "DELETE FROM speaker where ID=" . $_GET['id'];
    if ($link->query($delspeaker) === TRUE) {
        $msg = "speaker removed successfully";
        header('Location: ../dashboard.php?active=speaker&message=' . $msg);
    }
}

?> 