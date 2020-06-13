<?php

function connectdb($hostname, $dbname, $user, $password) {
    try
    {
        return new PDO('mysql:host='.$hostname.';dbname='.$dbname.';charset=utf8', ''.$user.'', ''.$password.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    catch(Exception $e)
    {
        die("Une erreur est survenue. Merci d'actualiser la page.");
    }
}

$db = connectdb("localhost", "yobba", "root", "");