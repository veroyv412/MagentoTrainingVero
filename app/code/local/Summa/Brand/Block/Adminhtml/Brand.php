<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/4/13
 * Time: 3:22 PM
 * To change this template use File | Settings | File Templates.
 */
class Summa_Brand_Block_Adminhtml_Brand extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        // The blockGroup must match the first half of how we call the block, and controller matches the second half
        // ie. foo_bar/adminhtml_baz
        $this->_blockGroup = 'summa_brand';
        $this->_controller = 'adminhtml_brand';
        $this->_headerText = $this->__('Manage Brands');
        $this->_addButtonLabel = 'Add New Brand';

        parent::__construct();
    }
}