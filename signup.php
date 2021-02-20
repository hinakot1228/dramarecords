<?php
// ファイルの読み込み
require_once('Models/User.php');

// データの受け取り
$nickname = $_POST['nickname'];
$userid = $_POST['userid'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$currentTime = date("Y/m/d H:i:s");
// var_dump($nickname);

// DBへのデータ保存
$user = new User();
$user->findByUserId($nickname, $userid, $password, $currentTime);

// リダイレクト処理
// header('location:index.php');
// exit;
?>