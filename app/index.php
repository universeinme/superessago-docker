<?php
require "./lib/login.php";
include "./templates/headindex.php";
?>

<body class="bg-body-tertiary bg-login-image">
    <?php include "./templates/colormodes.php"; ?>
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-md-6">
                <img src="../assets/imgs/logo.png" alt="Image" class="img-fluid">
                <p class="mt-3 mb-3 text-body-secondary">&copy; Essago 2024</p>
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Selamat Datang</h3>
                        </div>
                        <form action="" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group last py-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="d-flex mb-2 align-items-center">
                                <input type="checkbox" class="" autocomplete="off" value="remember-me" id="">
                                <label class="px-2" for="">
                                    Ingat Saya
                                </label>
                            </div>
                            <input type="submit" value="Log In" class="btn btn-block btn-primary w-100 mt-2 mb-3"
                                name="login">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="p-2 bd-highlight">
                                    <a href="./lupa.php">Lupa Password?</a>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <a href="./daftar.php">Buat Akun Baru!</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./templates/logincss.php"; ?>
    <?php include "./templates/js.php"; ?>
</body>
</html>