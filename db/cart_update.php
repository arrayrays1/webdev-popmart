<?php
session_start();
header('Content-Type: application/json');
if (!isset($_SESSION['user_id'])) { echo json_encode(['success'=>false,'message'=>'Not authenticated']); exit; }
require_once __DIR__ . '/db_connect.php';

$productId = isset($_POST['product_id']) ? (int)$_POST['product_id'] : 0;
$quantity = isset($_POST['quantity']) ? max(0,(int)$_POST['quantity']) : 1;
$userId = (int)$_SESSION['user_id'];

try {
    $stmt = $pdo->prepare("SELECT id FROM carts WHERE user_id = ? AND status='open' LIMIT 1");
    $stmt->execute([$userId]);
    $cartId = $stmt->fetchColumn();
    
    if (!$cartId) { 
        echo json_encode(['success'=>false,'message'=>'Cart not found']); 
        exit; 
    }

    if ($quantity === 0) {
        $stmt = $pdo->prepare("DELETE FROM cart_items WHERE cart_id=? AND product_id=?");
        $ok = $stmt->execute([$cartId, $productId]);
        echo json_encode(['success'=>$ok]);
        exit;
    }

    $stmt = $pdo->prepare("UPDATE cart_items SET quantity=? WHERE cart_id=? AND product_id=?");
    $ok = $stmt->execute([$quantity, $cartId, $productId]);
    echo json_encode(['success'=>$ok]);
    
} catch (PDOException $e) {
    echo json_encode(['success'=>false,'message'=>'Database error: ' . $e->getMessage()]);
}
?>


