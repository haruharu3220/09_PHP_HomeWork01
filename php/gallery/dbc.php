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


    $sql = "INSERT INTO file_table(id,file_name,file_path,category,description,insert_time,update_time) 
            VALUE(NULL, :file_name, :file_path, :category, :description, now(), now())";


try{
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':file_name',$filename,PDO::PARAM_STR);
    $stmt->bindValue(':file_path',$save_path,PDO::PARAM_STR);
    $stmt->bindValue(':category',"テスト",PDO::PARAM_STR);
    $stmt->bindValue(':description',"これはテストだよ",PDO::PARAM_STR);
    $result = $stmt->execute();

    echo ("画像をDBに保存しました。");
    return $result;
}catch(\Exception $e){
    exit($e->getMessage());
    return $result;
}



}


/**
 * 
 * 
 * 
 */
function getAllFile(){

    $pdo =connect_to_db();
    $sql = "SELECT * FROM file_table";
    $fileData = $pdo->query($sql);

    return $fileData;
}