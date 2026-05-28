<?php
require_once 'sanitizer.php';
require_once 'db.php';

use App\Security\Sanitizer;

$user_id = $_GET['id'] ?? '';

// Using custom sanitizer (Snyk will flag this as SQL injection)
// Fully qualified path: App\Security\Sanitizer::sanitizeInput
$sanitized_id = Sanitizer::sanitizeInput($user_id);

$conn = get_db_connection();
$query = "SELECT * FROM users WHERE id = '" . $sanitized_id . "'";
$result = $conn->query($query);
