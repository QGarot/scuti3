<?php
if(!isset($_SESSION["id"])) {
    header("Location: index.php");
}

require("views/client.php");