<div class="head-line">
    <div class="dashboard-name">
        الاصدارات
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
    <form method="post" enctype="multipart/form-data" action="logic/speaker.php">
        <div class="social">
            <label class="form-label" for="customFile">name</label>
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


        <div class="about">
            <label class="form-label mt-3" for="customFile">upload news image</label>
            <input type="file" name="imgspeaker" class="form-control" id="customFile" />
            <div class="upload">
                <button type="submit" name="submit" class="btn btn-light mb-30 mt-30">upload </button>
                <!-- <button type="submit" name="submit" class="btn btn-outline-link">add to carousel</button> -->

            </div>
        </div>
    </form>

    <div class="st-carousel">

        <table class="table ">
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
                $sql = "SELECT * FROM speaker";
                $speaker = $link->query($sql);

                $i = 1;
                while ($rowspeaker = $speaker->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row"> <?php echo $i ?> </th>
                    <td> <?php echo $rowspeaker['name'] ?></td>
                    <td> <?php echo $rowspeaker['description'] ?></td>
                    <td> <?php echo $rowspeaker['linki'] ?></td>

                    <td>
                        <?php
                            $imageURL = '../uploads/' . $rowspeaker['File_Name'];
                            ?>
                        <img src="<?php echo $imageURL; ?> " width="75" height="75">
                    </td>
                    <td>

                        <a href="logic/deletespeaker.php?id=<?php echo $rowspeaker['ID']; ?>">
                            <ion-icon name="close-circle" class="nav__icon del"></ion-icon>
                        </a>
                    </td>
                </tr>
                <?php
                    include('update-modal/speaker-modal.php');
                    $i++;
                }

                ?>
            </tbody>
        </table>
    </div>

</div>