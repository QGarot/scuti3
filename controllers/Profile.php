<?php
if(!isset($_SESSION["id"])) {
    header("Location: index.php");
}

$userInfo = getUserById($_SESSION["id"]);
$reqRooms = getAllRooms();
$reqLastNew = getLastNews(1);
require("views/me.php");
