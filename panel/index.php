<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Style/style.css" />
    <link rel="stylesheet" href="../style/bootstrap-icons.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="../photo/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../photo/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../photo/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="../photo/favicon/site.webmanifest" />
    <title>پنل کاربری</title>
  </head>
  <?php
    if(!isset($_COOKIE["admin"])){
        header("location:../login.php");
        exit();
    }
    ?>
  <body>
    <!-- ! all web -->
    <div class="all-web">
      <!-- ! Nav -->
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
      <!-- ? web -->
      <div class="panel-welocome">
        <div class="panel-box">
          <h2 class="titr panel-titr">مشخصات کاربری</h2>
          <div class="panel-box-title">
            <h3 class="box-title">نام ادمین : <?php echo $_COOKIE["admin"]?> </h3>
            <h3 class="box-title">ایمیل شما : <?php echo $_COOKIE["email"]?></h3>
            
          </div>
          <h2 class="titr panel-titr">دسترسی سریع</h2>
          <div class="panel-box-d">
            <a href="new-news.php" class="d-box">خبر جدید </a>
            <a href="manage-news.php" class="d-box">مشاهده اخبار </a>
            <a href="manage-news.php" class="d-box">ویرایش خبر </a>
            <a href="new-ads.php" class="d-box"> تبلیغات </a>

            <a href="../index.php" class="d-box"> صفحه اصلی </a>
            <a href="<?php echo '../code.php?exit=200'; ?>" class="d-box">  خروج </a>
          </div>
        </div>
      </div>
      <!-- ? end web -->
    </div>
    <!-- ! end all web -->
    <script src="../Script/app.js"></script>
  </body>
</html>
