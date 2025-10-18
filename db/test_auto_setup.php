<?php
/**
 * Test script for PopMart automatic database setup
 * 
 * This script tests the automatic database initialization system.
 * Run this script to verify your database setup is working correctly.
 * 
 * Usage: Access via browser at http://localhost/website-popmart/db/test_auto_setup.php
 */

// Include the database connection
require_once 'db_connect.php';

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PopMart Database Setup Test</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        .success { color: #27ae60; background: #d5f4e6; padding: 15px; border-radius: 5px; margin: 10px 0; }
        .info { color: #3498db; background: #ebf3fd; padding: 15px; border-radius: 5px; margin: 10px 0; }
        .error { color: #e74c3c; background: #fdf2f2; padding: 15px; border-radius: 5px; margin: 10px 0; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>";

echo "<h1>PopMart Database Setup Test</h1>";

try {
    // Test database connection
    echo "<div class='success'>";
    echo "<h3>✅ Database Connection Successful</h3>";
    echo "<p>Connected to database successfully using PDO.</p>";
    echo "</div>";
    
    // Test if tables exist
    $tables = ['users', 'products', 'carts', 'cart_items', 'contact_messages'];
    $existing_tables = [];
    
    foreach ($tables as $table) {
        $stmt = $pdo->query("SHOW TABLES LIKE '$table'");
        if ($stmt->rowCount() > 0) {
            $existing_tables[] = $table;
        }
    }
    
    echo "<div class='info'>";
    echo "<h3>📊 Database Tables Status</h3>";
    echo "<p>Found " . count($existing_tables) . " out of " . count($tables) . " expected tables.</p>";
    echo "<ul>";
    foreach ($tables as $table) {
        $status = in_array($table, $existing_tables) ? "✅" : "❌";
        echo "<li>$status $table</li>";
    }
    echo "</ul>";
    echo "</div>";
    
    // Test products data
    if (in_array('products', $existing_tables)) {
        $stmt = $pdo->query("SELECT COUNT(*) as count FROM products");
        $product_count = $stmt->fetch()['count'];
        
        echo "<div class='info'>";
        echo "<h3>🛍️ Products Data</h3>";
        echo "<p>Found $product_count products in the database.</p>";
        
        if ($product_count > 0) {
            $stmt = $pdo->query("SELECT category, COUNT(*) as count FROM products GROUP BY category ORDER BY category");
            $categories = $stmt->fetchAll();
            
            echo "<table>";
            echo "<tr><th>Category</th><th>Product Count</th></tr>";
            foreach ($categories as $category) {
                echo "<tr><td>" . htmlspecialchars($category['category']) . "</td><td>" . $category['count'] . "</td></tr>";
            }
            echo "</table>";
        }
        echo "</div>";
    }
    
    // Check installation marker
    $install_marker = __DIR__ . '/.installed';
    if (file_exists($install_marker)) {
        $marker_data = json_decode(file_get_contents($install_marker), true);
        echo "<div class='success'>";
        echo "<h3>🏁 Installation Status</h3>";
        echo "<p>Database has been initialized successfully.</p>";
        echo "<p><strong>Installed:</strong> " . ($marker_data['timestamp'] ?? 'Unknown') . "</p>";
        echo "<p><strong>Version:</strong> " . ($marker_data['version'] ?? 'Unknown') . "</p>";
        echo "</div>";
    } else {
        echo "<div class='error'>";
        echo "<h3>⚠️ Installation Marker Missing</h3>";
        echo "<p>The .installed marker file is missing. This may indicate an incomplete setup.</p>";
        echo "</div>";
    }
    
    // Database connection info
    echo "<div class='info'>";
    echo "<h3>🔧 Connection Information</h3>";
    echo "<p><strong>PDO Driver:</strong> " . $pdo->getAttribute(PDO::ATTR_DRIVER_NAME) . "</p>";
    echo "<p><strong>Server Version:</strong> " . $pdo->getAttribute(PDO::ATTR_SERVER_VERSION) . "</p>";
    echo "<p><strong>Connection Status:</strong> Active</p>";
    echo "</div>";
    
} catch (Exception $e) {
    echo "<div class='error'>";
    echo "<h3>❌ Test Failed</h3>";
    echo "<p>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "</div>";
}

echo "<hr>";
echo "<p><small>Test completed at " . date('Y-m-d H:i:s') . "</small></p>";
echo "<p><a href='../index.php'>← Back to PopMart Website</a></p>";

echo "</body></html>";
?>
