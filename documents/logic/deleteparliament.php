
<?php
$msg = "";
include('db.php');
include('../../variables.php');
// If upload button is clicked ... 
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM parliament where ID=" . $_GET['id'];
    $result = $link->query($sql);
    $parliament = mysqli_fetch_assoc($result);


    $delparliament = "DELETE FROM parliament where ID=" . $_GET['id'];
    if ($link->query($delparliament) === TRUE) {
        $msg = "parliament removed successfully";
        header('Location: ../dashboard.php?active=parliament&message=' . $msg);
    }
}


?> 