
<?php
session_start();
ob_start();
if ($_SESSION['is_logged'] == true) {
    echo "true";
    // header('Location: File/index.php');
}
include('db.php');

if (isset($link)) {
    if (isset($_POST['submit'])) {
        $name = $link->real_escape_string($_POST['username']);
        $password = $link->real_escape_string($_POST['password']);
        $password = md5($password);
        $sq = "SELECT * FROM users WHERE User_Name='$name' AND Password='$password' ";
        $result = mysqli_query($link, $sq);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['is_logged'] = true;
            $_SESSION['name'] = $row['User_Name'];
            header('Location: ../dashboard.php?active=home');





            // 
        } else {
            header('Location: ../../index.php');
        }
    }
} else {
    echo "not connected";
}


?>