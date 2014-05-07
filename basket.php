<?php

require __DIR__.'/vendor/autoload.php';
use Entity\Basket;
use Entity\Buttle;

$basket = new Basket();
$vittel = new Buttle();
$evian = new Buttle();

$vittel->setId(0)
       ->setLabel('Vittel 1L')
       ->setPrice(0.54);

$evian->setId(1)
      ->setLabel('Evian 1L')
      ->setPrice(0.62);

$basket->addProduct($vittel);
$basket->addProduct($evian);

foreach ($basket->getProducts() as $product){
    echo $product->getLabel().'['.$basket->getQuantity($product).'] -> '.$product->getPrice().' &euro; <br />';
}