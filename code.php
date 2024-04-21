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

if (isset($_POST['btnsend'])) {
    if (empty($_FILES['files'])) {
        echo 'File is Empty';
    } else {
        $filename = $_FILES['files']['name'];
        $fileext = pathinfo($filename, PATHINFO_EXTENSION);
        $filesize = $_FILES['files']['size'];
        $filetype = $_FILES['files']['type'];
        $filetmp = $_FILES['files']['tmp_name'];
        if (($filetype == 'image/png') || ($filetype == 'image/jpg') || ($filetype == 'image/jpeg') || ($filetype == 'image/svg')) {
            $uniq = time() . uniqid(rand());
            $path = "photo/" . $uniq . "." . $fileext;
            if (move_uploaded_file($filetmp, $path)) {

            } else {
                echo "File NotSaved";
            }
        } else {
            echo "type file is not allowd";
        }

    }
}
// *-------------------------------
// !---------------------------
// ! upload  Sport
// !---------------------------
if (isset($_POST['btnsportsend'])) {
    if (empty($_FILES['files']) || empty($_POST['title']) || empty($_POST['content'])) {
        header('location:panel/sport.php?empty=1000');
        exit();
    } else {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image;
        $filename = $_FILES['files']['name'];
        $fileext = pathinfo($filename, PATHINFO_EXTENSION);
        $filesize = $_FILES['files']['size'];
        $filetype = $_FILES['files']['type'];
        $filetmp = $_FILES['files']['tmp_name'];
        if (($filetype == 'image/png') || ($filetype == 'image/jpg') || ($filetype == 'image/jpeg') || ($filetype == 'image/svg')) {
            $uniq = time() . uniqid(rand());
            $path = "photo/" . $uniq . "." . $fileext;
            if (move_uploaded_file($filetmp, $path)) {
                $image = $path;
            } else {
                header('location:panel/sport.php?noinsert=2000');
                exit();
            }
        } else {
            header('location:panel/sport.php?errorintype=3000');
            exit();
        }
        // ! sql
        $query = "INSERT INTO `sport` (`id`, `title`, `image`, `content`, `Category`) VALUES (NULL, '" . $title . "', '" . $image . "', '" . $content . "', '');";
        $result = mysqli_query($link, $query);
        if ($result) {
            header('location:panel/sport.php?ok=5000');
            exit();
        } else {
            header('location:panel/sport.php?noinsert=2000');
            exit();
        }
    }


}
// !---------------------------
// ! end upload  Sport
// !---------------------------

// !---------------------------
// !  delete  Sport
// !---------------------------
if (isset($_GET['sportid'])) {
    $postid = $_GET['sportid'];
    $query = "DELETE FROM `sport` WHERE `id` = '$postid';";
    $result = mysqli_query($link, $query);
    if ($result) {
        header('Location:panel/sport.php?delok=5000');
        exit();
    } else {
        header('Location:panel/sport.php?delerror=6000');
        exit();
    }
}
// !---------------------------
// !  end delete  Sport
// !---------------------------
// ?
// ? Update sport
// ?
if (isset($_POST['btnsportupdate'])) {
    if (empty($_POST['title']) || empty($_POST['content'])) {
        header('Location:panel/sport.php?uempty=1000');
        exit();
    } else {
        $postid = $_POST['postid'];
        // foreach ($_POST as $key => $value) {
        //     echo $key . "=" . $value . "<br>";
        // }
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image;
        $filetemp = $_FILES['files']['tmp_name'];
        if (empty($filetemp)) {
            $query = "UPDATE `sport` SET `title`='" . $title . "',`content`='" . $content . "' WHERE `sport`.`id` = $postid;";
        } else {
            $file1 = $_FILES['files']['name'];
            $fileext = pathinfo($file1, PATHINFO_EXTENSION);
            $filetype = $_FILES['files']['type'];
            $filetemp = $_FILES['files']['tmp_name'];
            $uniq = time() . uniqid(rand());
            $path = "photo/" . $uniq . "." . $fileext;
            if (move_uploaded_file($filetemp, $path)) {
                $image = $path;
            } else {
                header('Location:panel/sport.php?uerrorinupload=3000');
                exit();
            }
            $query = "UPDATE `sport` SET `title`='" . $title . "',`content`='" . $content . "',`image`='" . $image . "' WHERE `sport`.`id`=$postid ;";
        }
        $result = mysqli_query($link, $query);
        if ($result) {
            header('Location:panel/sport.php?uok=50000');
            exit();
        }
    }
}
// ?
// ?end Update sport
// ?
// *--------------------------------------------
// *----- Political
// *--------------------------------------------
// !---------------------------
// ! upload  political
// !---------------------------
if (isset($_POST['btnPoliticalsend'])) {
    if (empty($_FILES['files']) || empty($_POST['title']) || empty($_POST['content'])) {
        header('location:panel/political.php?empty=1000');
        exit();
    } else {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image;
        $filename = $_FILES['files']['name'];
        $fileext = pathinfo($filename, PATHINFO_EXTENSION);
        $filesize = $_FILES['files']['size'];
        $filetype = $_FILES['files']['type'];
        $filetmp = $_FILES['files']['tmp_name'];
        if (($filetype == 'image/png') || ($filetype == 'image/jpg') || ($filetype == 'image/jpeg') || ($filetype == 'image/svg')) {
            $uniq = time() . uniqid(rand());
            $path = "photo/" . $uniq . "." . $fileext;
            if (move_uploaded_file($filetmp, $path)) {
                $image = $path;
            } else {
                header('location:panel/political.php?noinsert=2000');
                exit();
            }
        } else {
            header('location:panel/political.php?errorintype=3000');
            exit();
        }
        // ! sql
        $query = "INSERT INTO `political` (`id`, `title`, `image`, `content`, `Category`) VALUES (NULL, '" . $title . "', '" . $image . "', '" . $content . "', '');";
        $result = mysqli_query($link, $query);
        if ($result) {
            header('location:panel/political.php?ok=5000');
            exit();
        } else {
            header('location:panel/political.php?noinsert=2000');
            exit();
        }
    }


}
// !---------------------------
// ! end upload  political
// !---------------------------

// !---------------------------
// !  delete  political
// !---------------------------
if (isset($_GET['politicalid'])) {
    $postid = $_GET['politicalid'];
    $query = "DELETE FROM `political` WHERE `id` = '$postid';";
    $result = mysqli_query($link, $query);
    if ($result) {
        header('Location:panel/political.php?delok=5000');
        exit();
    } else {
        header('Location:panel/political.php?delerror=6000');
        exit();
    }
}
// !---------------------------
// !  end delete  Sport
// !---------------------------
// ?
// ? Update sport
// ?
if (isset($_POST['btnpoliticalupdate'])) {
    if (empty($_POST['title']) || empty($_POST['content'])) {
        header('Location:panel/political.php?uempty=1000');
        exit();
    } else {
        $postid = $_POST['postid'];
        // foreach ($_POST as $key => $value) {
        //     echo $key . "=" . $value . "<br>";
        // }
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image;
        $filetemp = $_FILES['files']['tmp_name'];
        if (empty($filetemp)) {
            $query = "UPDATE `political` SET `title`='" . $title . "',`content`='" . $content . "' WHERE `political`.`id` = $postid;";
        } else {
            $file1 = $_FILES['files']['name'];
            $fileext = pathinfo($file1, PATHINFO_EXTENSION);
            $filetype = $_FILES['files']['type'];
            $filetemp = $_FILES['files']['tmp_name'];
            $uniq = time() . uniqid(rand());
            $path = "photo/" . $uniq . "." . $fileext;
            if (move_uploaded_file($filetemp, $path)) {
                $image = $path;
            } else {
                header('Location:panel/political.php?uerrorinupload=3000');
                exit();
            }
            $query = "UPDATE `political` SET `title`='" . $title . "',`content`='" . $content . "',`image`='" . $image . "' WHERE `political`.`id`=$postid ;";
        }
        $result = mysqli_query($link, $query);
        if ($result) {
            header('Location:panel/political.php?uok=50000');
            exit();
        }
    }
}
// ?
// ?end Update sport
// ?

// *--------------------------------------------
// *----- End Political
// *--------------------------------------------
// ?--------------------
// ?--------------------
// *--------------------------------------------
// *-----  economic
// *--------------------------------------------
// !---------------------------
// ! upload  political
// !---------------------------
if (isset($_POST['btneconomicsend'])) {
    if (empty($_FILES['files']) || empty($_POST['title']) || empty($_POST['content'])) {
        header('location:panel/economic.php?empty=1000');
        exit();
    } else {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image;
        $filename = $_FILES['files']['name'];
        $fileext = pathinfo($filename, PATHINFO_EXTENSION);
        $filesize = $_FILES['files']['size'];
        $filetype = $_FILES['files']['type'];
        $filetmp = $_FILES['files']['tmp_name'];
        if (($filetype == 'image/png') || ($filetype == 'image/jpg') || ($filetype == 'image/jpeg') || ($filetype == 'image/svg')) {
            $uniq = time() . uniqid(rand());
            $path = "photo/" . $uniq . "." . $fileext;
            if (move_uploaded_file($filetmp, $path)) {
                $image = $path;
            } else {
                header('location:panel/economic.php?noinsert=2000');
                exit();
            }
        } else {
            header('location:panel/economic.php?errorintype=3000');
            exit();
        }
        // ! sql
        $query = "INSERT INTO `economic` (`id`, `title`, `image`, `content`, `Category`) VALUES (NULL, '" . $title . "', '" . $image . "', '" . $content . "', '');";
        $result = mysqli_query($link, $query);
        if ($result) {
            header('location:panel/economic.php?ok=5000');
            exit();
        } else {
            header('location:panel/economic.php?noinsert=2000');
            exit();
        }
    }


}
// !---------------------------
// ! end upload  political
// !---------------------------

// !---------------------------
// !  delete  political
// !---------------------------
if (isset($_GET['economicid'])) {
    $postid = $_GET['economicid'];
    $query = "DELETE FROM `economic` WHERE `id` = '$postid';";
    $result = mysqli_query($link, $query);
    if ($result) {
        header('Location:panel/economic.php?delok=5000');
        exit();
    } else {
        header('Location:panel/economic.php?delerror=6000');
        exit();
    }
}
// !---------------------------
// !  end delete  Sport
// !---------------------------
// ?
// ? Update sport
// ?
if (isset($_POST['btneconomicupdate'])) {
    if (empty($_POST['title']) || empty($_POST['content'])) {
        header('Location:panel/political.php?uempty=1000');
        exit();
    } else {
        $postid = $_POST['postid'];
        // foreach ($_POST as $key => $value) {
        //     echo $key . "=" . $value . "<br>";
        // }
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image;
        $filetemp = $_FILES['files']['tmp_name'];
        if (empty($filetemp)) {
            $query = "UPDATE `economic` SET `title`='" . $title . "',`content`='" . $content . "' WHERE `economic`.`id` = $postid;";
        } else {
            $file1 = $_FILES['files']['name'];
            $fileext = pathinfo($file1, PATHINFO_EXTENSION);
            $filetype = $_FILES['files']['type'];
            $filetemp = $_FILES['files']['tmp_name'];
            $uniq = time() . uniqid(rand());
            $path = "photo/" . $uniq . "." . $fileext;
            if (move_uploaded_file($filetemp, $path)) {
                $image = $path;
            } else {
                header('Location:panel/economic.php?uerrorinupload=3000');
                exit();
            }
            $query = "UPDATE `economic` SET `title`='" . $title . "',`content`='" . $content . "',`image`='" . $image . "' WHERE `economic`.`id`=$postid ;";
        }
        $result = mysqli_query($link, $query);
        if ($result) {
            header('Location:panel/economic.php?uok=50000');
            exit();
        }
    }
}
// ?
// ?end Update sport
// ?

// *--------------------------------------------
// *----- end economic
// *--------------------------------------------

?>