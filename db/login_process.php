<?php
include __DIR__ . '/db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST['loginEmail'];
  $password = $_POST['loginPassword'];

  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

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

  $stmt->close();
  $conn->close();
} else {
  echo "Invalid request method";
}
?>
