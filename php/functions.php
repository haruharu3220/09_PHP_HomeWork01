<?php

function connect_to_db()
{
    // DB接続
    $dbn = 'mysql:dbname=gsf_d12_12;charset=utf8mb4;port=3306;host=localhost';
    $user = 'root';
    $pwd = '';

    var_dump("functions関数を呼び出しました。");
    try {
        return new PDO($dbn, $user, $pwd);
        
    } catch (PDOException $e) {
        echo json_encode(["db error" => "{$e->getMessage()}"]);
        exit();
    }
}

?>

