<?php
    // initialiser les session

    session_start();

    // desactivation de la session
    session_unset();

    // Desctruction de la session
    session_destroy();

    header('location: index.php?');
    exit();
?>