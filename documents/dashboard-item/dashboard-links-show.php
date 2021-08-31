<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="../../images/icon/favicon.ico" type="image/x-icon">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-mUkCBeyHPdg0tqB6JDd+65Gpw5h/l8DKcCTV2D2UpaMMFd7Jo8A+mDAosaWgFBPl" crossorigin="anonymous">

    <!-- style  -->
    <!-- <link rel="stylesheet" href="../../styles/style.css"> -->
    <link rel="stylesheet" href="../../styles/dashboard.css">


    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/1c5749e405.js" crossorigin="anonymous"></script>
    <!-- title -->
    <title> حركة وعي الوطنية </title>
</head>

<body class="link-show">
    <!-- sidebar -->


    <!-- body  -->
    <?php
    include('./logic/db.php');
    $sql = "SELECT * FROM links where id=" . $_GET['id'];
    $links = $link->query($sql);

    $i = 1;
    while ($rowlinks = $links->fetch_assoc()) {
    ?>
        <div class="container mt-5 mt-auto">

            <a href="dashboard.php?active=links">
                <div class="fixed-bottom">back</div>
            </a>

            <div class="mb-3 row mt-4">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label">الاسم الرباعي </label>
                <label class="col-sm-6 col-form-label text-center"><?php echo $rowlinks['name']; ?> </label>
            </div>

            <hr class="hro">

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label">الجنس</label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['gender']; ?> </label>
            </div>

            <hr class="hro">

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label"> العمر </label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['age']; ?> </label>
            </div>

            <hr class="hro">

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label"> رقم الهاتف </label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['number']; ?> </label>
            </div>


            <hr class="hro">

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label"> التواصل الاجتماعي ؟ </label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['social']; ?> </label>
            </div>

            <hr class="hro">

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label"> السكن </label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['city']; ?> </label>
            </div>


            <hr class="hro">

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label"> المؤهل العلمي </label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['gradute']; ?> </label>
            </div>



            <hr class="hro">

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label"> العمل الحالي </label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['position']; ?> </label>
            </div>

            <hr class="hro">

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label"> الهواية </label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['nationality']; ?></label>
            </div>

            <hr class="hro">


            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label"> الانتماء السياسي </label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['Political']; ?> </label>
            </div>

            <hr class="hro">


            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label"> ماذا تقترح بشأن تمكين الشباب العراقي؟ </label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['des1']; ?> </label>
            </div>

            <hr class="hro">

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label"> الى ماذا تطمح من انتمائك الى حركة وعي الوطنية؟
                </label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['des2']; ?> </label>
            </div>

            <hr class="hro">



            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label"></label>
                <label class="col-sm-3 col-form-label"> الملاحظات </label>
                <label class="col-sm-6 col-form-label text-center"> <?php echo $rowlinks['des3']; ?> </label>
            </div>











        </div>


    <?php
    }
    ?>


    </div>


    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="../../scripts/main.js"></script>


</body>

</html>