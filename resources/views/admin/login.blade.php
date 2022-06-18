<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APP TEMPLATE Login </title>
    <link rel="icon" href="<?=url('/')?>/assets/favicon.ico">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=url('/')?>/lte/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=url('/')?>/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=url('/')?>//npm_package/toastr/build/toastr.min.css">
    <link rel="stylesheet" href="<?=url('/')?>/lte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>APP TEMPLATE</b></a>
            <br>
            <img width="50" height="50" src="<?=url('/')?>/assets/app_icon.jpg">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form id="login_form" action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="email" placeholder="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <!-- <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label> -->
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>



            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?=url('/')?>/lte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?=url('/')?>/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=url('/')?>//npm_package/js-loading-overlay/dist/js-loading-overlay.min.js"></script>
    <script src="<?=url('/')?>//npm_package/toastr/build/toastr.min.js"></script>

    <script src="<?=url('/')?>/lte/dist/js/adminlte.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#login_form').submit(function(e) {
                e.preventDefault();
                JsLoadingOverlay.show();
                $.ajax({
                    url: '<?=url('/login/submit/')?>',
                    type: 'post',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    cache: false,
                    success: function(data) {
                        console.log(data);
                        if (!data['success']) {
                            toastr.error(data['html_message'], 'Maaf');
                        } else {
                            window.location.href = '<?=url('/')?>/admin/home/'
                        }
                        JsLoadingOverlay.hide();
                    },
                    error: function(xhr, res) {
                        toastr.error('Terjadi kesalahan', 'Maaf');

                        JsLoadingOverlay.hide();
                    }
                });

            });



        });
    </script>
</body>

</html>