<html lang="fa">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Style/Style.css" />
    <link rel="stylesheet" href="style/bootstrap-icons.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="photo/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="photo/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="photo/favicon/favicon-16x16.png" />
    <link rel="manifest" href="photo/favicon/site.webmanifest" />
    <title>همدان نیوز | خبر</title>
</head>

<body>
    <!-- ? All Screen -->
    <div class="all-screen">
        <!-- ! Nav -->
        <nav class="navbar">
            <div class="navbar-center">
                <div class="nav-header">
                    <h3>همدان نیوز</h3>
                    <button type="button" class="nav-toggle" id="nav-toggle">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
                <ul class="nav-links" id="nav-links">
                    <li><a class="nav-link" href="index.php">صفحه اصلی </a></li>
                    <li><a class="nav-link" href="sport.php"> ورزشی </a></li>
                    <li><a class="nav-link" href="political.php"> سیاسی </a></li>
                    <li><a class="nav-link" href="Economic.php"> اقتصادی </a></li>
                    <li>
                        <a class="nav-link" href="login.php">ورود به پنل کاربری</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- !end nav -->
        <!-- *Break -->
        <div class="break">&nbsp;</div>
        <div class="break">&nbsp;</div>

        <!-- * Break -->
        <!-- !Ads -->
        <div class="ads">
            <a href="#"><img src="Photo/tab1.gif" alt="" /></a>
            <a href="#"><img src="Photo/tab2.gif" alt="" /></a>
            <a href="#"><img src="Photo/tab3.gif" alt="" /></a>
            <a href="#"><img src="Photo/tab4.gif" alt="" /></a>
        </div>
        <!-- !End Ads -->
        <div class="mid news-mid">
            <div class="news-screen">
                <div class="last news-last">
                    <?php
                    include "panel/config.php";
                    include "func.php";
                    ?>
                    <?php
                    $postid = $_GET['postid'];
                    $query = "SELECT * FROM `economic` where `id` =$postid ;";
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <img src="<?php echo $row['image']; ?>" alt="" class="last-photo news-photo" height="50px"
                            width="50px" />
                        <div class="l">
                            <h2 class="last-titr news-titr">
                                <?php echo $row['title']; ?>
                            </h2>

                            <p class="last-par news-par">
                                <?php echo $row['content']; ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- ? -->
            <!-- !Ads -->
            <div class="ads">
                <a href="#"><img src="Photo/tab1.gif" alt="" /></a>
                <a href="#"><img src="Photo/tab2.gif" alt="" /></a>
                <a href="#"><img src="Photo/tab3.gif" alt="" /></a>
                <a href="#"><img src="Photo/tab4.gif" alt="" /></a>
            </div>
            <!-- !End Ads -->
        </div>
        <!-- ? Footer -->
        <section class="footer">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>صفحات سایت</h4>
                    <ul class="links">
                        <li><a href="index.php"> صفحه اصلی</a></li>
                        <li><a href="sport.php">ورزشی</a></li>
                        <li><a href="political.php">سیاسی</a></li>
                        <li><a href="Economic.php">اقتصادی</a></li>
                        <li><a href="login.php">ورود به حساب کاربری</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>منابع خبری</h4>
                    <ul class="links">
                        <li><a href="#">قیمت ارز</a></li>
                        <li><a href="#">خبرگزاری ایران</a></li>
                        <li><a href="#">اخبار فوری</a></li>
                        <li><a href="#">سریع نیوز</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>شبکه های اجتماعی</h4>
                    <ul class="links">
                        <li>
                            <a href="#"> تلگرام <i class="bi bi-telegram"></i></a>
                        </li>
                        <li>
                            <a href="#"> اینستاگرام <i class="bi bi-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#">توییتر <i class="bi bi-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#">RSS <i class="bi bi-rss-fill"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>ارتباط با مدیر سایت</h4>
                    <p>جهت ارتباط با مدیر سایت ایمیل خود را ثبت کنید</p>
                    <form action="#">
                        <input type="text" placeholder=" YOUR@EMAIL.COM " required />
                        <button type="submit">submit</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- ?End Footer -->

        <script src="Script/app.js"></script>
    </div>
    <!-- ?End All Screen -->
</body>
</php>