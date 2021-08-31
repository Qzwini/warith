<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <?php
        include('logic\db.php');
        $sql = "SELECT * FROM images";
        $images = $link->query($sql);
        $carousel = array();
        $titles = array();
        $description = array();
        $links = array();

        while ($rowimages = $images->fetch_array()) {

            $imageURL = '../uploads/' . $rowimages['File_Name'];
            array_push($carousel, $imageURL);
            array_push($titles, $rowimages['title']);
            array_push($description,  $rowimages['description']);
            array_push($links, $rowimages['link']);
        }

        ?>

        <div class="carousel-item active">
            <img src=" <?php echo $carousel[0] ?>" class="d-block w-100" alt="...">
            <a href="<?php echo $links[0] ?> ">
                <div class="carousel-caption d-md-block">
                    <h6> <?php echo $titles[0] ?> </h6>
                    <p> <?php echo $description[0] ?> </p>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <img src=" <?php echo $carousel[1] ?>" class="d-block w-100" alt="...">
            <a href="<?php echo $links[1] ?>">
                <div class="carousel-caption d-md-block">
                    <h6> <?php echo $titles[1] ?> </h6>
                    <p> <?php echo $description[1] ?> </p>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <img src=" <?php echo $carousel[2] ?>" class="d-block w-100" alt="...">
            <a href="<?php echo $links[2] ?>">
                <div class="carousel-caption d-md-block">
                    <h6> <?php echo $titles[2] ?> </h6>
                    <p> <?php echo $description[2] ?> </p>
                </div>
            </a>
        </div>

    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>