<?php
require_once "./dbc.php";
// var_dump(getAllFile()); →OK
$files= getAllFile();

foreach($files as $file ){
  print_r($file);
}

// var_dump("display_dir");
// var_dump($file);
// var_dump($file['display_dir']);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>favoriteHouse</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <h1>ギャラリー</h1>

    <form enctype="multipart/form-data" action="./gallery_upload.php" method="POST">
      <div class="file-up">
        <!-- UPする画像が1MB以上なら拒否する -->
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
        <input name="img" type="file" accept="image/*" />
      </div>
      <div>
        <textarea
          name="caption"
          placeholder="キャプション（140文字以下）"
          id="caption"
        ></textarea>
      </div>
      <div class="submit">
        <input type="submit" value="送信" class="btn" />
      </div>
    </form>
  
    <div>
      <?php foreach($files as $file):?>
        <img src="<?php echo "{$file['display_dir']}"; ?>" alt="">
        <?php var_dump($file['display_dir'] . "です。");?>
        <p><?php echo "{$file['description']}"; ?></p>
      <?php endforeach; ?>

    </div>


    <button type="button" class="btn btn-light" onclick="location.href='../../home.php'">Homeへ</button>

</body>
</html>