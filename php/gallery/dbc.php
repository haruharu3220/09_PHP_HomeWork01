<?php

require_once "../functions.php";


/**
 *ファイルデータを保存
 * @param string $filename
 * @param string $save_path
 * @param string $caption
 * @return bool $result
 */
function fileSave($filename,$save_path,$caption)
{

    $pdo =connect_to_db();
    $result = false;


    $sql = "INSERT INTO file_table(file_name,file_path,description) VALUE(?,?,?)"


    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1,$filename);
    $stmt->bindValue(2,$save_path);
    $stmt->bindValue(3,$caption);        

    $result = $stmt->execute();


}


