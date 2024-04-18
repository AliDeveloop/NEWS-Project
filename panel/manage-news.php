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
  <title>مشاهده اخبار</title>
</head>
<?php
if (!isset($_COOKIE["admin"])) {
  header("location:../login.php");
  exit();
}
?>

<body>
  <div class="all-web">
    <!-- ! Nav -->
    <?php include "nav.php"; ?>
    <!-- !end nav -->

  </div>
  <script src="../Script/app.js"></script>
</body>

</html>