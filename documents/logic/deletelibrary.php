
<?php
$msg = "";
include('db.php');
include('../../variables.php');
// If upload button is clicked ... 
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM library where ID=" . $_GET['id'];
    $result = $link->query($sql);
    $library = mysqli_fetch_assoc($result);


    $src = $uploads_dir . $library['File_Name'];

    if (file_exists($src)) {
        $unlink = unlink($src);
    }

    $dellibrary = "DELETE FROM library where ID=" . $_GET['id'];
    if ($link->query($dellibrary) === TRUE) {
        $msg = "library removed successfully";
        header('Location: ../dashboard.php?active=library&message=' . $msg);
    }
}

?> 