<!DOCTYPE html>
<html lang="en">
<head>
    <title>Giriş Yap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/common/backend/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/common/backend/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/common/backend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/common/backend/login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/common/backend/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/common/backend/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/common/backend/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/common/backend/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/common/backend/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/common/backend/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="/common/backend/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{route('admin.authenticate')}}" method="post">
                @CSRF
					<span class="login100-form-title p-b-26">
						Hoşgeldiniz
					</span>
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                    @elseif(Session::has('success'))
                        <div class="alert alert-danger">
                            {{session('success')}}
                        </div>
                    @endif
                <span class="login100-form-title p-b-48">
						<img src="/common/backend/images/mynet-logo.png" class="mr-2" alt="logo"/>
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Şifre"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Giriş Yap
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
/backend/login/<!--===============================================================================================-->
<script src="/common/backend/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="common//common/backend/login/vendor/bootstrap/js/popper.js"></script>
<script src="/common/backend/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/common/backend/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/common/backend/login/vendor/daterangepicker/moment.min.js"></script>
<script src="/common/backend/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/common/backend/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/common/backend/login/js/main.js"></script>

</body>
</html>
