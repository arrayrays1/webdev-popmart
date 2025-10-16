<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success'=>false,'message'=>'Not authenticated']);
    exit;
}

if (!isset($_POST['product_id'])) {
    echo json_encode(['success'=>false,'message'=>'Missing product_id']);
    exit;
}

require_once __DIR__ . '/db_connect.php';

$userId = (int)$_SESSION['user_id'];
$productId = (int)$_POST['product_id'];
$qty = isset($_POST['quantity']) ? max(1, (int)$_POST['quantity']) : 1;

// get or create open cart
$cartId = null;
$stmt = $conn->prepare("SELECT id FROM carts WHERE user_id = ? AND status = 'open' LIMIT 1");
$stmt->bind_param('i', $userId);
$stmt->execute();
$stmt->bind_result($cartId);
if (!$stmt->fetch()) {
    $stmt->close();
    $stmt = $conn->prepare("INSERT INTO carts (user_id, status) VALUES (?, 'open')");
    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $cartId = $stmt->insert_id;
}
$stmt->close();

// read product price
$unitPrice = 0.0;
$stmt = $conn->prepare("SELECT price FROM products WHERE id = ? LIMIT 1");
$stmt->bind_param('i', $productId);
$stmt->execute();
$stmt->bind_result($unitPrice);
if (!$stmt->fetch()) {
    echo json_encode(['success'=>false,'message'=>'Product not found']);
    exit;
}
$stmt->close();

// upsert cart item
$stmt = $conn->prepare("INSERT INTO cart_items (cart_id, product_id, quantity, unit_price) VALUES (?, ?, ?, ?) ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity), unit_price = VALUES(unit_price)");
$stmt->bind_param('iiid', $cartId, $productId, $qty, $unitPrice);
if ($stmt->execute()) {
    echo json_encode(['success'=>true]);
} else {
    echo json_encode(['success'=>false,'message'=>'DB error']);
}
$stmt->close();
$conn->close();
?>


