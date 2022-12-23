<?php
require_once('database.php');
$db = new Database();

$name = $_POST['name'];
$regNo = $_POST['regno'];
$class = $_POST['class'];

$db->Insert($name, $regNo, $class);
?>