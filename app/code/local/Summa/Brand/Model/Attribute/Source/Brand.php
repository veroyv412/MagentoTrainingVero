<?php

class Summa_Brand_Model_Attribute_Source_Brand extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    public function getAllOptions()
    {
        if (!$this->_options) {
            $resourceModel = Mage::getResourceModel('summa_brand/brand_collection');
            $this->_options = $resourceModel->load()->toOptionArray();
            array_unshift($this->_options, array('value'=>'', 'label'=>Mage::helper('summa_brand')->__('-- Please Select Brand --')));
        }
        return $this->_options;
    }

    public function toOptionArray()
    {
        $options = $this->getAllOptions();

        return $options;
    }
}