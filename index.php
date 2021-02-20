<?php
// ファイルの読み込み
require_once('Models/Record.php');
require_once('function.php');

// DBからデータを取得
$record = new Record();
$records = $record->getAll();
// var_dump($records);

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
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">〇〇のドラマ・映画ノート</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="create.php">新しい記録を作る</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">サインイン</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">サインアウト</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="探す" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <div class="card mb-3" style="max-width: 540px;">
        <?php foreach ($records as $record): ?>
        <div class="row g-0">
            <div class="col-md-4">
                <img class="record-img" src="<?= $record['image_at']; ?>" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= h($record["title"]); ?></h5>
                    <date class="card-text"><?= h($record["date"]); ?></date>
                    <p class="card-text"><?= h($record["impression"]); ?></p>
                    <p class="card-text"><?= h($record["saying"]); ?></p>
                </div>
                <div class="card-btn">
                    <a href="edit.php?id=<?= h($record['id']); ?>" class="btn btn-primary">編集する</a>
                    <a href="#" class="btn btn-primary">削除する</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>