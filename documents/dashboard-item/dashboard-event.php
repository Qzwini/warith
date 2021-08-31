<div class="head-line">
    <div class="dashboard-name">
        Event
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
    <form method="post" enctype="multipart/form-data" action="logic/event.php">
        <div class="social">
            <label class="form-label" for="customFile">name</label>
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control tx-area" aria-label="Default"
                    aria-describedby="inputGroup-sizing-default">
            </div>
        </div>


        <div class="social">
            <label class="form-label" for="customFile">title</label>
            <div class="input-group mb-3">
                <input type="text" name="title" class="form-control tx-area" aria-label="Default"
                    aria-describedby="inputGroup-sizing-default">
            </div>
        </div>

        <div class="about">
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">description</label>
                <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div>
        </div>

        <div class="social mt-2">
            <label class="form-label" for="customFile">location</label>
            <div class="input-group mb-3">
                <input type="text" name="location" class="form-control tx-area" aria-label="Default"
                    aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="date">
            <label class="form-label" for="customFile">date</label>

            <input class="form-control tx-area" name="date" type="date" value="2021-01-01">
        </div>
        <div class="upload mt-4">

            <button type="submit" name="submit" class="btn btn-light mb-30">upload</button>
            <!-- <button type="submit" name="submit" class="btn btn-outline-link mb-30">add to carousel</button> -->

        </div>
    </form>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">location</th>
                <th scope="col">date</th>
                <th scope="col">Operation</th>

            </tr>
        </thead>


        <tbo <?php
                include('./logic/db.php');
                $sql = "SELECT * FROM event";
                $event = $link->query($sql);

                $i = 1;
                while ($rowevent = $event->fetch_assoc()) {
                ?> <tr>
            <th scope="row"> <?php echo $i ?> </th>
            <td> <?php echo $rowevent['name'] ?></td>
            <td> <?php echo $rowevent['title'] ?></td>
            <td> <?php echo $rowevent['description'] ?></td>
            <td> <?php echo $rowevent['location'] ?></td>
            <td> <?php echo $rowevent['date'] ?></td>

            <td>
                &nbsp;<ion-icon name="hammer" class="nav__icon" data-toggle="modal"
                    data-target="#event<?php echo $rowevent['ID']; ?>"></ion-icon> &nbsp;&nbsp;
                <a href="logic/deleteevent.php?id=<?php echo $rowevent['ID']; ?>">
                    <ion-icon name="close-circle" class="nav__icon del"></ion-icon>

                </a>
            </td>
            </tr>
            <?php
                    include('update-modal/event-modal.php');
                    $i++;
                } ?>
            </tbody>
    </table>



</div>