<?php
    define('HOST', 'localhost');
    define('DATABASE', 'dbstore');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('PORT', '3333');
    
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE, PORT);
?>