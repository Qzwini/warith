<?php
ob_start();
?>
<?php
$msg = "";
include('db.php');
// If upload button is clicked ... 
if (isset($_POST['submit'])) {
    print_r($_POST);
    $filename = $_FILES["imgcar"]["name"];
    $tempname = $_FILES["imgcar"]["tmp_name"];
    $title = $link->real_escape_string(trim($_POST['title']));
    $description = $link->real_escape_string(trim($_POST['description']));
    $url = $link->real_escape_string(trim($_POST['link']));
    $folder = "../../uploads/" . $filename;
    //Get all the submitted data from the form 
    if (!empty($filename)) {
        $sql = "INSERT INTO images (File_Name,title,description,link) VALUES ('$filename','$title','$description','$url')";
        echo $sql;
        mysqli_query($link, $sql);
    }


    // // Execute query 


    // // Now let's move the uploaded image into the folder: image 
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
        header('Location: ../dashboard.php?active=home&message=' . $msg);
    } else {
        $msg = "Failed to upload image";
        header('Location: ../dashboard.php?active=home&message=' . $msg);
    }
}

?> 