<?php
function get_db_connection() {
    $host = 'localhost';
    $dbname = 'test_db';
    $username = 'root';
    $password = '';
    
    return new mysqli($host, $username, $password, $dbname);
}
