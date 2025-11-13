<?php
// authenticate.php

// Ensure $conn is always defined
$conn = pg_connect("host=localhost dbname=mydb user=postgres password=123");
if (!$conn) {
    die("Database connection failed.");
}

$query = "SELECT * FROM users WHERE username = $1 AND password = $2";
$result = pg_query_params($conn, $query, [$username, $password]);

if ($result !== false && pg_num_rows($result) > 0) {
    // User exists, proceed
    echo "Login successful";
} else {
    echo "Invalid username or password";
}

// No closing PHP tag and no trailing whitespace



