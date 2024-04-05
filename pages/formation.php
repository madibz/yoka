<?php // fichier : formation.php

// on charge la configuration du site.
include('../config/settings.php');


?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('../partials/head.php'); ?>
    <title></title>
</head>
<body>
    <?php include ('../partials/menu.php'); ?>

    <main>

        <p>
        Une question ? Besoin d’aide ? Ou tout simplement un mot sympa. Par téléphone<br>
        sur nos horaires d’ouvertures, ou par mail via le formulaire de contact ci-dessous. 
        </p>

        <h1>FORMULAIRE DE CONTACT</h1>

        <form action="formation.php" method="post">
            
            <p>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br>
            </p>

            <p>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            </p>

            <p>
            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse"><br>
            </p>

            <p>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
            </p>

            <p>
            <input type="submit" value="Envoyer">
            </p>

        </form>


    </main>

</body>
</html>