<?php

require './vendor/autoload.php';

use App\Autoload\User;
use App\Autoload\Product;

$user1 = new User(1, 'Francisco V', 31);
$product1 = new Product(23108, 'Keyboard PC');

echo '<pre>';
    var_dump($user1);
    var_dump($product1);
echo '/<pre>';
