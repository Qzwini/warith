<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("remotemysql.com", "U54Wysy9Sq", "0ka02TEh8H", "U54Wysy9Sq");
$link->set_charset("utf8");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
