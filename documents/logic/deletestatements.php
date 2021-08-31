
<?php
$msg = "";
include('db.php');
include('../../variables.php');
// If upload button is clicked ... 
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM statement where ID=" . $_GET['id'];
    $result = $link->query($sql);
    $statement = mysqli_fetch_assoc($result);

    $delstatement = "DELETE FROM statement where ID=" . $_GET['id'];
    if ($link->query($delstatement) === TRUE) {
        $msg = "statement removed successfully";
        header('Location: ../dashboard.php?active=statements&message=' . $msg);
    }
}


?> 