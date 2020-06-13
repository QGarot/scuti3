<?php

function getAllRanks() {
    global $db;
    $req = $db->query("SELECT id, badge, rank_name, prefix_color FROM permissions WHERE id >= 3 ORDER BY id DESC");
    return $req;
}

function getUsersRanked($rankid) {
    global $db;
    $req = $db->prepare("SELECT * FROM users WHERE rank = ?");
    $req->execute(array($rankid));
    return $req;
}