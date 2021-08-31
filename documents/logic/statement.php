<?php
$msg = "";
include('db.php');
// If upload button is clicked ... 
include('functions.php');
if (isset($_POST['submit'])) {
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $number = stringChecking($_POST['number']);
    $filename = $_FILES["imgstatements"]["name"];
    $tempname = $_FILES["imgstatements"]["tmp_name"];
    $folder = "../../uploads/" . $filename;



    // Execute query 


    // Now let's move the uploaded image into the folder: image 
    if (move_uploaded_file($tempname, $folder)) {
        // Get all the submitted data from the form 
        if (!empty($filename)) {
            $sql = "INSERT INTO statement (name,description,number,File_Name) VALUES ('$name','$description','$number','$filename')";
            mysqli_query($link, $sql);
        }
        $msg = "statements information uploaded successfully";
        header('Location: ../dashboard.php?active=statements&message=' . $msg);
    } else {
        $msg = "Failed to upload image";
        header('Location: ../dashboard.php?active=statements&message=' . $msg);
    }
} elseif (isset($_POST['update'])) {
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $number = stringChecking($_POST['number']);
    $filename = $_FILES["imgstatements"]["name"];
    $tempname = $_FILES["imgstatements"]["tmp_name"];
    $folder = "../../uploads/" . $filename;
    if (empty($filename)) {

        $imgs = $_POST['imgstatements'];
        $sql = "Update statement SET name= '$name', description = '$description',number='$number' ,File_Name = '$imgs' where ID= " . $_POST['id'];
        mysqli_query($link, $sql);
        $msg = "statements update successfully";
        header('Location: ../dashboard.php?active=statements&message=' . $msg);
    } else {
        if (move_uploaded_file($tempname, $folder)) {
            // Get all the submitted data from the form 
            if (!empty($filename)) {
                $sql = "Update statement SET name= '$name', description = '$description', number='$number' ,File_Name = '$filename' where ID= " . $_POST['id'];;
                mysqli_query($link, $sql);
            }
            $msg = "statements update successfully";
            header('Location: ../dashboard.php?active=statements&message=' . $msg);
        } else {
            $msg = "Failed to upload image";
            header('Location: ../dashboard.php?active=statements&message=' . $msg);
        }
    }
}

?>