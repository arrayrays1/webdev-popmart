<?php
header('Content-Type: application/json');
require_once __DIR__ . '/db_connect.php';

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if ($name === '' || $email === '' || $message === '') {
    echo json_encode(['success'=>false,'message'=>'All fields are required.']);
    exit;
}

try {
    $stmt = $pdo->prepare('INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)');
    $ok = $stmt->execute([$name, $email, $message]);
    echo json_encode(['success'=>$ok]);
} catch (PDOException $e) {
    echo json_encode(['success'=>false,'message'=>'Database error: ' . $e->getMessage()]);
}
?>


