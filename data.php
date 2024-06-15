<?php

$db = new mysqli("localhost:8889", "root", "root", "defekty");

if ($db->connect_error) {
    die("Połączenie z bazą danych nieudane: " . $db->connect_error);
}

$query = "SELECT * FROM zgloszenia";
$result = $db->query($query);
?>

    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Lista zgłoszeń</title>
    </head>
    <body>
    <h1>Lista zgłoszeń</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>IMIĘ</th>
            <th>NAZWISKO</th>
            <th>ADRES E-MAIL</th>
            <th>OPIS BŁĘDU</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['imie'] . "</td>";
                echo "<td>" . $row['nazwisko'] . "</td>";
                echo "<td>" . $row['adres_email'] . "</td>";
                echo "<td>" . $row['defekt'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    </body>
    </html>

<?php
$db->close();
?>