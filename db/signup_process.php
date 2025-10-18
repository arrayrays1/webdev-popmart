<?php
include __DIR__ . '/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['signupEmail'];
  $contact = $_POST['contactNumber'];
  $password = password_hash($_POST['signupPassword'], PASSWORD_DEFAULT);

  try {
    $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, email, contact_number, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$firstName, $lastName, $email, $contact, $password]);
    echo "success";
  } catch (PDOException $e) {
    if (str_contains($e->getMessage(), 'Duplicate entry')) {
      echo "duplicate_email";
    } else {
      echo "error: " . $e->getMessage();
    }
  }
} else {
  echo "Invalid request method";
}
?>
