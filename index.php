<?php

const DOCKROOT = __DIR__;

include_once __DIR__ . "/vendor/autoload.php";
echo "<pre>";
$db = new \Shop\Database();


$router = new Shop\Services\Router();
$router->dispatch();

die();

$product = new Shop\Product\ExtendedProduct();
/**
$product->setName('some product');
$product->setId(2);
$product->setPrice(15);
$product->setBrand('new Brand');
$product->setDescription('desc2');

$product->getPersistence()->save();

$product->getPersistence()->load(1);

$collection = $product->getPersistence()->getCollection();
 **/

$product->getPersistence()->load("2","id");

print_r($product);


$t_shirt = new Shop\Product\ExtendedProduct();
$t_shirt->getPersistence()->load(1);
print_r($t_shirt);


$customer = new Shop\Customer\Customer();
$customer->getPersistence()->load(1);
print_r($customer);



$cart = new Shop\Cart\Cart($customer);

$cart->addProduct($t_shirt, 2);
$cart->addProduct($t_shirt, 3);


print_r($cart);



















