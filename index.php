<?php

require(__DIR__ . "/vendor/autoload.php");

use AW\database;
use AW\user;

$db = new AW\database();

try {
    echo $db;
} catch (exception $e) {
    echo $e->getMessage();
}
