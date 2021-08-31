<?php
include('./logic/db.php');
$sql = "SELECT * FROM social";
$social = $link->query($sql);


$i = 0;
$telegram;
$facebook;
$instagram;
$youtube;
$twitter;

while ($urls = $social->fetch_array()) {
    switch ($urls['name']) {
        case "telegram":
            $telegram = trim($urls['value']);
            break;
        case "instagram":
            $instagram =  trim(
                $urls['value']
            );
            break;
        case "facebook":
            $facebook =  trim($urls['value']);
            break;
        case "youtube":
            $youtube = trim($urls['value']);
            break;
        case "twitter":
            $twitter = trim($urls['value']);
            break;
        default:
            $about = trim($urls['value']);
            break;
    }
}


?>





<div class="headnav">
    <div class="social " style="padding:5px;color:#fff;text-align: center;">
        وارث الانبياء
    </div>
</div>
<?php
$actual_link = "$_SERVER[REQUEST_URI]";
$arr = explode("/", $actual_link);
$last = end($arr);
?>
<div class="n-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link
                     <?php if ($last == 'home.php') {
                            echo "active";
                        } ?>" href="../index.php"> الصفحة الرئيسية </a>


                    <a class="nav-link <?php if ($last == 'news.php') {
                                            echo "active";
                                        } ?>" href="news.php"> مجلة ص والقرأن ذي الذكر </a>



                    <a class="nav-link <?php if ($last == 'statment.php') {
                                            echo "active";
                                        } ?>" href="statment.php"> الارشيف </a>



                    <a class="nav-link <?php if ($last == 'speaker.php') {
                                            echo "active";
                                        } ?>" href="speaker.php"> الاصدارات </a>




                    <a class="nav-link <?php if ($last == 'parliament.php') {
                                            echo "active";
                                        } ?>" href="parliament.php"> الوارثون </a>



                    <a class="nav-link <?php if ($last == 'library.php') {
                                            echo "active";
                                        } ?>" href="library.php"> مكتبة فيديوهات - صور </a>
                </div>
            </div>
            <form class="d-flex " action="search.php" method="post">
                <button class="btn btn-outline-primary me-1" type="submit" name="submit"> بحث </button>
                <input class="form-control size" type="search" placeholder="بحث" aria-label="Search" name="searchtext">

            </form>
        </div>
</div>
</nav>
</div>