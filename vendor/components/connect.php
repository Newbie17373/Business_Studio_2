<?php
$servername = "curseproject";
$db_name = "curseProject";
$db_username = "root";
$db_password = "";

try {
    $pdo = new PDO("mysql:host=curseproject;dbname=$db_name", $db_username, $db_password);
}
catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "<br/>";
    die();
 }

 $conn = mysqli_connect($servername, $db_username, $db_password, $db_name);
// Проверка соединения
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>