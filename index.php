<?php
session_start();

$studentIndex = 's28961';

if (isset($_COOKIE[$studentIndex])) {
    echo "Użytkownik wysłał już zgłoszenie.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en-EN">
<head>
    <title>Booking</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom Style CSS -->
<!--    <link rel="stylesheet" href="style.css">-->
</head>
<body>

<main>
    <section class="right-side">
        <h2>Formularz do zgłaszania błędów</h2>
        <form name="form" method="GET" action="/WPRG-test/podsumowanie.php" autocomplete="on" autofocus>
            <fieldset id="data">
                <div>
                    Podaj dane<br>
                    <input type="text" name="firstName" placeholder="IMIĘ*:" required><br>
                    <input type="text" name="lastName" placeholder="NAZWISKO*: " required><br>
                    <input type="email" name="email" placeholder="E-MAIL*: " autocomplete="on" required><br>
                    <textarea name="description" placeholder="OPIS BŁĘDU*: " autocomplete="on" required maxlength="255"></textarea>
                </div>
            </fieldset>

            <div class="button">
                <input type="submit" value="Zarezerwuj">
            </div>
        </form>
    </section>
</main>

<footer>
</footer>
</body>
</html>