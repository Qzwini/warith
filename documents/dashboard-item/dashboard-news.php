<div class="head-line">
    <div class="dashboard-name">
        مجلة ص والقرأن ذي الذكر

    </div>
</div>

<?php
if (isset($_GET['message'])) {
    echo '
        <div class="alert alert-success" role="alert">';
    echo $_GET['message'];
    echo '</div>';
}

?>
<div class="container">
    <form method="post" enctype="multipart/form-data" action="logic/news.php">



        <div class="social">
            <label class="form-label" for="customFile">title</label>
            <div class="input-group mb-3">


                <input type="text" name="title" class="form-control tx-area" aria-label="Default"
                    aria-describedby="inputGroup-sizing-default" required>



            </div>
        </div>




        <div class="about">
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">description, to make diiscripthion eempty
                    using " - "</label>
                <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1" rows="3"
                    required></textarea>
            </div>
        </div>



        <div class="social mt-20">
            <label class="form-label " for="social">download links</label>
            <div class="input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> download </span>
                </div>
                <input type="text" name="linki" class="form-control" placeholder="link" aria-label="linki"
                    aria-describedby="basic-addon1">
            </div>
        </div>




        <div class="about mt-4">
            <label class="form-label mt-2" for="customFile">upload news image</label>
            <input type="file" name="imgnews" class="form-control" id="customFile" />
            <div class="upload">
                <button type="submit" name="submit" class="btn btn-light mb-30 mt-30">upload</button>
                <!-- <button type="submit" name="submit" class="btn btn-outline-link ">add to carousel</button> -->

            </div>

        </div>


    </form>


    <div class="st-carousel">

        <table class=" tablesorter table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">link</th>
                    <th scope="col">Image</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include('./logic/db.php');
                $sql = "SELECT * FROM news";
                $news = $link->query($sql);

                $i = 1;
                while ($rownews = $news->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row"> <?php echo $i ?> </th>
                    <td> <?php echo $rownews['name'] ?></td>
                    <td> <?php echo $rownews['description'] ?></td>
                    <td> <?php echo $rownews['linki'] ?></td>

                    <td>
                        <?php
                            $imageURL = '../uploads/' . $rownews['File_Name'];
                            ?>
                        <img src="<?php echo $imageURL; ?> " width="75" height="75">
                    </td>

                    <td>
                        &nbsp;

                        <a href="logic/deletenews.php?id=<?php echo $rownews['ID']; ?>">
                            <ion-icon name="close-circle" class="nav__icon del"></ion-icon>
                        </a>

                    </td>
                </tr>


                <?php

                    include('../variables.php');
                    echo $uploads_dir;

                    include('update-modal/news-modal.php');
                    $i++;
                }

                ?>
            </tbody>
        </table>
    </div>

</div>