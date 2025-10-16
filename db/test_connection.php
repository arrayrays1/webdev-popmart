<?php
// Test database connection and table structure
include __DIR__ . '/db_connect.php';

echo "<h2>Database Connection Test</h2>";

// Test connection
if ($conn->connect_error) {
    echo "<p style='color: red;'>Connection failed: " . $conn->connect_error . "</p>";
} else {
    echo "<p style='color: green;'>Database connection successful!</p>";
    
    // Check if users table exists
    $result = $conn->query("SHOW TABLES LIKE 'users'");
    if ($result->num_rows > 0) {
        echo "<p style='color: green;'>Users table exists!</p>";
        
        // Show table structure
        $result = $conn->query("DESCRIBE users");
        echo "<h3>Users table structure:</h3>";
        echo "<table border='1' style='border-collapse: collapse;'>";
        echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Field'] . "</td>";
            echo "<td>" . $row['Type'] . "</td>";
            echo "<td>" . $row['Null'] . "</td>";
            echo "<td>" . $row['Key'] . "</td>";
            echo "<td>" . $row['Default'] . "</td>";
            echo "<td>" . $row['Extra'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        // Count existing users
        $result = $conn->query("SELECT COUNT(*) as count FROM users");
        $count = $result->fetch_assoc()['count'];
        echo "<p>Total users in database: " . $count . "</p>";
        
    } else {
        echo "<p style='color: red;'>Users table does not exist!</p>";
        echo "<p>Please run the SQL script in create_users_table.sql to create the table.</p>";
    }
}

$conn->close();
?>
