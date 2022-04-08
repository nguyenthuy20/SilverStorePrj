<?php
    include 'views/client/layouts/master.php';
    require_once "connection.php";
    require_once "Models/User.php";
?>

<?php startblock('title') ?>
Fowler - Đăng nhập
<?php endblock() ?>

<?php startblock('css') ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <style>
        input#fullname, input#date_of_birth, input#email, input#user_name, input#password, input#confirm_password {
            margin-top: 0px;
        }
        .help-block{
            color: #fe7676;
            font-style: italic;
            font-size: 12px;
        }

    </style>
<?php endblock() ?>

<?php startblock('content') ?>
    <!-- BANNER AREA START -->
    <section class="bannerhead-area">
        <div class="container">
            <div class="row" style="margin-left: 298px; margin-right: -201px;">
                <div class="col-md-12">
                    <div class="banner-heading">
                        <h1 style="padding-right: 500px;">ĐĂNG NHẬP</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER AREA END -->

    <!-- ACCOUNT FROM AREA START -->
    <section class="user-form-part">
        <div class="container" id="dangnhap">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    <div class="user-form-card">
                        <div class="user-form-title" style="text-align: center; padding-top: 25px;">
                            <a href="/" class="header-logo-login">
                                <img src="assets/client/img/caobac-logo.jpg" alt="Header Logo" width="40%">
                            </a>
                            <p style="padding-top:10px">Vui lòng nhập đúng thông tin để đăng nhập</p>
                        </div>

                        <!--Đăng nhập-->
                        <form class="user-form" action="<?php echo Route::name('login.login') ?>" method="POST" id="login-form">
                            <div class="form-group">
                                <label class="login-label-class">Nhập tên tài khoản</label>
                                <input type="text" name="user_name" class="form-control" ="Nhập tên tài khoản" />
                                <span class="help-block login-username-validate" />
                            </div>
                            <div class="form-group">
                                <label class="login-label-class">Nhập mật khẩu</label>
                                <input type="password" name="password" class="form-control" ="Nhập mật khẩu" />
                                <span class="help-block login-password-validate" />
                            </div>
                            <div class="form-button">
                                <button id="dang-nhap-1" type="submit" style="color: white; font-size: 15px;">Đăng nhập</button>
                            </div>
                        </form>

                        <div class="user-form-remind">
                            <p> Bạn chưa có tài khoản?
                                <button  id="show-login" style="color: #ef7676;" >Đăng ký</button>
                            </p>
                        </div>
                    </div>

                    <!-- Đăng ký form-->
                    <form class="user-form" action="<?php echo Route::name('login.register'); ?>" method="POST" id="register" style="text-align: center">
                        <img class="header-logo-login" src="assets/client/img/caobac-logo.jpg" alt="Header Logo" width="40%">
                        <p style="padding-top:10px; text-align: center; font-size: 15px">Vui lòng nhập đúng thông tin để đăng ký</b></p>
                        <div class="close-btn">&times;</div>
                        <div class="form-group">
                            <p class="register-id">Họ và tên</p>
                            <input class="form-control text-box single-line fullname" data-val="true" id="fullname" name="fullname" type="text" />
                            <span class="help-block fullname-validate" />
                        </div>

                        <div class="form-group">
                            <p class="register-id">Ngày sinh </p>
                            <input class="form-control text-box single-line date_of_birth" data-val="true"  id="date_of_birth" name="date_of_birth" type="text" />
                            <span class="help-block date-of-birth-validate" />
                        </div>
                            <div class="form-group">
                                <p class="register-id">Email </p>
                                <input class="form-control text-box single-line email" data-val="true"  id="email" name="email" type="email" />
                                <span class="help-block email-validate" />
                            </div>
                            <div class="form-group">
                                <p class="register-id">Tên tài khoản </p>
                                <input class="form-control text-box single-line user_name" data-val="true"  id="user_name" name="user_name" type="text" />
                                <span class="help-block username-validate" />
                            </div>

                            <div class="form-group">
                                <p class="register-id">Mật khẩu </p>
                                <input class="form-control text-box single-line password" data-val="true"  id="password" name="password" type="password" />
                                <span class="help-block password-validate" />
                            </div>

                            <div class="form-group">
                                <p class="register-id">Nhập lại mật khẩu </p>
                                <input class="form-control text-box single-line confirm_password" data-val="true" id="confirm_password" name="confirm_password"  type="password" />
                                <span class="help-block confirm-password-validate" />
                            </div>
                            <div class="form-button">
                                <button id="dang-ky-1" type="submit" >Đăng ký</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

<?php endblock() ?>

<?php startblock('script') ?>

    <!-- Validate form Register -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php include 'views/client/layouts/auth_script.php' ?>
    <script>
        // hiển thị register form
        document.querySelector("#show-login").addEventListener("click",function() {
            document.querySelector("#register").classList.add("active");
        }	);
        document.querySelector("#register .close-btn").addEventListener("click",function() {
            document.querySelector("#register").classList.remove("active");
        }	);
        //

        function validateRegisterForm(){
            var datepicker = $('#register').find('.date_of_birth').first();
            initDatepicker(datepicker);

            var options = {
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    user_name: {
                        container: '.username-validate',
                        validators: {
                            notEmpty: {
                                message: 'Tên tài khoản không được để trống'
                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'Tên tài khoản phải từ 6-30 ký tự'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\.]+$/,
                                message: 'Tên tài khoản không được chứa ký tự đặc biệt'
                            },
                            different: {
                                field: 'password',
                                message: 'Tên tài khoản không được trùng mật khẩu'
                            },
                            remote: {
                                message: "Tên tài khoản đã tồn tại",
                                url: "<?php echo Route::name('login.check-username')?>",
                                data: {
                                    user_name: 'user_name'
                                },
                                dataType: 'JSON',
                                type: 'POST',
                                delay: 2000     // Send Ajax request every 2 seconds
                            }
                        }
                    },
                    email: {
                        container: '.email-validate',
                        validators: {
                            notEmpty: {
                                message: 'Email không được để trống'
                            },
                            emailAddress: {
                                message: 'Email phải đúng định dạng'
                            }
                        }
                    },
                    password: {
                        container: '.password-validate',
                        validators: {
                            notEmpty: {
                                message: 'Mật khẩu không được để trống'
                            },
                            identical: {
                                field: 'password',
                                message: "Mật khẩu nhập lại không trùng khớp",
                            }
                        }
                    },

                    confirm_password: {
                        container: '.confirm-password-validate',
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập lại mật khẩu'
                            },
                            identical: {
                                field: 'password',
                                message: "Mật khẩu nhập lại không trùng khớp",
                            }
                        }
                    },
                    fullname: {
                        container: '.fullname-validate',
                        validators: {
                            notEmpty: {
                                message: 'Họ tên không được để trống'
                            }
                        }
                    },

                    date_of_birth: {
                        container: '.date-of-birth-validate',
                        validators: {
                            notEmpty: {
                                message: 'Ngày sinh không được để trống'
                            }
                        }
                    }
                }
            };
            $('#register').bootstrapValidator(options);
        }


        function validateLoginForm(){
            $('#login-form').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    user_name: {
                        container: '.login-username-validate',
                        validators: {
                            notEmpty: {
                                message: 'Bạn cần phải nhập tên tài khoản'
                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'Tên tài khoản phải từ 6-30 ký tự'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\.]+$/,
                                message: 'Tên tài khoản không được chứa ký tự đặc biệt'
                            },
                            different: {
                                field: 'password',
                                message: 'Tên tài khoản không được giống mật khẩu'
                            }
                        }
                    },
                    password: {
                        container: '.login-password-validate',
                        validators: {
                            notEmpty: {
                                message: 'Bạn cần phải nhập mật khẩu'
                            }
                        }
                    }
                }
            });
        }


        $(document).ready(function(){
            setTimeout(function(){
                validateRegisterForm();
                validateLoginForm();
            },2000);
        });

    </script>

<?php endblock()?>















