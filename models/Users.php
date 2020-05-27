<?php

function getUserByUsername($username) {
    global $db;
    $req = $db->prepare("SELECT id FROM users WHERE username = ?");
    $req->execute(array($username));
    return $req->fetch();
}

function getUserById($id) {
    global $db;
    $req = $db->prepare("SELECT id, username, motto, look, credits FROM users WHERE id = ?");
    $req->execute(array($id));
    return $req->fetch();
}

function getPasswordCrypted($username) {
    global $db;
    $req = $db->prepare("SELECT password FROM users WHERE username = ?");
    $req->execute(array($username));
    return $req->fetch()["password"];
}

function userExist($username) {
    global $db;
    $req = $db->prepare("SELECT id FROM users WHERE username = ?");
    $req->execute(array($username));
    return $req->rowCount() == 1;
}

function getDiamonds($id) {
    global $db;
    $req = $db->prepare("SELECT amount FROM users_currency WHERE user_id = ? AND type = 5");
    $req->execute(array($id));
    return $req->fetch()["amount"];
}

function getDuckets($id) {
    global $db;
    $req = $db->prepare("SELECT amount FROM users_currency WHERE user_id = ? AND type = 0");
    $req->execute(array($id));
    return $req->fetch()["amount"];
}

function getFriends($id, $limited = true) {
    global $db;
    if($limited) {
        $req = $db->prepare("SELECT user_two_id FROM messenger_friendships WHERE user_one_id = ? ORDER BY friends_since DESC LIMIT 3");
    } else {
        $req = $db->prepare("SELECT user_two_id FROM messenger_friendships WHERE user_one_id = ?");
    }
    $req->execute(array($id));
    return $req;
}