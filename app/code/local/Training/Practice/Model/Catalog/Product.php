<?php
class Training_Practice_Model_Catalog_Product extends Mage_Catalog_Model_Product
{
    public function validate()
    {
        if ($this->getPrice() <= 0) {
            Mage::throwException('The price must be larger then zero.');
        }
        return parent::validate();
    }
}