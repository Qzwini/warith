<div class="head-line">
    <div class="dashboard-name">
        الارشيف
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
    <form method="post" enctype="multipart/form-data" action="logic/statement.php">
        <div class="social">
            <label class="form-label" for="customFile">name</label>
            <div class="input-group mb-3">
                <input type="text" name="number" class="form-control tx-area" aria-label="Default"
                    aria-describedby="inputGroup-sizing-default">
            </div>


        </div>

        <div class="about">
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">description, to make diiscripthion eempty
                    using " - "</label>
                <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div>

            <div class="about">
                <label class="form-label mt-3" for="customFile">upload image</label>
                <input type="file" name="imgstatements" class="form-control" id="customFile" />
            </div>

            <div class="upload">
                <button type="submit" name="submit" class="btn btn-light mb-30 mt-30">upload</button>
                <!-- <button type="submit" name="submit" class="btn btn-outline-link ">add to carousel</button> -->

            </div>
        </div>
    </form>
    <div class="st-carousel">

        <table class="table mt-30">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">image</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include('./logic/db.php');
                $sql = "SELECT * FROM statement";
                $statement = $link->query($sql);

                $i = 1;
                while ($rowstatement = $statement->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row"> <?php echo $i ?> </th>
                    <td> <?php echo $rowstatement['number'] ?></td>
                    <td> <?php echo $rowstatement['description'] ?></td>
                    <td>
                        <?php
                            $imageURL = '../uploads/' . $rowstatement['File_Name'];
                            ?>
                        <img src="<?php echo $imageURL; ?> " width="75" height="75">
                    </td>

                    <td>


                        <a href="logic/deletestatements.php?id=<?php echo $rowstatement['ID']; ?>">
                            <ion-icon name="close-circle" class="nav__icon del"></ion-icon>
                        </a>
                    </td>
                </tr>
                <?php
                    include('update-modal/statements-modal.php');
                    $i++;
                } ?>
            </tbody>
        </table>
    </div>

</div>