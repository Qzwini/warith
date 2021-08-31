<?php
ob_start();
?>

<?php include("sidebar.php") ?>
<div class="head-line">
    <div class="dashboard-name">
        الرئيسية

    </div>
</div>
<div class="container">
    <?php
    if (isset($_GET['message'])) {
        echo '
        <div class="alert alert-success" role="alert">';
        echo $_GET['message'];
        echo '</div>';
    }

    ?>
    <div class="st-carousel">
        <form method="post" enctype="multipart/form-data" action="logic/uploadcarousel.php">

            <div class="social">

                <label class="form-label" for="customFile">title</label>
                <div class="input-group mb-3">
                    <input type="text" name="title" class="form-control tx-area" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default" required>
                </div>


                <div class="about">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">description</label>
                        <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1"
                            rows="3" required>
                            </textarea>
                    </div>
                </div>

                <label class="form-label mt-3" for="customFile">upload carousel photo - Maximam 3 photos</label>
                <input type="file" name="imgcar" class="form-control" id="customFile" />

                <div class="input-group mb-3 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">link</span>
                    </div>
                    <input type="text" class="form-control" name="link" placeholder="link" aria-label="link"
                        aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="upload mt-3">
                <button type="submit" name="submit" class="btn btn-light mb-30">upload</button>


            </div>


        </form>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">link</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include('./logic/db.php');
                $sql = "SELECT * FROM images";
                $imgcrasouel = $link->query($sql);

                $i = 1;
                while ($rowimages = $imgcrasouel->fetch_assoc()) {
                ?>

                <tr>
                    <th scope="row"> <?php echo $i;  ?> </th>
                    <td><?php echo $rowimages['File_Name'] ?></td>
                    <td><?php echo $rowimages['title'] ?></td>
                    <td><?php echo $rowimages['description'] ?></td>
                    <td><?php echo $rowimages['link'] ?></td>

                    <td>
                        &nbsp;
                        <a href="logic/deletecarasouel.php?id=<?php echo $rowimages['ID']; ?>">
                            <ion-icon name="close-circle" class="nav__icon del"></ion-icon>
                        </a>
                    </td>
                </tr>
                <?php
                    $i++;
                }

                ?>


            </tbody>
        </table>
    </div>
    <?php
    include('./logic/db.php');
    $sql = "SELECT * FROM social";
    $news = $link->query($sql);

    $i = 1;
    $social = array();
    while ($rownews = $news->fetch_assoc()) {
        array_push($social, $rownews);
    }
    print_r($social);
    echo sizeof($social);
    ?>
    <form method="post" action="logic\social.php">
        <div class="social">
            <label class="form-label mt-30" for="social">social media links</label>
            <?php $arr = array("telegram", "twitter", "youtube",  "facebook", "instagram"); ?>
            <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <?php echo $arr[$i] ?> </span>
                </div>
                <input type="text" class="form-control" name="<?php echo $arr[$i]; ?>" placeholder="link"
                    aria-label="Username" value=" <?php
                   if ($social != null) {
                      if ($arr[$i] == $social[$i]['name']) {
                        echo $social[$i]['value'];
                        }
                        }
                  ?>" aria-describedby="basic-addon1" required>
            </div>
            <?php endfor; ?>
        </div>


        <div class="about">
            <div class="form-group  mb-30">
                <label for="exampleFormControlTextarea1" class="form-label ">about</label>
                <textarea class="form-control tx-area" name="about" id="exampleFormControlTextarea1" rows="3" required>
                <?php
                if (sizeof($social) > 1) {
                    if ($social[5]['value'] != null) {
                        echo $social[5]['value'];
                    }
                }
                ?>                
                </textarea>
            </div>
        </div>
        <?php

        if (sizeof($social) < 1) {
        ?>
        <div class="upload">
            <button type="submit" name="social-uploads" class="btn btn-light mb-30">upload</button>
        </div>

        <?php
        } else {
        ?>
        <div class="upload">
            <button type="submit" name="social-update" class="btn btn-light mb-30">update</button>
        </div>
        <?php
        }
        ?>
    </form>
</div>