<?php
session_start();
if (!isset($_SESSION['user_id'])) { header('Location: /website-popmart/index.php'); exit; }
require_once __DIR__ . '/db_connect.php';

$userId = (int)$_SESSION['user_id'];
$cartId = null;
$stmt = $conn->prepare("SELECT id FROM carts WHERE user_id=? AND status='open' LIMIT 1");
$stmt->bind_param('i', $userId);
$stmt->execute();
$stmt->bind_result($cartId);
if (!$stmt->fetch()) {
    $stmt->close();
    // create one if none
    $stmt = $conn->prepare("INSERT INTO carts (user_id, status) VALUES (?, 'open')");
    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $cartId = $stmt->insert_id;
}
$stmt->close();

$stmt = $conn->prepare("SELECT ci.product_id, ci.quantity, ci.unit_price, p.name, p.image_path FROM cart_items ci JOIN products p ON p.id = ci.product_id WHERE ci.cart_id = ? ORDER BY ci.id DESC");
$stmt->bind_param('i', $cartId);
$stmt->execute();
$result = $stmt->get_result();

$items = [];
$subtotal = 0.0;
while ($row = $result->fetch_assoc()) {
    $row['total'] = $row['quantity'] * $row['unit_price'];
    $subtotal += $row['total'];
    $items[] = $row;
}
$stmt->close();
$conn->close();

return [ 'items' => $items, 'subtotal' => $subtotal, 'count' => count($items) ];
?>


