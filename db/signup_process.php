<?php
include __DIR__ . '/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['signupEmail'];
  $contact = $_POST['contactNumber'];
  $password = password_hash($_POST['signupPassword'], PASSWORD_DEFAULT);

  $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, contact_number, password) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $firstName, $lastName, $email, $contact, $password);

  if ($stmt->execute()) {
    echo "success";
  } else {
    if (str_contains($stmt->error, 'Duplicate entry')) {
      echo "duplicate_email";
    } else {
      echo "error: " . $stmt->error;
    }
  }

  $stmt->close();
  $conn->close();
} else {
  echo "Invalid request method";
}
?>
