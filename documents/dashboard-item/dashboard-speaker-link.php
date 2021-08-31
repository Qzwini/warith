<div class="head-line">
    <div class="dashboard-name">
        speaker-link
    </div>
</div>
<div class="container">
    <form method="post" enctype="multipart/form-data" action="logic/speakers.php">

        <div class="social">
            <label for="form-select" class="form-label">name of speaker</label>
            <select class="form-select select-c" name="speakername" size="5" aria-label="size 3 select example"
                required>
                <?php
                include('./logic/db.php');
                $sql = "SELECT * FROM speaker";
                $speaker = $link->query($sql);

                $i = 1;
                while ($rowspeaker = $speaker->fetch_assoc()) {
                ?>
                <option value="<?php echo $rowspeaker['ID'] ?>" selected><?php echo $rowspeaker['name'] ?></option>

                <?php

                }

                ?>



            </select>
        </div>

        <div class="about mt-20">
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">description</label>
                <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1" rows="3"
                    required></textarea>
            </div>
        </div>

        <div class="social mt-20">
            <label class="form-label " for="social">youtube links</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> youtube </span>
                </div>
                <input type="text" class="form-control" name="link" placeholder="link" aria-label="Username"
                    aria-describedby="basic-addon1" required>
            </div>
        </div>
        <div class="about">
            <div class="upload">
                <button type="submit" name="submit" class="btn btn-light mb-30 mt-30">upload</button>
                <!-- <button type="submit" name="submit" class="btn btn-outline-link ">add to carousel</button> -->

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
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include('./logic/db.php');
                $sql = "SELECT o.ID,o.name, O.link, O.description, c.name as username FROM speaker c, speakers o WHERE c.ID = o.name
                ";
                $speakers = $link->query($sql);

                $i = 1;
                while ($rowspeakers = $speakers->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row"> <?php echo $i;

                                            ?> </th>
                    <td> <?php echo $rowspeakers['username'] ?></td>
                    <td> <?php echo $rowspeakers['description'] ?></td>
                    <td> <?php echo $rowspeakers['link'] ?></td>


                    <td>
                        &nbsp;<ion-icon name="hammer" class="nav__icon" data-toggle="modal"
                            data-target="#speakers<?php echo $rowspeakers['ID']; ?>"></ion-icon> &nbsp;&nbsp;
                        <a href="logic/deletespeakers.php?id=<?php echo $rowspeakers['ID']; ?>">
                            <ion-icon name="close-circle" class="nav__icon del"></ion-icon>
                        </a>
                    </td>
                </tr>

                <?php

                    include('update-modal/speakers.php');
                    $i++;
                } ?>
            </tbody>
        </table>
    </div>

</div>