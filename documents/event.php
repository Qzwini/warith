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
    <link rel="stylesheet" href="../styles/event.css">


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

    $results = $database->prepare("SELECT * FROM `event`");
    $results->execute();



    ?>
    <!-- body  -->
    <section class="container">

        <div class="row">
            <h1>مؤتمرات</h1>
            <?php foreach ($results  as $result) {
                $time = strtotime($result['date']);
                $monthformat = date('F', $time);
                $dayformat = date('d', $time);
            ?>
            <div class="col-md-6 col-sm-6 ">
                <article class="card fl-left">
                    <section class="date">
                        <time datetime="23th feb">
                            <span><?php echo $dayformat; ?></span><span><?php echo substr($monthformat, 0, 3); ?></span>
                        </time>
                    </section>
                    <section class="card-cont">
                        <small><?php echo $result['name'] ?></small>
                        <h3 class=" "><?php echo $result['title'] ?> </h3>
                        <span class="mtb-10"> <?php echo $result['description'] ?></span>
                        <div class="even-date">
                            <i class="fa fa-calendar"></i>
                            <time class="pr-1">
                                <span> <?php echo $result['date'] ?> </span>
                            </time>
                        </div>
                        <div class="even-info">
                            <i class="fa fa-map-marker"></i>
                            <p><?php echo $result['location'] ?>
                            </p>
                        </div>
                        <!-- <a href="#">tickets</a> -->
                    </section>

                </article>

            </div>
            <?php
            }
            ?>
        </div>

    </section>
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