<?php
//app/code/local/Day/Two/controllers/ModelsController.php

class Day_Two_ModelsController extends Mage_Core_Controller_Front_Action
{
    public function storesAction()
    {
        $stores = Mage::getResourceModel('core/store_collection');

        foreach ($stores as $store)
        {
            $category = Mage::getModel('catalog/category')
                            ->load($store->getRootCategoryId());

            echo '<h2>'. $category->getName() . '</h2>';
        }
    }

    public function categoriesAction()
    {

        /* @var $categories Mage_Catalog_Model_Resource_Category_Collection */
        $categories = Mage::getResourceModel('catalog/category_collection')
                            ->addFieldToFilter('level', 1)
                            ->addAttributeToSelect('name');

        foreach ( $categories as $category )
        {
            $children = $category->getChildren();
            $childrenIds = explode(',', $children);
            foreach ( $childrenIds as $child)
            {
                $child = Mage::getModel('catalog/category')->load($child);
                Zend_Debug::dump($child->debug());
            }
        }
    }
}