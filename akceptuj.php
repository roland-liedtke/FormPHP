<?php
session_start();

$studentIndex = 's28961';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['formData'])) {

        $db = new mysqli("localhost:8889", "root", "root", "defekty");

        if ($db->connect_error) {
            die("Połączenie z bazą danych nieudane: " . $db->connect_error);
        }

        $firstName = $db->real_escape_string($_SESSION['formData']['firstName']);
        $lastName = $db->real_escape_string($_SESSION['formData']['lastName']);
        $email = $db->real_escape_string($_SESSION['formData']['email']);
        $description = $db->real_escape_string($_SESSION['formData']['description']);

        $query = "INSERT INTO zgloszenia (imie, nazwisko, adres_email, defekt) VALUES ('$firstName', '$lastName', '$email', '$description')";

        if ($db->query($query) === TRUE) {
            echo "Zgłoszenie zostało zapisane.";
        } else {
            echo "Błąd: " . $db->error;
        }

        $db->close();

        // Ustawienie ciasteczka
        setcookie($studentIndex, date('Y-m-d H:i:s'), time() + 3600);

        // Czyszczenie sesji
        unset($_SESSION['formData']);
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zgłoszenie zaakceptowane</title>
</head>
<body>
</body>
</html>