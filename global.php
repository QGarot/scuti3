<?php
session_start();
require("models/Models.php");

$name = "Yobba";
$url = "http://localhost/Scuti3";


// swfs
$swfs = array(
    "server.ip" => "127.0.0.1",
    "server.port"      => "30000",
    "gamedata.external_variables" => "http://localhost/Scuti3/swfs/gamedata/external_variables.txt",
    "gamedata.external_flash_texts" => "http://localhost/Scuti3/swfs/gamedata/external_flash_texts_fr.txt",
    "gamedata.figuredata" => "http://localhost/Scuti3/swfs/gamedata/figuredata.xml",
    "gamedata.furnidata" => "http://localhost/Scuti3/swfs/gamedata/furnidata.xml",
    "gamedata.productdata" => "http://localhost/Scuti3/swfs/gamedata/productdata.txt",
    "gamedata.override.external_override_variables" => "http://localhost/Scuti3/swfs/gamedata/override/external_override_variables.txt",
    "gamedata.override.external_override_texts" => "http://localhost/Scuti3/swfs/gamedata/override/external_flash_override_texts_en.txt",
    "production" => "http://localhost/Scuti3/swfs/gordon/PRODUCTION-201805071207-546529762/",
    "production.habbo" => "http://localhost/Scuti3/swfs/gordon/PRODUCTION-201805071207-546529762/Habbo.swf",
);