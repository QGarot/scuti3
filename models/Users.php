<?php

function getUserByUsername($username) {
    global $db;
    $req = $db->prepare("SELECT id, username FROM users WHERE username = ?");
    $req->execute(array($username));
    return $req->fetch();
}

function getUserById($id) {
    global $db;
    $req = $db->prepare("SELECT id, username, motto, look FROM users WHERE id = ?");
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