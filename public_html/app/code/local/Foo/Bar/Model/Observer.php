<?php

class Foo_Bar_Model_Observer
{
    public function catalogProductLoadAfter($observer) {
        $product = $observer->getProduct();
        $product -> setName($product->getName().'is cool');
    }
}