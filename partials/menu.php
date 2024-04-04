<?php // fichier : partials/menu.php

//on recupere le chemin du script en cours
$filepath = $_SERVER['PHP_SELF'];

//on decoupe selon '/'
$tFile = explode('/', $filepath);

$file = array_pop($tFile);

//var_dump($tFile);
?>

<header>
    <div class="header_">

    <p></p>

    <h1>
        <a href="index.php">YOKA</a>
    </h1>

    <button >Contacter le 3018</button>
    </div>

    <nav class="nav">

        <a href="index.php" class="<?php if($file == 'index.php') echo 'active'; ?>">Accueil</a>

        <a href="infos.php" class="<?php if($file == 'infos.php') echo 'active'; ?>">Informations</a>

        <a href="prevent.php" class="<?php if($file == 'prevent.php') echo 'active'; ?>">Prévention</a>

        <a href="contact.php" class="<?php if($file == 'contact.php') echo 'active'; ?>">Contact</a>

        <a href="aboutus.php" class="<?php if($file == 'aboutus.php') echo 'active'; ?>">Qui sommes nous ?</a>

    </nav>

</header>

