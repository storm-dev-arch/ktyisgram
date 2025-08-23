<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to      = "zifi3639@gmail.com";
    $subject = "Новое сообщение с сайта KTYISGram";
    $body    = "Имя: $name\nEmail: $email\n\nСообщение:\n$message";
    $headers = "From: no-reply@" . $_SERVER['SERVER_NAME'] . "\r\n" .
               "Reply-To: $email\r\n" .
               "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thankyou.html");
        exit;
    } else {
        echo "Ошибка при отправке сообщения. Попробуйте позже.";
    }
}
?>
