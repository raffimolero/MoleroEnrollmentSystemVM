<?php

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');

list($database, $student_id, $subject_id) = explode(':', base64_decode($_GET['params']));