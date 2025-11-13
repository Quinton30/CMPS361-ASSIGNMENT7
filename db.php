<?php
// db.php

$conn = pg_connect("host=localhost dbname=mydb user=postgres password=123");
if (!$conn) {
    die("Database connection failed.");
}

// Removed closing PHP tag and trailing whitespace

