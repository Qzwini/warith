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
    include('logic\db.php');
    $sql = "SELECT * FROM news where ID=" . $_GET['id'];
    $news = $link->query($sql);
    $news_data = array();
    $news_images = array();
    $rownews = $news->fetch_assoc();

    $imageURL = '../uploads/' . $rownews['File_Name'];




    ?>
    <?php
    if (isset($_GET['message'])) {
        echo '
        <div class="alert alert-success" role="alert">';
        echo $_GET['message'];
        echo '</div>';
    }

    ?>



    <div class="container mt-20">
        <img src="<?php echo $imageURL; ?>" class="img-fluid wall" alt="...">
        <!-- body  -->
        <div class="row mt-20">
            <div class="col">
                <h4 class="cm"> <?php echo $rownews['name'] ?> </h4>
            </div>




            <div class="col">
                <h5 class="dayt cm"><?php if ($rownews['date'] == null) {
                                        echo "";
                                    } else {
                                        echo $rownews['date'];
                                    } ?></h5>
            </div>

        </div>
        <div class="disc">
            <p><?php echo $rownews['description'] ?> </p>
        </div>

        <div class="row">
            <a href="<?php echo $rownews['linki'] ?>" class="btn btn-outline-white btn-linki" target="_blank"> تحميل
            </a>
        </div>

        <div class="comm mt-4">
            <?php
            include('logic\pdo.php');
            $comments = $database->prepare("SELECT * FROM `comments` where post_id=" . $_GET['id']);
            $comments->execute();

            foreach ($comments as $comment) {

            ?>
            <div class="com">

                <h6><?php echo $comment['title'] ?></h6>

                <p><?php echo $comment['content'] ?></p>
                <hr>
            </div>




            <?php } ?>

        </div>



        <div class="discr">
            <form method="post" action="logic/comment.php">
                <div class="form-floating mt-2">
                    <input type="hidden" value="<?php echo $_GET['id'] ?>" class="btn btn-light mb-30 mt-30"
                        name="post_id">
                </div>

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                        name="name"></textarea>
                    <label for="floatingTextarea"> اكتب اسمك هنا </label>
                </div>

                <div class="form-floating mt-2">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px" name="comment"></textarea>
                    <label for="floatingTextarea2"> اكتب تعليقك هنا </label>
                </div>
                <div class="form-floating mt-2">
                    <input type="submit" name="submit" value="تعليق" class="btn btn-light mb-30 mt-30">
                </div>
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