<!DOCTYPE html>
<html lang="en">
  <head>
    <title>همدان نیوز | ورود به حساب کاربری</title>
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
  <!-- <?php if($_COOKIE['admin']){
    header("location:panel/index.php");
} 
else{

}
?> -->
  <body class="img js-fullheight" style="background-image: url(photo/bg.jpg)">
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
              <h3 class="mb-4 text-center">ورود به حساب کاربری</h3>
              <div class="form-control l1">
                <p><?php
        if(isset($_GET["empty"])){
            echo"<center><font color=red>مقادیر فیلد ها باید پر شود </font></center>";
        }
        if(isset($_GET["error"])){
            echo"<center><font color=red>نام کاربری یا رمز عبور اشتباه است</font></center>";
        }
        ?></p>
                <form method="Post" action="code.php" class="signin-form">
                  <div class="form-group">
                  
                    <input
                      type="email"
                      name="loginemail"
                      class="form-control"
                      placeholder="ایمیل کاربری"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <input
                      id="password-field"
                      type="password"
                      name="loginpass"
                      class="form-control"
                      placeholder="رمز عبور"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <button
                    name="btnlogin"
                      type="submit"
                      class="form-control btn btn-primary submit px-3"
                    >
                      ورود
                    </button>
                  </div>
                  <div class="form-group d-md-flex">
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
