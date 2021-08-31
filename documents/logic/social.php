<?php
include('db.php');
include('functions.php');
if (isset($_POST['social-uploads'])) {
    $tele =  $_POST['telegram'];
    $twitter =  $_POST['twitter'];
    $youtube =  $_POST['youtube'];
    $facebook =  $_POST['facebook'];
    $instagram =  $_POST['instagram'];
    $about =  stringChecking($_POST['about']);
    $addSocial = "INSERT INTO social (name, value)
    VALUES ('telegram', '$tele')";
    if ($link->query($addSocial) === TRUE) {
    }
    $addtwitter = "INSERT INTO social (name, value)
    VALUES ('twitter', '$twitter')";
    if ($link->query($addtwitter) === TRUE) {
    }
    $addyoutube = "INSERT INTO social (name, value)
    VALUES ('youtube', '$youtube')";
    if ($link->query($addyoutube) === TRUE) {
    }
    $addfacebook = "INSERT INTO social (name, value)
    VALUES ('facebook', '$facebook')";
    if ($link->query($addfacebook) === TRUE) {
    }
    $addinstagram = "INSERT INTO social (name, value)
    VALUES ('instagram', '$instagram')";
    if ($link->query($addinstagram) === TRUE) {
    }
    $addabout = "INSERT INTO social (name, value)
    VALUES ('about', '$about')";
    if ($link->query($addabout) === TRUE) {
        $msg = "Social Information added successfully";
        header('Location: ../dashboard.php?active=home&message=' . $msg);
    }
} else if (isset($_POST['social-update'])) {
    include('db.php');

    $tele =  trim($_POST['telegram']);
    $twitter =  trim($_POST['twitter']);
    $youtube =  trim($_POST['youtube']);
    $facebook =  trim($_POST['facebook']);
    $instagram =  trim($_POST['instagram']);
    $about =  stringChecking($_POST['about']);


    $addSocial = "UPDATE social SET value = '$tele' WHERE name= 'telegram'";
    if ($link->query($addSocial) === TRUE) {
    } else {
        echo $addSocial;
    }
    $addtwitter = "UPDATE social SET value = '$twitter' WHERE name= 'twitter'";
    if ($link->query($addtwitter) === TRUE) {
    }
    $addyoutube = "UPDATE social SET value = '$youtube' WHERE name= 'youtube'";
    if ($link->query($addyoutube) === TRUE) {
    }
    $addfacebook = "UPDATE social SET value = '$facebook' WHERE name= 'facebook'";
    if ($link->query($addfacebook) === TRUE) {
    }
    $addinstagram = "UPDATE social SET value = '$instagram' WHERE name= 'instagram'";
    if ($link->query($addinstagram) === TRUE) {
    }
    $addabout = "UPDATE social SET value = '$about' WHERE name= 'about'";
    if ($link->query($addabout) === TRUE) {
        $msg = "Social Information updated successfully";
        header('Location: ../dashboard.php?active=home&message=' . $msg);
    }
}
