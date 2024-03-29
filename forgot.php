<!DOCTYPE html>
<html lang="en">
  <head>
    <title>همدان نیوز | فراموشی رمز عبور</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="Style/Style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="Style/stylelogin.css" />
  </head>
  <body class="img js-fullheight" style="background-image: url(photo/bg.jpg)">
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
              <h3 class="mb-4 text-center">فراموشی رمز عبور</h3>
              <div class="form-control l1">
              <p><?php
        if(isset($_GET["sucses"])){
            echo"<center><font color=Green>  رمز عبور شما با موفقیت برای شما ایمیل شد </font></center>";
        }
        if(isset($_GET["faild"])){
            echo"<center><font color=red> بازیابی رمز عبور با مشکل مواجه شد</font></center>";
        }
        ?></p>
                <form method="Post" action="code.php" class="signin-form">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="نام و نام خانوادگی"
                      name="forgetname"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="ایمیل "
                      name="forgetemal"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <button
                      type="submit"
                      class="form-control btn btn-primary submit px-3"
                      name="btnforget"
                    >
                      ورود
                    </button>
                  </div>
                  <div class="form-group d-md-flex">
                    <div class="w-50 text-md-right">
                      <a href="login.php" style="color: #fff">
                        بازگشت به صفحه لاگین
                      </a>
                    </div>
                    <div class="w-50 text-md-left">
                      <a href="index.php" style="color: #fff"
                        >بازگشت به صفحه اصلی
                      </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="script/jquery.min.js"></script>
    <script src="script/popper.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/main.js"></script>
  </body>
</html>
