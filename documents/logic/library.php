
<?php
$msg = "";
include('db.php');
include('functions.php');
// If upload button is clicked ... 
if (isset($_POST['submit'])) {
    $title = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $url = stringChecking($_POST['link']);
    $type = $_POST['type'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "../../uploads/" . $filename;




    // Execute query 
    if (move_uploaded_file($tempname, $folder)) {
        // Get all the submitted data from the form 
        if (!empty($filename)) {
            $sql = "INSERT INTO library (title,description,type,link,File_Name) VALUES ('$title','$description','$type','$url','$filename')";
            if ($link->query($sql) === TRUE) {

                $msg = "library uploaded successfully";
                header('Location: ../dashboard.php?active=library&message=' . $msg);
            }
        }
    } else {
        $msg = "Failed to upload image";
        header('Location: ../dashboard.php?active=news&message=' . $msg);
    }
} elseif (isset($_POST['update'])) {
    include('db.php');
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $url = stringChecking($_POST['link']);
    $type = $_POST['type'];
    $filename = $_FILES["imgnews"]["name"];
    $tempname = $_FILES["imgnews"]["tmp_name"];

    $folder = "../../uploads/" . $filename;
    if (empty($filename)) {

        $imgs = $_POST['imgnews'];
        $sql = "Update library SET title= '$name', description = '$description', type = '$type', link = '$url', File_Name = '$imgs' where ID=" . $_POST['id'];
        echo $sql;
        if ($link->query($sql) === TRUE) {
            $msg = "library update successfully";
            header('Location: ../dashboard.php?active=library&message=' . $msg);
        }
    } else {
        if (move_uploaded_file($tempname, $folder)) {
            // Get all the submitted data from the form 
            if (!empty($filename)) {
                $sql = "Update library SET title= '$name', description = '$description', type = '$type', link = '$url' , File_Name = '$filename' where ID=" . $_POST['id'];
                echo $sql;

                if ($link->query($sql) === TRUE) {
                    $msg = "library update successfully";
                    header('Location: ../dashboard.php?active=library&message=' . $msg);
                }
            }
        } else {
            $msg = "Failed to upload image";
            header('Location: ../dashboard.php?active=library&message=' . $msg);
        }
    }
}

?> 