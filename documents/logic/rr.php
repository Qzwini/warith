<?php
$msg = "";
include('db.php');
// If upload button is clicked ... 
include('functions.php');
if (isset($_POST['submit'])) {
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $link = stringChecking($_POST['link']);
    $filename = $_FILES["imgparliament"]["name"];
    $tempname = $_FILES["imgparliament"]["tmp_name"];
    $folder = "../../uploads/" . $filename;



    // Execute query 


    // Now let's move the uploaded image into the folder: image 
    if (move_uploaded_file($tempname, $folder)) {
        // Get all the submitted data from the form 
        echo($filename);
        if (!empty($filename)) {
            $sql = "INSERT INTO parliament (name,link,File_Name,description) VALUES ('$name','$link','$filename','$description')";
            mysqli_query($link, $sql);
        }
        $msg = "parliament information uploaded successfully";
        header('Location: ../dashboard.php?active=parliament&message=' . $msg);
    } else {
        $msg = "Failed to upload image";
        header('Location: ../dashboard.php?active=parliament&message=' . $msg);
    }
} elseif (isset($_POST['update'])) {
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $link = stringChecking($_POST['link']);
    $filename = $_FILES["imgparliament"]["name"];
    $tempname = $_FILES["imgparliament"]["tmp_name"];
    $folder = "../../uploads/" . $filename;
    if (empty($filename)) {

        $imgs = $_POST['imgparliament'];
        $sql = "Update parliament SET name= '$name',link='$link' ,File_Name = '$imgs', description = '$description' where ID= " . $_POST['id'];
        mysqli_query($link, $sql);
        $msg = "parliament update successfully";
        header('Location: ../dashboard.php?active=parliament&message=' . $msg);
    } else {
        if (move_uploaded_file($tempname, $folder)) {
            // Get all the submitted data from the form 
            if (!empty($filename)) {
                $sql = "Update parliament SET name= '$name' , link='$link' ,File_Name = '$filename', description = '$description' where ID= " . $_POST['id'];;
                mysqli_query($link, $sql);
            }
            $msg = "parliament update successfully";
            header('Location: ../dashboard.php?active=parliament&message=' . $msg);
        } else {
            $msg = "Failed to upload image";
            header('Location: ../dashboard.php?active=parliament&message=' . $msg);
        }
    }
}

?>