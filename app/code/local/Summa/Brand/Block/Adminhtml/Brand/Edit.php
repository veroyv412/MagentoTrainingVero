<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/4/13
 * Time: 3:31 PM
 * To change this template use File | Settings | File Templates.
 */
class Summa_Brand_Block_Adminhtml_Brand_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'summa_brand';
        $this->_controller = 'adminhtml_brand';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Brand'));
        $this->_updateButton('delete', 'label', $this->__('Delete Brand'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('summa_brand')->getId()) {
            return $this->__('Edit Brand');
        }
        else {
            return $this->__('New Brand');
        }
    }
}