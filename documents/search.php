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
    <?php include("logic/db.php"); ?>


    <?php



    $search =  trim($_POST['searchtext']);

    $statement = "SELECT * FROM statement WHERE statement.description LIKE '%$search%' OR statement.name LIKE '%$search%'";
    $parliament = "SELECT * FROM parliament WHERE parliament.description LIKE '%$search%' OR parliament.name LIKE '%$search%'";
    $news = "SELECT * FROM news WHERE news.description LIKE '%$search%' OR news.name LIKE '%$search%'";
    $speaker = "SELECT * FROM speaker WHERE speaker.description LIKE '%$search%' OR speaker.name LIKE '%$search%'";
    $library = "SELECT * FROM library WHERE library.description LIKE '%$search%' OR library.title LIKE '%$search%'";
    $event = "SELECT * FROM event WHERE event.description LIKE '%$search%' OR event.title LIKE '%$search%'";

    $statement_res = $link->query($statement);

    // $rownews = $se->fetch_assoc();
    ?>
    <div class="container">
        <div class="row">
            <?php

            while ($statement_data = mysqli_fetch_assoc($statement_res)) {



            ?>







            <div class="col-sm">
                <div class="card">
                    <div class="card-header bg-m">
                        بيان رقم
                        <?php echo $statement_data['number'] ?>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title"> <?php echo $statement_data['name'] ?></h6>
                        <p class="card-text"> <?php $description = substr($statement_data['description'], 0, 150);
                                                    $desc = substr($description, 0, strrpos($description, ' ')) . '...';

                                                    echo $desc;

                                                    ?></p>
                        <?php echo ' <a href="statment-more.php?id=' . $statement_data['ID'] . '  " class="btn btn-warning col-white"> قراءة المزيد </a>'; ?>
                    </div>

                </div>
            </div>

            <?php } ?>



        </div>
    </div>

    <?php
    $news_res = $link->query($news);


    ?>

    <div class="container mt-10">
        <div class="row ">
            <?php while ($news_data = mysqli_fetch_assoc($news_res)) { ?>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="imgnews">
                        <img src="<?php echo '../uploads/' . $news_data['File_Name'] ?>" class="card-img-top imgnews"
                            alt="...">
                    </div>
                    <div class="card-body news">

                        <p class="dayt cm"><?php echo $news_data['date'] ?></p>

                        <b class="card-title"><?php echo $news_data['name'] ?></b>



                        <p class="card-text mt-2"><?php $description = substr($news_data['description'], 0, 150);
                                                        $desc = substr($description, 0, strrpos($description, ' ')) . '...';

                                                        echo $desc; ?></p>
                        <a href="./news-more.php?id=<?php echo $news_data['ID'] ?>" class="btn btn-light"> قراءة المزيد
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php

            $speaker_res = $link->query($speaker);

            ?>

            <div class="container ">

                <div class="col-lg mt-20">

                    <center>
                        <?php while ($speaker_data = mysqli_fetch_assoc($speaker_res)) {  ?>
                        <a href="./speaker-more.php?id=<?php echo $speaker_data['ID'] ?>"><img
                                style="width:280px; height:280px"
                                src="<?php echo '../uploads/' . $speaker_data['File_Name']; ?>" class="rounded sp"
                                alt="..."></a>
                        <?php } ?>
                    </center>

                </div>


                <?php

                $library_res = $link->query($library);

                ?>
                <div class="container ">


                    <?php while ($libratory = mysqli_fetch_assoc($library_res)) {


                        $imageURL = '../uploads/' . $libratory['File_Name'];
                        if ($libratory['type'] != 'صورة') {
                    ?>
                    <div class="lib">
                        <div class="cardi mt-20 bg-light">
                            <div class="card-header bg-light color-m ">
                                <?php echo $libratory['type']; ?>
                            </div>
                            <div class="row card-body">
                                <div class="col-md-6">
                                    </a>
                                    <a href="<?php echo $libratory['link']; ?>"> <img src="<?php echo $imageURL ?>"
                                            class="imglib" alt="..." style="height: 300px; width : 500px">
                                    </a>
                                </div>
                                <div class="col-md-5">
                                    <h5 class="card-title"> <?php echo $libratory['title']; ?> </h5>
                                    <p class="card-text" style="   overflow: hidden;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp: 5; /* number of lines to show */
-webkit-box-orient: vertical;
                        "> <?php echo $libratory['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    } ?>

                    <?php




                    while ($libratory = mysqli_fetch_assoc($library_res)) {


                        $imageURL = '../uploads/' . $libratory['File_Name'];
                        if ($libratory['type'] == 'صورة') {
                    ?>

                    <br> <br>
                    <div class="cardi mt-20 bg-light">
                        <div class="card-header bg-light color-m ">
                            <?php echo $libratory['type']; ?>
                        </div>
                        <div class="row card-body">
                            <div class="col-md-2 mb-3 br-15">
                                <img src=" <?php echo $imageURL ?>" style="height: 130px; width : 68px"
                                    class="w-100 brc" alt="...">
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

                <?php

                $event_res = $link->query($event);

                ?>

                <div class="row">

                    <?php

                    while ($result = mysqli_fetch_assoc($event_res)) {
                        $time = strtotime($result['date']);
                        $monthformat = date('F', $time);
                        $dayformat = date('d', $time);
                    ?>
                    <h1>مؤتمرات</h1>
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

                <!-- js bootstrap -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
                    crossorigin="anonymous">
                </script>

</body>

</html>