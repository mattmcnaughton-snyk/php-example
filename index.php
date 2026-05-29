<?php
require_once 'sanitizer.php';
require_once 'db.php';

use App\Security\Sanitizer;

$user_id = $_GET['id'] ?? '';

$conn = get_db_connection();

// Example 1: Static method call
$sanitized_id = Sanitizer::sanitizeInput($user_id);
$query = "SELECT * FROM users WHERE id = '" . $sanitized_id . "'";
$result = $conn->query($query);

// Example 2: Chained instance call
$sortby = Sanitizer::exec()->escape($user_id);
$query2 = "SELECT * FROM users ORDER BY " . $sortby;
$result2 = $conn->query($query2);
