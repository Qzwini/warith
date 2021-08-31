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

<body class="speaker bg-white">
    <!-- navebar -->
    <?php include("../documents/global/nav.php") ?>
    <?php include("logic/pdo.php"); ?>

    <?php

    // $sql = "SELECT o.ID,o.name, O.link, O.description, c.name as username, c.File_Name as image FROM 
    // speaker c, speakers o WHERE c.ID = o.name";

    $results = $database->prepare("SELECT * FROM `speaker` where ID=" . $_GET['id']);
    $results->execute();

    foreach ($results  as $result) {

    ?>

    <!-- body  -->
    <div class="container">
        <div class="speaker h-40">
            <div class="row position-relative hight-250 ">
                <div class="col-md-3 justify-content-center">
                    <a href="./speaker-more.php"><img src="<?php echo '../uploads/' . $result['File_Name'] ?>"
                            class="rounded pic-spec" alt="..."></a>
                </div>
                <div class="col-md-9 mtb-auto c-white  ">
                    <h4> <?php echo $result['name'] ?> </h4>
                    <h6>
                        <?php echo $result['description'] ?>
                    </h6>
                    <div class="col mt-3">
                        <a href="<?php echo $result['linki'] ?>" class="btn btn-light"> تحميل </a>


                    </div>

                </div>
            </div>
        </div>
        <?php
    }
        ?>

        <div class="body-speaker mb-5">
            <?php
            $results = $database->prepare("SELECT * FROM `speakers` where name=" . $_GET['id']);
            $results->execute();

            foreach ($results  as $result) {

            ?>
            <div class="hri"></div>
            <div class="row g-0 bg-light position-relative ">
                <div class="col-md-4 mb-md-0 p-md-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="<?php echo $result['link'] ?>" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-8 p-4 ps-md-0 mtb-auto">
                    <h6>
                        <?php echo $result['description'] ?>
                    </h6>
                </div>

            </div>
            <?php } ?>
        </div>



    </div>


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