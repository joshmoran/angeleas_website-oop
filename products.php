<?php

include 'vendor/autoload.php';

$catalog = new AW\products();
$products = $catalog->getAllProducts();
var_dump($products);

if (count($products) > 0) {
    foreach ($products as $key) {
        echo '<h1>' . $key['name'] . '</h1>';
    }
}
