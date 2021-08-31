<?php
$msg = "";
include('db.php');
include('functions.php');
// If upload button is clicked ... 
if (isset($_POST['submit'])) {
    $name = stringChecking($_POST['name']);
    $description = stringChecking($_POST['comment']);
    $id = $_POST['post_id'];

    $sql = "INSERT INTO comments(title,content,post_id) VALUES ('$name','$description','$id')";
    if ($link->query($sql) === TRUE) {
        $msg = " تمت اضافه التعليق بنجاح ";
        header('Location: ../news-more.php?id=' . $id . '&message=' . $msg);
    }
}
