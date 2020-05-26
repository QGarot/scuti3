<?php
require("global.php");
require("public/template/loader.php");

if(isset($_GET["action"])) {
    if($_GET["action"] == "me") {
        require("controllers/Profile.php");
    } elseif($_GET["action"] == "logout") {
        session_destroy();
        header("Location: index.php");
    } elseif($_GET["action"] == "client") {
        require("controllers/Client.php");
    }
} else {
    require("controllers/Login.php");
}