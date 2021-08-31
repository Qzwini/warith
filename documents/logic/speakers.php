
<?php
$msg = "";

// If upload button is clicked ... 
include('functions.php');
if (isset($_POST['submit'])) {

    include('db.php');
    $name = stringChecking($_POST['speakername']);
    $description = stringChecking($_POST['description']);
    $url = stringChecking($_POST['link']);


    // Execute query 


    $sql = "INSERT INTO speakers(name,link,description) VALUES ('$name','$url','$description')";
    if ($link->query($sql) === TRUE) {
        $msg = "speaker information uploaded successfully";
        header('Location: ../dashboard.php?active=speaker-link&message=' . $msg);
    }
} elseif (isset($_POST['update'])) {
    include('db.php');
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $url = stringChecking($_POST['link']);

    $sql = "Update speakers SET name= '$name', description = '$description',link = '$url' where ID= " . $_POST['id'];
    mysqli_query($link, $sql);
    $msg = "speakers update successfully";
    header('Location: ../dashboard.php?active=speaker-link&message=' . $msg);
}

?> 