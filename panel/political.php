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
    <title>خبر جدید ورزشی</title>
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
                <h2 class="titr panel-titr">خبر جدید سیاسی</h2>
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
                        <input type="text" placeholder="عنوان خبر " class="input-form" name="title" required />
                        <label>انتخاب تصویر خبر :</label><br />
                        <input class="input-form input-photo" type="file" name="files" required />
                        <textarea class="input-form textarea-form" placeholder="متن خبر " name="content"
                            required></textarea>
                        <input class="input-form submit-form" type="submit" name="btnPoliticalsend"
                            value="انتشار پست" />
                        <br />
                    </form>
                </div>
            </div>
        </div>
        <!--! manage -->
        <div class=" panel-manage">
            <div class="panel-box post-box">
                <h2 class="titr panel-titr">مشاهده اخبار سیاسی</h2>
                <center>
                    <?php
                    if (isset($_GET["delok"])) {
                        echo "<center><font color=green>حذف با موفقیت انجام شد</font></center>";
                    }
                    if (isset($_GET["delerror"])) {
                        echo "<center><font color=red> حذف با مشکل رو به رو شد</font></center>";
                    }
                    ?>
                    <?php
                    if (isset($_GET["uempty"])) {
                        echo "<center><font color=red>مقادیر فیلد ها باید پر شود </font></center>";
                    }
                    if (isset($_GET["usize"])) {
                        echo "<center><font color=red> حجم فایل انتخابی باید کمتر از 2 مگا بایت باشد </font></center>";
                    }
                    if (isset($_GET["uerrorinupload"])) {
                        echo "<center><font color=red> خطا در ارسال فایل رخ داده . لطفا مجدد تلاش کنید</font></center>";
                    }
                    if (isset($_GET["uerrorintype"])) {
                        echo "<center><font color=red> نوع فایل باید تصویر باشد</font></center>";
                    }
                    if (isset($_GET["uok"])) {
                        echo "<center><font color=green> پست با موفقیت ویرایش شد</font></center>";
                    }
                    if (isset($_GET["unoinsert"])) {
                        echo "<center><font color=red> خطایی در ویرایش پست رخ داده است</font></center>";
                    }
                    ?>
                </center>
                <div class="table-panel">
                    <table class="table-p">
                        <tr class="table-row">
                            <td class="table-col">عنوان خبر</td>
                            <td class="table-col">عملیات</td>
                        </tr>
                        <?php
                        $query = "SELECT * FROM `political` ORDER BY `id` DESC";
                        $result = mysqli_query($link, $query);
                        while ($row = mysqli_fetch_array($result)) {

                            ?>
                            <tr class="table-row">
                                <td class="table-col to">
                                    <a href="<?php echo "../news-sport.php?postid=$row[id]" ?>">
                                        <?php echo "$row[title]" ?>
                                    </a>
                                </td>
                                <td class="table-col tl">
                                    <a href="<?php echo "../code.php?politicalid=$row[id]" ?>"> <i
                                            class=" bi bi-trash3 b red"></i></a>
                                    <a href="<?php echo "edit-political.php?postid=$row[id]" ?>"><i
                                            class="bi bi-pen b green"></i></a>
                                </td>
                            </tr>

                            <!-- ? tr -->
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="../Script/app.js"></script>
</body>

</html>