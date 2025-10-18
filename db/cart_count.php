<?php
session_start();
header('Content-Type: application/json');
$count = 0;
if (!isset($_SESSION['user_id'])) { echo json_encode(['count'=>0]); exit; }
require_once __DIR__ . '/db_connect.php';

$userId = (int)$_SESSION['user_id'];

try {
    $sql = "SELECT COALESCE(SUM(ci.quantity),0) AS cnt FROM carts c JOIN cart_items ci ON ci.cart_id=c.id WHERE c.user_id=? AND c.status='open'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userId]);
    $count = $stmt->fetchColumn();
    echo json_encode(['count'=>(int)$count]);
} catch (PDOException $e) {
    echo json_encode(['count'=>0]);
}
?>