<?php
require_once __DIR__ . '/lib/DataSource.php';
$database = new DataSource();
$sql = "SELECT * FROM users ORDER BY userId DESC";
$result = $database->select($sql);
?>