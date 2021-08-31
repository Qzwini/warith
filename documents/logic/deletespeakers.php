
<?php
$msg = "";
include('db.php');
include('../../variables.php');
// If upload button is clicked ... 
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM speakers where ID=" . $_GET['id'];
    $result = $link->query($sql);
    $speakers = mysqli_fetch_assoc($result);

    $delstatement = "DELETE FROM speakers where ID=" . $_GET['id'];
    if ($link->query($delstatement) === TRUE) {
        $msg = "speakers removed successfully";
        header('Location: ../dashboard.php?active=speaker-link&message=' . $msg);
    }
}


?> 