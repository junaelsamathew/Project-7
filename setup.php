<?php
// Database setup script
require_once 'config/database.php';

echo "<h1>Swiggy Database Setup</h1>";

try {
    // Read and execute SQL schema
    $sql = file_get_contents('sql/schema.sql');
    
    // Split SQL into individual statements
    $statements = array_filter(array_map('trim', explode(';', $sql)));
    
    $pdo->exec("SET foreign_key_checks = 0");
    
    foreach ($statements as $statement) {
        if (!empty($statement)) {
            $pdo->exec($statement);
            echo "<p>✓ Executed: " . substr($statement, 0, 50) . "...</p>";
        }
    }
    
    $pdo->exec("SET foreign_key_checks = 1");
    
    echo "<h2>✅ Database setup completed successfully!</h2>";
    echo "<p><a href='swiggyhome.php'>Go to Swiggy Home</a></p>";
    
} catch (PDOException $e) {
    echo "<h2>❌ Database setup failed:</h2>";
    echo "<p style='color: red;'>" . $e->getMessage() . "</p>";
}
?>

