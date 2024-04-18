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
  <?php
  if (!isset($_COOKIE["admin"])) {
    header("location:../login.php");
    exit();
  }
  include "config.php";
  ?>
  <title>خبر جدید</title>
</head>

<body>
  <div class="all-web">
    <!-- ! Nav -->
    <?php include "nav.php"; ?>
    <!-- !end nav -->
    <div class="panel-welocome">
      <div class="panel-box post-box">
        <h2 class="titr panel-titr">تبلیغ جدید</h2>
        <p>
          <?php
          if (isset($_GET["bempty"])) {
            echo "<center><font color=red>مقادیر فیلد ها باید پر شود </font></center>";
          }
          if (isset($_GET["bsize"])) {
            echo "<center><font color=red> حجم فایل انتخابی باید کمتر از 2 مگا بایت باشد </font></center>";
          }
          if (isset($_GET["berrorinupload"])) {
            echo "<center><font color=red> خطا در ارسال فایل رخ داده . لطفا مجدد تلاش کنید</font></center>";
          }
          if (isset($_GET["berrorintype"])) {
            echo "<center><font color=red> نوع فایل باید تصویر باشد</font></center>";
          }
          if (isset($_GET["bok"])) {
            echo "<center><font color=green> تبلیغ با موفقیت اپلود شد</font></center>";
          }
          if (isset($_GET["bnoinsert"])) {
            echo "<center><font color=red> خطایی در ارسال تبلیغ رخ داده است</font></center>";
          }
          ?>
        </p>
        <div class="form-panel">
          <form action="../code.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="لینک تبلیغ " class="input-form" name="link" required />
            <label for="avatar">انتخاب تصویر تبلیغ :</label><br />

            <input class="input-form input-photo" name="file1" type="file"
              accept="image/png, image/jpeg , image/gif , image/jpg" required />

            <input class="input-form submit-form" name="btnbads" type="submit" value="انتشار تبلیغ" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="../Script/app.js"></script>
</body>

</html>