<?php
session_start();
require "./vendor/components/connect.php";
if(isset($_POST['reviews_text']) && isset($_POST['user_photo'])) {
    $reviews_text = $_POST['reviews_text'];
    $user_photo = $_POST['user_photo'];

    $sql = "INSERT INTO reviews (login, review, image) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sss', $_SESSION['login'], $reviews_text, $user_photo);
    mysqli_stmt_execute($stmt);
    header('Location: ./index.php');
    
    // Проверка наличия ошибок при выполнении запроса
    if (mysqli_error($conn)) {
        die("Error: " . mysqli_error($conn));
    }
    
    // Закрытие соединения с базой данных
    mysqli_close($conn);
}
?>