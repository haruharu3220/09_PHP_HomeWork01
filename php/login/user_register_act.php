<?php
include(dirname(__FILE__,2).'/functions.php');

if (
  !isset($_POST['username']) || $_POST['username'] === '' ||
  !isset($_POST['password']) || $_POST['password'] === ''
) {
  exit('paramError');
}

$username = $_POST["username"];
$password = $_POST["password"];

$pdo = connect_to_db();

$sql = 'SELECT COUNT(*) FROM users_table WHERE username=:username';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

if ($stmt->fetchColumn() > 0) {
  echo '<p>すでに登録されているユーザです．</p>';
  echo '<a href="todo_login.php">login</a>';
  exit();
}

$sql = 'INSERT INTO users_table(id, username, password, is_admin, created_at, updated_at, deleted_at) VALUES(NULL, :username, :password, 0, now(), now(), NULL)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:todo_login.php");
exit();
