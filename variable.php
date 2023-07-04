<?php

include 'src/render.php';

//include 'vendor/autoload.php';
$variabe = 'yes';
$render = new render($variabe);


get_class_methods($render);

echo 'test';
