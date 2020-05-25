<?php

function getAllRooms() {
    global $db;
    $req = $db->query("SELECT * FROM rooms ORDER BY users DESC LIMIT 5");
    return $req;
}