<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Style/style.css" />
    <link rel="stylesheet" href="../style/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <?php
    if (!isset($_COOKIE["admin"])) {
        header("location:../login.php");
        exit();
    }
    include "config.php";
    ?>
    <link rel="apple-touch-icon" sizes="180x180" href="../photo/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../photo/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../photo/favicon/favicon-16x16.png" />
    <link rel="manifest" href="../photo/favicon/site.webmanifest" />
    <title>تبلیغات</title>
</head>

<body>
    <div class="all-web">
        <!-- ! Nav -->
        <?php include "nav.php"; ?>
        <nav class="navbar navpanel">
            <div class="navbar-center">
                <div class="nav-header">
                    <h3>همدان نیوز | مدیریت</h3>

                    <button type="button" class="nav-toggle" id="nav-toggle">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
                <ul class="nav-links" id="nav-links">
                    <li><a class="nav-link" href="index.php"> پنل </a></li>
                    <li><a class="nav-link" href="new-news.php"> خبر جدید </a></li>
                    <li>
                        <a class="nav-link" href="manage-news.php"> مشاهده اخبار </a>
                    </li>
                    <li><a class="nav-link" href="new-ads.php"> تبلیغات </a></li>

                    <li>
                        <a class="nav-link" href="../index.php"> بازگشت به محیط سایت </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- !end nav -->
        <div class="panel-welocome">
            <div class="panel-box post-box">
                <h2 class="titr panel-titr"> تبلیغ جدید </h2>
                <p>
                    <?php
                    if (isset($_GET["empty"])) {
                        echo "<center><font color=red>مقادیر فیلد ها باید پر شود </font></center>";
                    }
                    if (isset($_GET["size"])) {
                        echo "<center><font color=red> حجم فایل انتخابی باید کمتر از 2 مگا بایت باشد </font></center>";
                    }
                    if (isset($_GET["errorinupload"])) {
                        echo "<center><font color=red> خطا در ارسال فایل رخ داده . لطفا مجدد تلاش کنید</font></center>";
                    }
                    if (isset($_GET["errorintype"])) {
                        echo "<center><font color=red> نوع فایل باید تصویر باشد</font></center>";
                    }
                    if (isset($_GET["ok"])) {
                        echo "<center><font color=green> پست با موفقیت اپلود شد</font></center>";
                    }
                    if (isset($_GET["noinsert"])) {
                        echo "<center><font color=red> خطایی در ارسال پست رخ داده است</font></center>";
                    }
                    ?>
                </p>
                <div class="form-panel">
                    <form action="../code.php" method="Post" enctype="multipart/form-data">

                        <label>انتخاب تصویر :</label><br />
                        <input class="input-form input-photo" type="file" name="files" required />
                        <input type="text" placeholder=" لینک تبلیغ " class="input-form" name="title" required />
                        <input class="input-form submit-form" type="submit" name="btnadssend" value="انتشار تبلیغ" />
                        <br />
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="../Script/app.js"></script>
</body>

</html>