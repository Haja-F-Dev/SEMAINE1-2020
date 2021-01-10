<?php

if (empty($_POST["name"])) {
    header("Location:contact.php?erreur=name");
    exit;
}

if (empty($_POST["firstname"])) {
    header("Location:contact.php?erreur=firstname");
    exit;
}

if (empty($_POST["code_postal"])) {
    header("Location:contact.php?erreur=code_postal");
    exit;
}

if (empty($_POST["adresse"])) {
    header("Location:contact.php?erreur=adresse");
    exit;
}

if (empty($_POST["ville"])) {
    header("Location:contact.php?erreur=ville");
    exit;
}

if (empty($_POST["email"])) {
    header("Location:contact.php?erreur=email");
    exit;
}
