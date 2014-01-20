<?php
class Training_Practice_Model_Observer
{
    public function catalogProductLoadAfter(Varien_Event_Observer $observer)
    {
        $product = $observer->getProduct();
        $product->setSpecialPrice($product->getPrice() -1);
    }
}