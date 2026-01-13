<?php
    $email = $_POST["email"];
    $check = isset($_POST["check"]) ? $_POST["check"] : "не указано";
    $text = $_POST["address"];
    echo "Ваше обращение на тему: $check, с текстом $text принято! Ответ будет отправлен на почту $email ";
?>