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
    <title>ویرایش خبر اقتصادی</title>
</head>

<body>
    <div class="all-web">
        <!-- ! Nav -->
        <?php include "nav.php"; ?>
        <!-- !end nav -->
        <div class="panel-welocome">
            <div class="panel-box post-box">
                <h2 class="titr panel-titr">ویرایش خبر اقتصادی</h2>

                <div class="form-panel">
                    <?php
                    $postid = $_GET['postid'];
                    $query = "SELECT * FROM `economic` where `id` =$postid;";
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <form action="../code.php" method="Post" enctype="multipart/form-data">
                            <input name="postid" value=" <?php echo $postid ?>" hidden="true">
                            <input type="text" placeholder="عنوان خبر " class="input-form" name="title"
                                value="<?php echo $row['title'] ?>" required />
                            <label> تصویر فعلی پست :</label>
                            <br>
                            <img width="200px" src=<?php echo "../" . $row['image']; ?>>
                            <br>
                            <label>انتخاب تصویر خبر :</label><br />
                            <input class="input-form input-photo" type="file" name="files" />
                            <textarea class="input-form textarea-form" placeholder="متن خبر " name="content"
                                required><?php echo $row['content'] ?></textarea>
                            <input class="input-form submit-form" type="submit" name="btneconomicupdate"
                                value="بروزرسانی پست" />
                            <br />
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
    <script src="../Script/app.js"></script>
</body>

</html>