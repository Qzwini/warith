<?php
$msg = "";
include('db.php');
include('functions.php');
// If upload button is clicked ... 
if (isset($_POST['submit'])) {
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $linki = stringChecking($_POST['linki']);
    $filename = $_FILES["imgnews"]["name"];
    $tempname = $_FILES["imgnews"]["tmp_name"];
    $date = date("Y/m/d");
    $folder = "../../uploads/" . $filename;



    // Execute query 


    // Now let's move the uploaded image into the folder: image 
    if (move_uploaded_file($tempname, $folder)) {
        // Get all the submitted data from the form 
        if (!empty($filename)) {
            $sql = "INSERT INTO news (name,description,date,File_Name,linki) VALUES ('$name','$description','$date','$filename','$linki')";
            mysqli_query($link, $sql);
        }
        $msg = "news uploaded successfully";
        header('Location: ../dashboard.php?active=news&message=' . $msg);
    } else {
        $msg = "Failed to upload image";
        header('Location: ../dashboard.php?active=news&message=' . $msg);
    }
} elseif (isset($_POST['update'])) {
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $linki = stringChecking($_POST['linki']);
    $filename = $_FILES["imgnews"]["name"];
    $tempname = $_FILES["imgnews"]["tmp_name"];
    $date = date("Y/m/d");
    $folder = "../../uploads/" . $filename;
    if (empty($filename)) {

        $imgs = $_POST['imgnews'];
        $sql = "Update news SET name= '$name', description = '$description', date = '$date', linki = '$linki',File_Name = '$imgs' where ID= " . $_POST['id'];
        mysqli_query($link, $sql);
        $msg = "news update successfully";
        header('Location: ../dashboard.php?active=news&message=' . $msg);
    } else {
        if (move_uploaded_file($tempname, $folder)) {
            // Get all the submitted data from the form 
            if (!empty($filename)) {
                $sql = "Update news SET name= '$name', description = '$description', date = '$date', linki = '$linki',File_Name = '$filename' where ID= " . $_POST['id'];;
                mysqli_query($link, $sql);
            }
            $msg = "news update successfully";
            header('Location: ../dashboard.php?active=news&message=' . $msg);
        } else {
            $msg = "Failed to upload image";
            header('Location: ../dashboard.php?active=news&message=' . $msg);
        }
    }
}

?>