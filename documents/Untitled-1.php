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
    <?php
    include('logic\pdo.php');

    $library = $database->prepare("SELECT * FROM `library`");
    $library->execute();
    // print_r($rowlibrary);
    foreach ($library as $libratory) {


        $imageURL = '../uploads/' . $libratory['File_Name'];




    ?>

    <div class="container ">

        <div class="lib">
            <?php if ($libratory['type'] != 'صورة') { ?>
            <div class="cardi mt-20 bg-light">
                <div class="card-header bg-light color-m ">
                    <?php echo $libratory['type']; ?>
                </div>
                <div class="row card-body">
                    <div class="col-md-2 mb-3 br-15">
                        <img src="<?php echo $imageURL ?>" class="w-100 brc" alt="...">
                    </div>
                    <div class="col-md-10 m-auto ">
                        <h5 class="card-title"> <?php echo $libratory['title']; ?> </h5>
                        <p class="card-text"> <?php echo $libratory['description']; ?></p>
                        <a href="<?php echo $libratory['link']; ?>" class="btn btn-light"> المزيد </a>
                    </div>
                </div>
            </div>
            <?php } else { ?>


            <div class="cardi mt-20 bg-light">
                <div class="card-header bg-light color-m ">
                    <?php echo $libratory['type']; ?>
                </div>
                <div class="row card-body">
                    <div class="col-md-2 mb-3 br-15">
                        <img src=" <?php echo $imageURL ?>" class="w-100 brc" alt="...">
                    </div>
                    <div class="col-md-10 m-auto ">
                        <h5 class="card-title"> <?php echo $libratory['title']; ?> </h5>
                        <p class="card-text"> <?php echo $libratory['description']; ?> </p>
                    </div>
                </div>
            </div>
            <?php }
            } ?>


        </div>


    </div>
    <div class="mt-5"></div>
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