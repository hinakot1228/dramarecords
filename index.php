<?php
// ファイルの読み込み
require_once('Models/Record.php');
require_once('Models/User.php');
require_once('function.php');

// セッションを開始
session_start();

// DBからデータを取得
$record = new Record();
$records = $record->getAll();
// var_dump($records);

// DBからニックネームを取得
if (isset($_SESSION['id'])) {
    $name = $_SESSION['nickname'];
} else {
    $name = 'あなた';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; ">
        <div class="container-fluid header">
            <a class="navbar-brand" href="#"><?= $name; ?>のドラマ・映画ノート</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="create.php"><i class="far fa-plus-square"></i>新しい記録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signupForm.php"><i class="fas fa-user-plus"></i>サインアップ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signinForm.php"><i class="fas fa-sign-in-alt"></i>サインイン</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signout.php"><i class="fas fa-sign-out-alt"></i>サインアウト</a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="探す" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                </form> -->
            </div>
        </div>
    </nav>

    <section class="body-section">
        <div class="row p-3 card-body">
            <?php foreach ($records as $record) : ?>
                <div class="col-lg-3">
                    <div class="card">
                        <img class="record-img" src="<?= $record['image_at']; ?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= h($record["title"]); ?></h5>
                            <date class="card-text"><?= h($record["date"]); ?></date>
                            <p class="card-text"><?= h($record["impression"]); ?></p>
                            <p class="card-text"><?= h($record["saying"]); ?></p>
                            <div class="card-btn">
                            <a href="edit.php?id=<?= h($record['id']); ?>" class="btn btn-primary"><i class="fas fa-edit"></i>編集</a>
                            <a href="delete.php?id=<?= h($record['id']); ?>" class="btn btn-primary"><i class="fas fa-trash-alt"></i>削除</a>
                        </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>