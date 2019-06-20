<?php
include '../setting/Database.php';
include '../setting/Functions.php';

$database = new Database();
$fungsi = new Functions();
$alert = '';

$fungsi->logged();

if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'login') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($database->auth($username, $password)) {
            $_SESSION['logged'] = true;
            header('location:../sistem/index.php');
            exit;
        } else {
            $alert = $fungsi->alert("Username atau Passord salah!!!", "alert-danger");
        }
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../asset/bootstrap_4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/fontawesome-free-5.7.1-web/css/all.min.css">

    <!-- my style -->
    <link rel="stylesheet" href="../asset/style.css">

    <title>Keamanan Sistem</title>
</head>

<body class="login">

    <div class="container text-center">
        <?= $alert ?>
        <div class="login-box">
            <h1>
                Login to access the system
            </h1>
            <div class="home-icon">
                <i class="fa fa-home"></i>
            </div>

            <form action="" method="post">
                <div class="input-form mx-auto">

                    <div class="input">
                        <i class="fa fa-user"></i>|
                        <input type="text" name="username" placeholder="Enter your Username" required> </div>
                    <div class="input">
                        <i class="fa fa-lock"></i>|
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                </div>
                <button class="submit btn btn-primary" type="submit" name="submit" value="login">Login</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../asset/bootstrap_4/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../asset/bootstrap_4/js/popper.min.js"></script>
    <script src="../asset/bootstrap_4/js/bootstrap.min.js"></script>

</body>

</html>