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
$user->login($userid, $password);
