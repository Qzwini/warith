
<?php
$msg = "";
include('db.php');
include('functions.php');
// If upload button is clicked ... 
if (isset($_POST['submit'])) {
    $name = stringChecking($_POST['name']);
    $title = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $location = stringChecking($_POST['location']);
    $date = stringChecking($_POST['date']);

    echo $date;


    // Execute query 



    $sql = "INSERT INTO event (name,title,location,date,description) VALUES ('$name','$title','$location','$date','$description')";
    if ($link->query($sql) === TRUE) {

        $msg = "event uploaded successfully";
        header('Location: ../dashboard.php?active=event&message=' . $msg);
    }
} else if (isset($_POST['update'])) {
    $name = stringChecking($_POST['name']);
    $title = stringChecking($_POST['title']);
    $description = stringChecking($_POST['description']);
    $location = stringChecking($_POST['location']);
    $date = stringChecking($_POST['date']);

    $sql = "Update event SET name= '$name', title = '$title', location = '$location',date = '$date' ,description = '$description' where ID= " . $_POST['id'];
    mysqli_query($link, $sql);
    $msg = "event update successfully";
    header('Location: ../dashboard.php?active=event&message=' . $msg);
}

?> 