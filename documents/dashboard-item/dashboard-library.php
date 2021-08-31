<div class="head-line">
    <div class="dashboard-name">
        المكتبة الصورية والفيديوية
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
    <form method="post" enctype="multipart/form-data" action="logic/library.php">
        <div class="social">
            <label class="form-label" for="customFile">title</label>
            <div class="input-group mb-3">
                <input type="text" name="title" class="form-control tx-area" aria-label="Default"
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
        </div>
        <div class="about">
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">type</label>
                <!-- <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1" rows="3"></textarea> -->
                <div class="select">
                    <select class="form-control" name="type" id="" style="text-align: right;">
                        <option value="صورة"> صورة </option>
                        <option value="فيديو"> فيديو </option>
                    </select>
                </div>

                <div class="select_arrow">
                </div>
            </div>
        </div>

        <div class="social mt-20">
            <label class="form-label " for="social">youtube links</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> youtube </span>
                </div>
                <input type="text" name="link" class="form-control" placeholder="link" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="library">
            <label class="form-label mt-2" for="customFile">upload event image</label>
            <input type="file" name="file" class="form-control" id="customFile" />
            <div class="upload">
                <button type="submit" name="submit" class="btn btn-light mb-30 mt-30">upload</button>
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
                    <th scope="col">Link</th>
                    <th scope="col">Image</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include('./logic/db.php');
                $sql = "SELECT * FROM library";
                $library = $link->query($sql);

                $i = 1;
                while ($rowlibrary = $library->fetch_assoc()) {
                ?> <tr>
                    <th scope="row"> <?php echo $i ?> </th>
                    <td> <?php echo $rowlibrary['title'] ?></td>
                    <td> <?php echo $rowlibrary['description'] ?></td>
                    <td> <?php echo $rowlibrary['link'] ?></td>
                    <td>
                        <?php
                            $imageURL = '../uploads/' . $rowlibrary['File_Name'];
                            ?>
                        <img src="<?php echo $imageURL; ?> " width="75" height="75">
                    </td>

                    <td>

                        <a href="logic/deletelibrary.php?id=<?php echo $rowlibrary['ID']; ?>">
                            <ion-icon name="close-circle" class="nav__icon del"></ion-icon>

                        </a>
                    </td>
                </tr>
                <?php $i++;
                    include('update-modal/library-modal.php');
                }
                ?>
            </tbody>
        </table>
    </div>

</div>