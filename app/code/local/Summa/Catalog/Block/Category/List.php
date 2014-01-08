<?php

class Summa_Catalog_Block_Category_List extends Mage_Core_Block_Template
{

    public function getCategories()
    {

        /* @var $categories Mage_Catalog_Model_Resource_Category_Collection */
        $categories = Mage::getResourceModel('catalog/category_collection')
            ->addFieldToFilter('level', 1)
            ->addAttributeToSelect('name');

        /*foreach ( $categories as $category )
        {
            $children = $category->getChildren();
            $childrenIds = explode(',', $children);
            foreach ( $childrenIds as $child)
            {
                $child = Mage::getModel('catalog/category')->load($child);
                Zend_Debug::dump($child->debug());
            }
        }*/

        return $categories;
    }
}