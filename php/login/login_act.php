<?php
session_start();
include(dirname(__FILE__,2).'/functions.php');

// データ受け取り
$username = $_POST['username'];
$password = $_POST['password'];

// var_dump($username);
// var_dump($password);

// DB接続
$pdo = connect_to_db();

// SQL実行
$sql = 'SELECT * FROM users_table WHERE username=:username AND password=:password AND deleted_at IS NULL ';

$stmt = $pdo->prepare($sql);
$stmt -> bindValue(':username',$username, PDO::PARAM_STR);
$stmt -> bindValue(':password',$password, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
  } catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
  }
  

// ユーザ有無で条件分岐
$user = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($sql);
var_dump($user);
if (!$user) {
  echo "<p>ログイン情報に誤りがあります</p>";
  echo "<a href=index.php>ログイン</a>";
  exit();
} else {
    echo "<p>ログインします</p>";
  $_SESSION = array();
  $_SESSION['session_id'] = session_id();
  $_SESSION['is_admin'] = $user['is_admin'];
  $_SESSION['username'] = $user['username'];
  header("Location:../../home.php");
  exit();
}

?>
<h1>test</h1>