<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Favicon -->

    <!-- Custom styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.min.css">
</head>

<body>
    <div class="container">
        <main class="page-center">
            <article class="sign-up">
                <h1 class="sign-up__title">Welcome</h1>
                <form class="sign-up-form form" action="<?php echo base_url('index.php/welcome/user')?>" method="POST">
                    <label class="form-label-wrapper">
                        <!-- <form action="<?php echo base_url('index.php/welcome/user')?>" method="GET" > -->
                        <div class="form-group">
                            <label for="cari">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="cari"> Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        </br>
                        <input class="form-btn primary-default-btn transparent-btn" type="submit" value="Login">
                        </br>
                        <input class="form-btn primary-default-btn transparent-btn" type="reset" value="Reset">
                </form>
            </article>
        </main>
    </div>
    <!-- Chart library -->
    <script src="<?php echo base_url(); ?>/assets/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="<?php echo base_url(); ?>/assets/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="<?php echo base_url(); ?>/assets/js/script.js"></script>
</body>

</html>