<?php
if(!isset($_SESSION["id"])) {
    header("Location: index.php");
}

$userInfo = getUserById($_SESSION["id"]);
$reqRooms = getAllRooms();
require("views/me.php");
