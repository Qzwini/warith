<?php
session_start();

if (!isset($_SESSION['is_logged'])) {
    header('Location: login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/icon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/dashboard.css">

    <script src="https://kit.fontawesome.com/1c5749e405.js" crossorigin="anonymous"></script>

    <title> مؤسسة وارث الانبياء الثقافية</title>

    <style>
    .tablesorter-header-inner {
        color: #2b96a0;
    }
    </style>
</head>

<body>
    <!-- sidebar -->
    <?php include("../documents/dashboard-item/sidebar.php") ?>

    <!-- dashboard items -->
    <?php
    $dashboard_name = $_GET['active'];
    switch ($dashboard_name) {
        case "home":
            include("../documents/dashboard-item/dashboard-home.php");
            break;
        case "news":
            include("../documents/dashboard-item/dashboard-news.php");
            break;
        case "statements":
            include("../documents/dashboard-item/dashboard-statements.php");
            break;
        case "speaker":
            include("../documents/dashboard-item/dashboard-speaker.php");
            break;
        case "parliament":
            include("../documents/dashboard-item/dashboard-parliament.php");
            break;
        case "library":
            include("../documents/dashboard-item/dashboard-library.php");
            break;
        case "event":
            include("../documents/dashboard-item/dashboard-event.php");
            break;
        case "speaker-link":
            include("../documents/dashboard-item/dashboard-speaker-link.php");
            break;
        case "links":
            include("../documents/dashboard-item/dashboard-links.php");
            break;
        case "links-info":
            include("../documents/dashboard-item/dashboard-links-show.php");
            break;
        default:
            include("../documents/dashboard-item/dashboard-home.php");
    }


    ?>




    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="../scripts/jquery.tablesorter.min.js"></script>
    <script src="../scripts/jquery.tablesorter.widgets.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="../scripts/main.js"></script>
    <script>
    $(function() {
        $(".table").tablesorter();
    });
    </script>

</body>

</html>