
<?php
$msg = "";
include('db.php');
include('../../variables.php');
// If upload button is clicked ... 
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM links where ID=" . $_GET['id'];
    $result = $link->query($sql);
    $links = mysqli_fetch_assoc($result);


    $dellinks = "DELETE FROM links where ID=" . $_GET['id'];
    if ($link->query($dellinks) === TRUE) {
        $msg = "dellinks removed successfully";
        header('Location: ../dashboard.php?active=links&message=' . $msg);
    }
}


?> 