<?php
$msg = "";

// If upload button is clicked ... 
include('functions.php');
if (isset($_POST['submit'])) {

    include('db.php');
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $url = stringChecking($_POST['link']);


    // Execute query 


    $sql = "INSERT INTO parliament(name,link,description) VALUES ('$name','$url','$description')";
    if ($link->query($sql) === TRUE) {
        $msg = "perlamant information uploaded successfully";
        header('Location: ../dashboard.php?active=parliament&message=' . $msg);
    }
} else if (isset($_POST['update'])) {

    include('db.php');
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $url = stringChecking($_POST['link']);
    print_r($_POST);

    $sql = "Update parliament SET name= '$name', link = '$url',  description = '$description' where ID= " . $_POST['id'];
    if ($link->query($sql) === TRUE) {
        $msg = "perlamant update successfully";
        header('Location: ../dashboard.php?active=parliament&message=' . $msg);
    }
    // mysqli_query($link, $sql);

}