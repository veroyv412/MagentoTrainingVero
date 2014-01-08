<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/4/13
 * Time: 3:33 PM
 * To change this template use File | Settings | File Templates.
 */
class Summa_Brand_Block_Adminhtml_Brand_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('summa_brand_brand_form');
        $this->setTitle($this->__('Brand Information'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('summa_brand');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Brand Information'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('code', 'text', array(
            'name'      => 'code',
            'label'     => Mage::helper('checkout')->__('Code'),
            'title'     => Mage::helper('checkout')->__('Code'),
            'required'  => true,
            ''
        ));

        $fieldset->addField('description', 'text', array(
            'name'      => 'description',
            'label'     => Mage::helper('checkout')->__('Description'),
            'title'     => Mage::helper('checkout')->__('Description'),
            'required'  => true,
        ));

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}