<?php

if(!isset($_SESSION["id"])) {
    header("Location: index.php");
}

$ranks = getAllRanks();

require("views/staff.php");
