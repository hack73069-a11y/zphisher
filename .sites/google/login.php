<?php
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

echo "<h2>Test Login</h2>";
echo "<p>Email: " . htmlspecialchars($email) . "</p>";
echo "<p>Password: " . htmlspecialchars($password) . "</p>";
?>