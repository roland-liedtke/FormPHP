<?php
session_start();

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
    <?php
    $firstName = $_GET["firstName"];
    $lastName = $_GET["lastName"];
    $email = $_GET["email"];
    $description = $_GET["description"];

    $_SESSION['formData']['firstName'] = $firstName;
    $_SESSION['formData']['lastName'] = $lastName;
    $_SESSION['formData']['email'] = $email;
    $_SESSION['formData']['description'] = $description;

    ?>
    <section class="right-side">
        <h2>Podsumowanie</h2>
        <p>Imię: <?php echo $_SESSION['formData']['firstName'] ?> </p>
        <p>Nazwisko: <?php echo $_SESSION['formData']['lastName'] ?></p>
        <p>Adres e-mail: <?php echo $_SESSION['formData']['email'] ?></p>
        <p>Opis błędu: <?php echo $_SESSION['formData']['description'] ?></p>

        <form name="dane" method="POST" action="/WPRG-test/akceptuj.php" autocomplete="on" autofocus>
            <input type="submit" value="Akceptuj">
        </form>

    </section>



</main>

<footer>
</footer>
</body>
</html>