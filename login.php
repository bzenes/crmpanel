<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html class="h-100" lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Panel Login Page</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="h-100">

    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="login.php">
                                    <h4>Panel</h4>
                                </a>

                                <form method="#" class="mt-5 mb-5 login-input" id="login-form">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php if(isset($_COOKIE["email"])){ echo $_COOKIE["email"];} ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Şifre" value="<?php if(isset($_COOKIE["pass"])){ echo $_COOKIE["pass"];} ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                            <input name="rem" type="checkbox" class="form-check-input">Beni Hatırla</label>
                                        </div>
                                    </div>
                                    <input type="submit" value="Giriş Yap" id="login-btn" class="btn login-form__btn submit w-100" />
                                </form>
                                <div id="alert"></div>
                                <!--
                                    <p class="mt-5 login-form__footer">Hesabınız yok mu? <a href="register.php" class="text-primary">Kayıt Ol</a> now</p>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="admin/ajaxFunc.js"></script>
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

</html>