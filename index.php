<html lang="fa">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="Style/Style.css" />
  <link rel="stylesheet" href="style/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="photo/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="photo/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="photo/favicon/favicon-16x16.png" />
  <link rel="manifest" href="photo/favicon/site.webmanifest" />
  <title>همدان نیوز | صفحه اصلی</title>
</head>
<!-- ! close head -->

<body>
  <?php
  include "panel/config.php";
  include "func.php";
  ?>
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
    <!-- ? marquee -->
    <div class="breakingnews">
      <div class="baner-berkingnews">
        <p>خبر فوری</p>
      </div>
      <?php
      $query = "SELECT * FROM `breakingnews` ORDER BY `id` DESC limit 1";
      $result = mysqli_query($link, $query);
      while ($row = mysqli_fetch_array($result)) {
        ?>
        <marquee behavior="scroll" direction="right" class="marquee" scrollamount="5"><a class="white" href=<?php echo "news-breaking.php?postid=$row[id]" ?> target="_blank"><?php echo $row['title']; ?></a>
        </marquee>
      <?php } ?>
    </div>
    <!-- ? end Marquee -->
    <!-- !Ads -->
    <div class="ads">

      <a href="#"><img src="Photo/tab1.gif" alt="" /></a>
      <a href="#"><img src="Photo/tab2.gif" alt="" /></a>
      <a href="#"><img src="Photo/tab3.gif" alt="" /></a>
      <a href="#"><img src="Photo/tab4.gif" alt="" /></a>
    </div>

    <!-- !End Ads -->
    <div class="mid">
      <!--? Lastnews -->
      <div class="lastnews">
        <h2 class="titr">آخرین اخبار ورزشی</h2>
        <?php
        $query = "SELECT * FROM `sport` ORDER BY `id` DESC limit 3";
        $result = mysqli_query($link, $query);
        while ($row = mysqli_fetch_array($result)) {
          ?>
          <div class="last">
            <a href=<?php echo "news-sport.php?postid=$row[id]" ?> target="_blank">
              <img src="<?php echo $row['image']; ?>" alt="" class="last-photo" />
              <div class="l">
                <h2 class="last-titr">
                  <?php echo $row['title']; ?>
                </h2>

                <p class="last-par">
                  <?php echo post_cut($row['content']); ?>
                </p>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>


      <!-- ? End Lastnews -->
      <!-- !price -->
      <?php include 'api.php' ?>
      <div class="price">
        <h2 class="titr">قیمت ارز و سکه</h2>

        <!-- ! table -->
        <table class="price-table">
          <tr>
            <th>نام ارز</th>
            <th>قیمت</th>
          </tr>
          <tr>
            <td>دلار آمریکا</td>
            <td>
              <?php echo number_format($usdprice) ?>
            </td>
          </tr>
          <tr>
            <td> یورو</td>
            <td>
              <?php echo number_format($eurprice) ?>
            </td>
          </tr>
          <tr>
            <td> پوند</td>
            <td>
              <?php echo number_format($gbpprice) ?>
            </td>
          </tr>
          <tr>
            <td> مثقال طلا</td>
            <td>
              <?php echo number_format($mesghalprice) ?>
            </td>
          </tr>
          <tr>
            <td>سکه تمام بهار ازادی</td>
            <td>
              <?php echo $sekeee ?>
            </td>
          </tr>
          <tr>
            <td>نیم سکه </td>
            <td>
              <?php echo number_format($nimprice) ?>
            </td>
          </tr>
          <tr>
            <td>ربع سکه</td>
            <td>
              <?php echo $robe ?>
            </td>
          </tr>
          <tr>
            <td>سکه گرمی </td>
            <td>
              <?php echo number_format($geramiprice) ?>
            </td>
          </tr>

        </table>
        <!-- !endtable -->
      </div>
      <!-- !end price -->
    </div>
    <!-- ! end mid -->
    <!-- ?Break -->
    <div class="break">&nbsp;</div>
    <!-- ? Break -->
  </div>
  <!-- ? mid -->
  <div class="mid">
    <!-- ! news1 -->

    <!-- ! end news 1 -->
    <!-- ! news 2 -->
    <div class="lastnews">
      <h2 class="titr">آخرین اخبار اقتصادی</h2>
      <?php
      $query = "SELECT * FROM `economic` ORDER BY `id` DESC limit 3";
      $result = mysqli_query($link, $query);
      while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="last">
          <a class="last-titr" href=<?php echo "news-economic.php?postid=$row[id]" ?> target="_blank">
            <img src="<?php echo $row['image']; ?>" alt="" class="last-photo" />
            <div class="l">
              <h2 class="last-titr">
                <?php echo $row['title']; ?>
              </h2>

              <p class="last-par">
                <?php echo post_cut($row['content']); ?>
              </p>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
    <!-- ! end news 2 -->
  </div>
  <!-- ?End mid -->

  <!-- ?Break -->
  <div class="break">&nbsp;</div>
  <!-- ? Break -->
  <div class="mid">
    <!-- ! news 3 -->
    <div class="lastnews">
      <h2 class="titr">آخرین اخبار سیاسی</h2>
      <?php
      $query = "SELECT * FROM `political` ORDER BY `id` DESC limit 3";
      $result = mysqli_query($link, $query);
      while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="last">
          <a class="last-titr" href=<?php echo "news-political.php?postid=$row[id]" ?> target="_blank">
            <img src="<?php echo $row['image']; ?>" alt="" class="last-photo" />
            <div class="l">
              <h2 class="last-titr">
                <?php echo $row['title']; ?>
              </h2>

              <p class="last-par">
                <?php echo post_cut($row['content']); ?>
              </p>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
    <!-- ! end news 3 -->

    <!-- ?Break -->
    <div class="break">&nbsp;</div>
    <!-- ? Break -->
    <!-- !Ads -->
    <div class="ads">
      <a href="#"><img src="Photo/tab1.gif" alt="" /></a>
      <a href="#"><img src="Photo/tab2.gif" alt="" /></a>
      <a href="#"><img src="Photo/tab3.gif" alt="" /></a>
      <a href="#"><img src="Photo/tab4.gif" alt="" /></a>
      <a href="#"><img src="Photo/tab1.gif" alt="" /></a>
      <a href="#"><img src="Photo/tab2.gif" alt="" /></a>
      <a href="#"><img src="Photo/tab3.gif" alt="" /></a>
      <a href="#"><img src="Photo/tab4.gif" alt="" /></a>
    </div>
    <!-- !End Ads -->
  </div>
  <!-- ! end mid -->
  <!-- ?Break -->
  <div class="break-1">&nbsp;</div>
  <!-- ? Break -->

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
</body>

</html>