<?php
$msg = "";
echo "hhhhhhhhhhhh";
include('db.php');
// If upload button is clicked ... 
include('functions.php');
if (isset($_POST['submit'])) {
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $linki = stringChecking($_POST['linki']);
    $filename = $_FILES["imgspeaker"]["name"];
    $tempname = $_FILES["imgspeaker"]["tmp_name"];
    $folder = "../../uploads/" . $filename;



    // Execute query 


    // Now let's move the uploaded image into the folder: image 
    if (move_uploaded_file($tempname, $folder)) {
        // Get all the submitted data from the form 
        if (!empty($filename)) {
            $sql = "INSERT INTO speaker (name,description,linki,File_Name) VALUES ('$name','$description','$linki','$filename')";
            mysqli_query($link, $sql);
        }
        $msg = "speaker information uploaded successfully";
        header('Location: ../dashboard.php?active=speaker&message=' . $msg);
    } else {
        $msg = "Failed to upload image";
        header('Location: ../dashboard.php?active=speaker&message=' . $msg);
    }
} elseif (isset($_POST['update'])) {
    $name = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $description = stringChecking($_POST['linki']);
    $filename = $_FILES["imgnews"]["name"];
    $tempname = $_FILES["imgnews"]["tmp_name"];
    $folder = "../../uploads/" . $filename;
    if (empty($filename)) {

        $imgs = $_POST['imgnews'];
        $sql = "Update speaker SET name= '$name', description = '$description',linki='$linki' ,File_Name = '$imgs' where ID= " . $_POST['id'];
        mysqli_query($link, $sql);
        $msg = "speaker update successfully";
        header('Location: ../dashboard.php?active=speaker&message=' . $msg);
    } else {
        if (move_uploaded_file($tempname, $folder)) {
            // Get all the submitted data from the form 
            if (!empty($filename)) {
                $sql = "Update speaker SET name= '$name', description = '$description', linki='$linki' ,File_Name = '$filename' where ID= " . $_POST['id'];;
                mysqli_query($link, $sql);
            }
            $msg = "speaker update successfully";
            header('Location: ../dashboard.php?active=speaker&message=' . $msg);
        } else {
            $msg = "Failed to upload image";
            header('Location: ../dashboard.php?active=speaker&message=' . $msg);
        }
    }
}

?>