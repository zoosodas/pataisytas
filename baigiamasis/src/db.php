<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "zinutesdb");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Atsiprasome, yra bedu su serveriu";
        echo 'Klaida: ' . $mysql->connect-error . '\n';
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO zinutes (vardas, email, message) VALUES('$_POST[vardas])', '($_POST[email])', '($_POST[message]')");