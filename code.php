<?php
include 'panel/config.php';
// !---------------------------
// ! ADMIN LOGIN
// !---------------------------

if (isset($_POST["btnlogin"])) {
    if (empty($_POST["loginemail"]) || empty($_POST["loginpass"])) {
        header("location:login.php?empty=1000");
        exit;
    }
    $user = $_POST['loginemail'];
    $pass = $_POST['loginpass'];
    $query = "SELECT * FROM `user` WHERE email = '$user' AND password = '$pass'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    $rowcount = mysqli_num_rows($result);
    if ($rowcount == 1) {
        setcookie("admin", $row['name'], time() + (86400));
        setcookie("email", $row['email'], time() + (86400));
        header("location:panel/index.php");
        exit;
    } else {
        header("location:login.php?error=1001");

        exit;
    }
}

// ?---------------------------
// ? END ADMIN LOGIN
// ?---------------------------
// *-------------------------------
// !---------------------------
// ! ADMIN LOGOUT
// !---------------------------
if (isset($_GET["exit"])) {
    setcookie("admin", '', time() - (86400));
    header("location:login.php");
}
// ?---------------------------
// ? END ADMIN LOGOUT
// ?---------------------------
// *-------------------------------
// !---------------------------
// ! NEW NEWS
// !---------------------------

if (isset($_POST['btnsendpost'])) {
    if (empty($_POST['title']) || empty($_FILES['file1']) || empty($_POST['content']) || empty($_POST['news']) || empty($_POST['breaking']))
        header('Location:panel/new-news.php?empty=1000');
    exit();
} else {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $news = $_POST['news'];
    $breaking = $_POST['breaking'];
    $image;
    $file1 = $_FILES['file1']['name'];
    $fileext = pathinfo($file1, PATHINFO_EXTENSION);
    $filesize = $_FILES['file1']['size'];
    $filetype = $_FILES['file1']['type'];
    $filetemp = $_FILES['file1']['tmp_name'];
    if (($filetype == 'image/png') || ($filetype == 'image/jpg') || ($filetype == 'image/bmp') || ($filetype == 'image/jpeg')) {
        $filesize = floor($filesize / 1024);
        echo $filesize . "KB <br>";
        if ($filesize > 2048) {
            header('Location:admin/sendpost.php?size=22000');
            exit();
        } else {
            $uniq = time() . uniqid(rand());
            $path = "../photo/" . $uniq . "." . $fileext;
            if (move_uploaded_file($filetemp, $path)) {
                $image = $path;
            } else {
                header('Location:panel/new-news.php?errorinupload=3000');
                exit();
            }
        }
    } else {
        header('Location:panel/new-news.php?errorintype=2000');
        exit();
    }
    if ($breaking == 'yes') {
        $result = mysqli_query($link, $breakingnews);
        if ($result || $result2) {
            header('Location:panel/new-news.php?ok=5000');
            exit();
        } else {
            header('Location:panel/new-news.php?noinsert=66000');
            exit();
        }
    } else {
        if ($news == 'economic') {
            $result = mysqli_query($link, $economic);
            $result2 = mysqli_query($link, $lastnews);
            if ($result || $result2) {
                header('Location:panel/new-news.php?ok=5000');
                exit();
            } else {
                header('Location:panel/new-news.php?noinsert=66000');
                exit();
            }
        } elseif ($news == 'sport') {
            $result = mysqli_query($link, $sport);
            $result2 = mysqli_query($link, $lastnews);
            if ($result || $result2) {
                header('Location:panel/new-news.php?ok=5000');
                exit();
            } else {
                header('Location:panel/new-news.php?noinsert=66000');
                exit();
            }
        } elseif ($news == 'political') {
            $result = mysqli_query($link, $political);
            $result2 = mysqli_query($link, $lastnews);
            if ($result || $result2) {
                header('Location:panel/new-news.php?ok=5000');
                exit();
            } else {
                header('Location:panel/new-news.php?noinsert=66000');
                exit();
            }
        }
    }
}

// ?---------------------------
// ? END NEW NEWS
// ?---------------------------



















?>