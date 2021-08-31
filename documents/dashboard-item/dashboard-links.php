<div class="head-line">
    <div class="dashboard-name">
        links
    </div>
</div>
<div class="container">
    <a href="logic/export.php" class="btn btn-success">
        Export to excel
    </a>
    <br>
    <div class="st-carousel">
        <br>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">age</th>
                    <th scope="col">gender</th>
                    <th scope="col">number</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>

            <tbody>
                <?php
                include('./logic/db.php');
                $sql = "SELECT * FROM links";
                $links = $link->query($sql);

                $i = 1;
                while ($rowlinks = $links->fetch_assoc()) {
                ?>
                    <tr>


                        <th scope="row"> <?php echo $i ?> </th>
                        <td> <?php echo $rowlinks['name']; ?></td>
                        <td> <?php echo $rowlinks['age']; ?></td>
                        <td> <?php echo $rowlinks['gender']; ?></td>
                        <td> <?php echo $rowlinks['number']; ?></td>

                        <td>
                            <a href="dashboard.php?active=links-info&id=<?php echo $rowlinks['id']; ?>">
                                <ion-icon name="eye" class="nav__icon"></ion-icon>
                            </a>&nbsp;&nbsp;
                            <a href="logic/deletelinks.php?id=<?php echo $rowlinks['id']; ?>">
                                <ion-icon name="close-circle" class="nav__icon del"></ion-icon>
                            </a>

                        </td>


                    </tr>
                <?php
                    $i++;
                } ?>
            </tbody>

        </table>
    </div>

</div>