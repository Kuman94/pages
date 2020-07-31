<?php

if (isset($_POST['enviar'])){
    $asunto=$_POST['nota1'];
    $email=$_POST["erkuman@gmail.com"];
    $msg=$_POST['nota2'];
    $header="From: noreply@example.com" . "\r\n";
    $header.="X-Mailer: PHP/". phpversion();

    $mail= @mail($email,$asunto,$msg,$header);
}
