<?php
include '../setting/Functions.php';
$fungsi = new Functions();

$fungsi->not_logged();
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
    <link rel="stylesheet" href="../asset/style.css">
    <title>Keamanan Sistem</title>
</head>

<body class="dashboard">

    <div class="content text-center">
        <h1>Welcome to the System Security System</h1>
        <div class="kelopok">
            <h3>Arranged by : </h3>
            <p>Owen Wattimena (1316144074)</p>
        </div>
        <a href="../autentikasi/logout.php" class="btn btn-danger">Logout</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../asset/bootstrap_4/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../asset/bootstrap_4/js/popper.min.js"></script>
    <script src="../asset/bootstrap_4/js/bootstrap.min.js"></script>

</body>

</html>