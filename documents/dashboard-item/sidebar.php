<body id="body-pd">
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">

                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="../index.php" class="nav__logo">مؤسسة وارث الانبياء</a>
                </div>
                <div class="nav__list">


                    <a href="dashboard.php?active=home" class="nav__link <?php if ($_GET['active'] == "home") {
                                                                                echo "active";
                                                                            } ?>">
                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">الرئيسيــة</span>
                    </a>

                    <a href="dashboard.php?active=news" class="nav__link <?php if ($_GET['active'] == "news") {
                                                                                echo "active";
                                                                            } ?>">
                        <ion-icon name="newspaper-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">مجلة ص</span>
                    </a>



                    <a href="dashboard.php?active=statements" class="nav__link <?php if ($_GET['active'] == "statements") {
                                                                                    echo "active";
                                                                                } ?>">
                        <ion-icon name="bookmarks-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">الارشيف</span>
                    </a>
                    <a href="dashboard.php?active=speaker" class="nav__link <?php if ($_GET['active'] == "speaker") {
                                                                                echo "active";
                                                                            } ?>">
                        <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">الاصدارات</span>
                    </a>

                    <a href="dashboard.php?active=parliament" class="nav__link <?php if ($_GET['active'] == "parliament") {
                                                                                    echo "active";
                                                                                } ?>">
                        <ion-icon name="ribbon-outline" class="nav__icon "></ion-icon>
                        <span class="nav__name">الوارثون</span>
                    </a>

                    <a href="dashboard.php?active=library" class="nav__link <?php if ($_GET['active'] == "library") {
                                                                                echo "active";
                                                                            } ?>">
                        <ion-icon name="albums-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">المكتبة</span>
                    </a>



                </div>
            </div>
            <a href="./login.php" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
</body>