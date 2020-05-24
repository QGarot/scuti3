<?php
require("config.php");
require("public/template/loader.php");

if(isset($_GET["action"])) {
    if(isset($_GET["action"]) == "me") {
        require("controllers/Profile.php");
    }
} else {
    require("controllers/Login.php");
}