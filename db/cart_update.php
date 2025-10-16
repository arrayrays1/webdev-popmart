<?php
session_start();
header('Content-Type: application/json');
if (!isset($_SESSION['user_id'])) { echo json_encode(['success'=>false,'message'=>'Not authenticated']); exit; }
require_once __DIR__ . '/db_connect.php';

$productId = isset($_POST['product_id']) ? (int)$_POST['product_id'] : 0;
$quantity = isset($_POST['quantity']) ? max(0,(int)$_POST['quantity']) : 1;
$userId = (int)$_SESSION['user_id'];

$cartId = null;
$stmt = $conn->prepare("SELECT id FROM carts WHERE user_id = ? AND status='open' LIMIT 1");
$stmt->bind_param('i', $userId);
$stmt->execute();
$stmt->bind_result($cartId);
if (!$stmt->fetch()) { echo json_encode(['success'=>false,'message'=>'Cart not found']); exit; }
$stmt->close();

if ($quantity === 0) {
    $stmt = $conn->prepare("DELETE FROM cart_items WHERE cart_id=? AND product_id=?");
    $stmt->bind_param('ii', $cartId, $productId);
    $ok = $stmt->execute();
    echo json_encode(['success'=>$ok]);
    exit;
}

$stmt = $conn->prepare("UPDATE cart_items SET quantity=? WHERE cart_id=? AND product_id=?");
$stmt->bind_param('iii', $quantity, $cartId, $productId);
$ok = $stmt->execute();
echo json_encode(['success'=>$ok]);
$stmt->close();
$conn->close();
?>


