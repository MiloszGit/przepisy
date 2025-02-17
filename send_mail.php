<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    if (!$email) {
        die("Nieprawidłowy adres e-mail.");
    }

    $to = "milosz.biniek.1995@gmail.com"; // Podmień na adres e-mail, na który chcesz otrzymywać wiadomości
    $subject = "Nowa wiadomość od: $name";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    $fullMessage = "Imię: $name\nEmail: $email\n\nWiadomość:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Wiadomość została wysłana.";
    } else {
        echo "Błąd podczas wysyłania wiadomości.";
    }
} else {
    echo "Nieprawidłowa metoda żądania.";
}
?>
