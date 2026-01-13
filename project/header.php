<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Libre+Barcode+39&family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Practica</title>
</head>
<body>
    <header>
        <nav>
            <a class="my-button rubik-mono-one-regular" href="http://localhost/Vasiliev/project/signin.php">Sign in</a>
            <a class="my-button rubik-mono-one-regular" href="http://localhost/Vasiliev/project/signup.php">Sign up</a>
            <a class="my-button rubik-mono-one-regular" href="http://localhost/Vasiliev/project/content.php">Read</a>
            <a class="my-button rubik-mono-one-regular" href="http://localhost/Vasiliev/project/create.php">Create</a>
            <?php if ($_SESSION['role'] == 'admin'):?>
            <a class="admin-button rubik-mono-one-regular" href="http://localhost/Vasiliev/project/admin.php">Admin panel</a>
            <?php endif;?>
        </nav>
    </header>
    <main>
        <div class="container rubik-mono-one-regular">