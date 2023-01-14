<?php



 ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>favoriteHouse</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>
    <h1>Home画面</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4 col-md-8 m-auto">
        <div class="col">
            <div class="card h-100">
                <img src="res/camera.png"  alt="..." class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">ToDo</h5>
                    <p class="card-text">タスクや打ち合わせの日程を見ることができます。</p>
                </div>
                <a href="#" class="btn btn-outline-info" onclick="location.href='./php/todo/todo_top.php'">Go Todo</a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="res/camera.png" alt="..." class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">ギャラリー</h5>
                    <p class="card-text">気に入った間取りや家の画像を見ることができます。</p>
                </div>
                <a href="#" class="btn btn-outline-info" onclick="location.href='./php/gallery/gallery_top.php'">Go ギャラリー</a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="res/hand-2.png" alt="..." class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">アンケート</h5>
                    <p class="card-text">どっちがいいか迷った時はアンケートを作って聞いてみましょう。</p>
                </div>
                <a href="#" class="btn btn-outline-info" onclick="location.href='./php/questionnaire/questionnaire_top.php'">Go アンケート</a>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="res/camera.png" alt="..." class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">チャット</h5>
                    <p class="card-text">チャットができます</p>
                </div>
                <a href="#" class="btn btn-outline-info" onclick="location.href='./php/chat/chat.php'">Go チャット</a>

            </div>
        </div>
    </div>


</body>

</html>