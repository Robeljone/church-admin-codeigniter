<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url('plugins/fontawesome-free/css/all.min.css')?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('dist/css/adminlte.min.css')?>">
</head>

<body class="hold-transition login-page" style="background-color: white;">
    <div class="login-box">
        <div class="login-logo">
            <img class="brand-image img-circle elevation-2" style="opacity: .8"
                src="<?=base_url('images/comlog.jpg')?>"><br>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login Panel</p>
                <form  method="post" action="/Admin/auth">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="User Name" required="required">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4" style="color: #f87d3a;">
                            <button type="submit" class="btn btn-primary btn-block">Login In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <footer class="main-footer" style="margin-left: 1%;">
        <strong>Copyright &copy; 2021 <a href="#">EOTC</a>.</strong> All rights reserved.
    </footer>
    <!-- /.login-box -->
    <!-- jQuery -->
    <script src="<?=base_url('plugins/jquery/jquery.min.js')?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?=base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url('dist/js/adminlte.min.js')?>"></script>
</body>

</html>