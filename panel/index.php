<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Style/style.css" />
  <link rel="stylesheet" href="../style/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="../photo/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="../photo/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="../photo/favicon/favicon-16x16.png" />
  <link rel="manifest" href="../photo/favicon/site.webmanifest" />
  <title>پنل کاربری</title>
</head>
<?php
if (!isset($_COOKIE["admin"])) {
  header("location:../login.php");
  exit();
}
?>

<body>
  <!-- ! all web -->
  <div class="all-web">
    <!-- ! Nav -->
    <?php include "nav.php"; ?>
    <!-- !end nav -->
    <!-- ? web -->
    <div class="panel-welocome">
      <div class="panel-box">
        <h2 class="titr panel-titr">مشخصات کاربری</h2>
        <div class="panel-box-title">
          <h3 class="box-title">نام ادمین :
            <?php echo $_COOKIE["admin"] ?>
          </h3>
          <h3 class="box-title">ایمیل شما :
            <?php echo $_COOKIE["email"] ?>
          </h3>

        </div>
        <h2 class="titr panel-titr">دسترسی سریع</h2>
        <div class="panel-box-d">
          <a href="breakingnews.php" class="d-box">خبر فوری </a>
          <a href="sport.php" class="d-box"> خبر ورزشی </a>
          <a href="economic.php" class="d-box"> خبر اقتصادی </a>
          <a href="political.php" class="d-box"> خبر سیاسی </a>

          <a href="../index.php" class="d-box"> صفحه اصلی </a>
          <a href="<?php echo '../code.php?exit=200'; ?>" class="d-box"> خروج </a>
        </div>
      </div>
    </div>
    <!-- ? end web -->
  </div>
  <!-- ! end all web -->
  <script src="../Script/app.js"></script>
</body>

</html>