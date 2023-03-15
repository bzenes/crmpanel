<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register Panel Page</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
                                    <a class="text-center" href="register.php"> <h4>Panel</h4></a>
                                <form class="mt-5 mb-5 login-input" method="#" id="register-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="rname"  placeholder="Ad" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="surname" id="rsurname"  placeholder="Soyad" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="remail" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pass" id="rpass" placeholder="Şifre" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="passControl" id="rpassControl" placeholder="Şifre Kontrol" required>
                                    </div>
                                    <input type="submit" value="Kayıt Ol" id="register-btn" class="btn login-form__btn submit w-100" />
                                </form>
                                    <div id="passError" class="text-danger"></div>
                                    <div id="alert"></div>
                                    <!-- <p class="mt-5 login-form__footer">Have account <a href="#" class="text-primary">Sign Up </a> now </p> </p> -->
                                </div>
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





