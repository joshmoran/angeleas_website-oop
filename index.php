<?php

require(__DIR__ . "/vendor/autoload.php");

$db = new AW\database();

try {
    var_dump($db);
} catch (exception $e) {
    echo $e->getMessage();
}
