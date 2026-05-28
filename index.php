<?php
require_once 'sanitizer.php';
require_once 'db.php';

$user_id = $_GET['id'] ?? '';

// Using custom sanitizer (Snyk will flag this as SQL injection)
$sanitized_id = custom_sanitize_input($user_id);

$conn = get_db_connection();
$query = "SELECT * FROM users WHERE id = '" . $sanitized_id . "'";
$result = $conn->query($query);
