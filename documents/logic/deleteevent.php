
<?php
$msg = "";
include('db.php');
include('../../variables.php');
// If upload button is clicked ... 
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM event where ID=" . $_GET['id'];
    $result = $link->query($sql);
    $event = mysqli_fetch_assoc($result);


    $delevent = "DELETE FROM event where ID=" . $_GET['id'];
    if ($link->query($delevent) === TRUE) {
        $msg = "event removed successfully";
        header('Location: ../dashboard.php?active=event&message=' . $msg);
    }
}


?> 