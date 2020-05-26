<?php

function getLastNews($x) {
    global $db;
    $req = $db->query("SELECT * FROM scuti_news ORDER BY parution_date DESC LIMIT ".$x."");
    return $req;
}