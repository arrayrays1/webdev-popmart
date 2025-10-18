<?php
include __DIR__ . '/db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST['loginEmail'];
  $password = $_POST['loginPassword'];

  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->execute([$email]);
  $user = $stmt->fetch();

  if ($user) {
    if (password_verify($password, $user['password'])) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['first_name'] = $user['first_name'];
      $_SESSION['last_name'] = $user['last_name'];
      $_SESSION['email'] = $user['email'];
      echo "success";
    } else {
      echo "invalid_password";
    }
  } else {
    echo "no_user";
  }
} else {
  echo "Invalid request method";
}
?>
