<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mailheader = "From: " . $name . "<" . $email . ">\r\n";

$recipient = "noahpetz@gmail.com";

mail($recipient, $subject, $message, $mailheader)
    or die("Error! Failed to send email.");

echo '

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Noah Petzinger</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/contact-styles.css">
</head>

<body>
    <header>
        <h1 id="header-logo">Noah Petzinger</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="projects.html">Projects</a>
            <a href="contact.html">Contact</a>
        </nav>
    </header>

    <section class="section-one">
        <h1 id="hero-text">Thank You!</h1>
        <p>Ill be sure to get back to you as soon as possible.</p>
    </section>

</body>
</html>

';

?>