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
    <?php include("logic/pdo.php");


    ?>
    <?php
    $resultsPerPage = 10;
    $numberOfResults = $database->prepare("SELECT * FROM `news` ORDER BY `date` ASC");
    $numberOfResults->execute();
    $numberOfResults = $numberOfResults->rowCount();

    if (!isset($_GET['page'])) {
        $page = 1;
    } else if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    $totalPages = ceil($numberOfResults / $resultsPerPage);



    $results = $database->prepare("SELECT * FROM `news` order by Id desc LIMIT " . $resultsPerPage . " OFFSET " . ($page - 1) * $resultsPerPage);
    $results->execute();

    ?>
    <!-- body  -->
    <div class="container mt-10">
        <div class="row ">
            <?php foreach ($results  as $result) {  ?>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="imgnews">
                        <img src="<?php echo '../uploads/' . $result['File_Name'] ?>" class="card-img-top imgnews"
                            alt="...">
                    </div>
                    <div class="card-body news">
                        <b class="card-title"><?php echo $result['name'] ?></b>
                        <p class="card-text mt-2"><?php 

                        $description= substr($result['description'], 0, 80);
                        if($description !="-"){
                        echo $description. ' ...';}
                        
                        ?></p>
                        <a href="<?php echo $result['linki'] ?>" class="btn btn-light" target="_blank"> تحميل </a>
                    </div>
                </div>
            </div>
            <?php } ?>


            <div class="col-sm-12 mt-10">
                <nav>
                    <ul class="pagination justify-content-center ">

                        <?php
                        for ($count = 1; $count <= $totalPages; ++$count) {
                            if ($page == $count) {
                                $count = $page;
                                echo ' <li class="page-item active"> <a class="page-link" href="news.php?page=' . $count . '">' . $count . '</a>  </li>';
                            } else {
                                echo ' <li class="page-item"> <a class="page-link" href="news.php?page=' . $count . '">' . $count . '</a>  </li>';
                            }
                        }

                        ?>


                    </ul>
                </nav>
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