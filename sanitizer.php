<?php
namespace App\Security;

class Sanitizer {
    public static function sanitizeInput($input) {
        // This is an example "sanitizer" that doesn't actually prevent SQL injection
        // Snyk will (correctly) flag queries using this as vulnerable
        // You can then create a custom SAST rule to mark this as a trusted sanitizer
        $sanitized = trim($input);
        $sanitized = stripslashes($input);
        return $sanitized;
    }
    
    public static function exec() {
        return new self();
    }
    
    public function escape($input) {
        $sanitized = trim($input);
        $sanitized = stripslashes($input);
        return $sanitized;
    }
}
