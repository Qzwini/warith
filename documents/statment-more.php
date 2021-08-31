<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="../images/icon/favicon.ico" type="image/x-icon">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-mUkCBeyHPdg0tqB6JDd+65Gpw5h/l8DKcCTV2D2UpaMMFd7Jo8A+mDAosaWgFBPl" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="../styles/style.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/1c5749e405.js" crossorigin="anonymous"></script>
    <!-- title -->
    <title> مؤسسة وارث الانبياء الثقافية</title>
</head>

<body>
    <!-- navebar -->
    <?php include("../documents/global/nav.php") ?>
    <?php include("logic/pdo.php"); ?>

    <?php

    $results = $database->prepare("SELECT * FROM `statement` where ID=" . $_GET['id']);
    $results->execute();

    foreach ($results  as $result) {

    ?>

    <!-- body  -->
    <div class="container">

        <div class="card w-100 mt-5 mb-5">
            <div class="card-header">
                بيان رقم
                <?PHP echo $result['number'] ?>
            </div>
            <div class="card-body">
                <h6 class="card-title"> <?php echo $result['name']; ?> </h6>
                <p class="card-text"> <?php echo $result['description']; ?> </p>
            </div>

        </div>


    </div>
    <?PHP

    }

    ?>
    <!-- footer  -->
    <div class="footer">
        <?php include("../documents/global/footer.php") ?>
    </div>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

</body>

</html>