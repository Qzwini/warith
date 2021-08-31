<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/icon/favicon.ico" type="image/x-icon">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-mUkCBeyHPdg0tqB6JDd+65Gpw5h/l8DKcCTV2D2UpaMMFd7Jo8A+mDAosaWgFBPl" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/event.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/1c5749e405.js" crossorigin="anonymous"></script>
    <!-- title -->
    <title> مؤسسة وارث الانبياء الثقافية</title>
</head>

<body>

    <?php include("global/nav.php") ?>

    <?php include("global/carousel.php") ?>

    <div class="container">


        <h3 class="mt-5">
            مجلة ص والقرأن ذي الذكر
        </h3>
        <div class="hr5"></div>
        <div class="news-home mt-2">
            <div class="row ">

                <?php
                include('logic\db.php');
                $sql = "SELECT * FROM news order by Id desc";
                $news = $link->query($sql);
                $i = 0;
                while ($rownews = $news->fetch_array()) {
                    $imageURL = '../uploads/' . $rownews['File_Name'];
                    if ($i < 5) { ?>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card">
                        <div class="imgnews">
                            <img src="<?php echo $imageURL; ?>" class="card-img-top imgnews" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <b class="card-title"><?php echo $rownews['name'] ?> </b>
                            </div>
                            <p class="card-text"> <?php $description = substr($rownews['description'], 0, 200);
                                                            $desc = substr($description, 0, strrpos($description, ' ')) . '...';
                                                            echo $desc; ?> </p>
                            <div class="row">
                                <div class="col">
                                    <a href="<?php echo $rownews['linki'] ?>" class="btn btn-light"> تحميل </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?php
                        $i++;
                    }
                } ?>
            </div>
        </div>
        <?php
        ?>


        <h3 class="mt-5">
            الوارثون
        </h3>
        <div class="hr5"></div>
        <div class="news-home mt-2">
            <div class="row ">

                <?php
                include('logic\db.php');
                $sql = "SELECT * FROM parliament order by Id desc";
                $parliament = $link->query($sql);
                $i = 0;
                while ($rowparliament = $parliament->fetch_array()) {
                    $imageURL = '../uploads/' . $rowparliament['File_Name'];
                    if ($i < 5) { ?>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card">
                        <div class="imgnews">
                            <img src="<?php echo $imageURL; ?>" class="card-img-top imgnews" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <b class="card-title"><?php echo $rowparliament['name'] ?> </b>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="<?php echo $rowparliament['link'] ?>" class="btn btn-light"> تحميل </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?php
                        $i++;
                    }
                } ?>
            </div>
        </div>
        <?php
        ?>


        <h3 class="mt-5">
            الارشيف
        </h3>
        <div class="hr5"></div>
        <div class="news-home mt-2">
            <div class="row ">

                <?php
                include('logic\db.php');
                $sql = "SELECT * FROM statement order by Id desc";
                $statement = $link->query($sql);
                $i = 0;
                while ($rowstatement = $statement->fetch_array()) {
                    $imageURL = '../uploads/' . $rowstatement['File_Name'];
                    if ($i < 5) { ?>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card">
                        <div class="imgnews">
                            <img src="<?php echo $imageURL; ?>" class="card-img-top imgnews" alt="...">
                        </div>
                        <div style="padding:5px;">
                            <b><?php echo $rowstatement['number'] ?> </b>

                        </div>

                    </div>
                </div>
                <br>
                <?php
                        $i++;
                    }
                } ?>
            </div>
        </div>
        <?php
        ?>




    </div>


    <div class="footer mt--1">
        <?php include("global/footer.php") ?>

    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <!-- <script src="./scripts/script.js"></script> -->
    <!-- Option 2: Separate Popper.js and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        -->
    <script type="module" src="/node_modules/youtube-video-js/dist/youtube-video.js"></script>
</body>

</html>