<?php
// ファイルの読み込み
require_once('Models/User.php');

// セッションを開始
session_start();

// データの受け取り
$userid = $_POST['userid'];
$password = $_POST['password'];
$currentTime = date("Y/m/d H:i:s");

// DBからデータを読み込む
$user = new User();
list($msg, $link) = $user->login($userid, $password);

// header('location:index.php');
// exit;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>サインイン｜記録ノートアプリ</title>
</head>

<body>
    <div class="alert d-flex flex-column justify-content-center d-flex justify-content-center">
        <div class="alert-msg">
            <div class="alert alert-danger" role="alert">
                <?= $msg; ?>
            </div>
        </div>
        <div class="alert-btn">
            <a href="signinForm.php" class="btn btn-dark">
                <i class="fas fa-sign-in-alt"></i><?= $link; ?>
            </a>
        </div>
    </div>'
</body>

</html>