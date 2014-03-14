<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/13/14
 * Time: 12:59 PM
 * To change this template use File | Settings | File Templates.
 */

class Summa_Comment_Model_Attribute_Source_Comment extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    public function getAllOptions()
    {
        if (!$this->_options) {
            $resourceModel = Mage::getResourceModel('summa_comment/comment_collection');
            $this->_options = $resourceModel->load()->toOptionArray();
            array_unshift($this->_options, array('value'=>'', 'label'=>Mage::helper('summa_comment')->__('-- Please Select Comment --')));
        }
        return $this->_options;
    }

    public function toOptionArray()
    {
        $options = $this->getAllOptions();

        return $options;
    }
}