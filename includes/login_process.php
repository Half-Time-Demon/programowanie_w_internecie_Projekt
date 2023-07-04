<?php

require_once "db.php";

// Pobierz dane logowania z formularza
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['error']="";

// Wykonaj zapytanie do bazy danych w celu weryfikacji danych logowania
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $connection->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
    // Jeśli dane są poprawne, przekieruj do strony powitalnej lub zaloguj użytkownika w sesji
    session_start();
    $_SESSION['id'] = $user_id;
    $_SESSION['username'] = $username;
    header('Location:'.$config["site_url"].'index.php');
} else {
    // Jeśli dane są niepoprawne, wyświetl komunikat o błędzie
    $_SESSION['error']="log-err";
    header('Location:'.$config["site_url"].'content/pages/login.php');
}
//session_write_close();
?>