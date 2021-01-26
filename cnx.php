<?php
    // lecture du fichier de paramètrage
    $parametres = parse_ini_file("param/param.ini");

    // créer un objet pdo
    $pdo = new PDO(
        $parametres['dsn'],
        $parametres['user'],
        $parametres['psw']
    );
    
    // adresse de l'application
    $host = $parametres['host'];

