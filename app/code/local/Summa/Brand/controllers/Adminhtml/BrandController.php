<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/4/13
 * Time: 3:25 PM
 * To change this template use File | Settings | File Templates.
 */
class Summa_Brand_Adminhtml_BrandController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        // Let's call our initAction method which will set some basic params for each action
        $this->_initAction()
            ->renderLayout();
    }

    public function newAction()
    {
        // We just forward the new action to a blank edit form
        $this->_forward('edit');
    }

    public function editAction()
    {
        $this->_initAction();

        // Get id if available
        $id  = $this->getRequest()->getParam('id');
        $model = Mage::getModel('summa_brand/brand');

        if ($id) {
            // Load record
            $model->load($id);

            // Check if record is loaded
            if (!$model->getId()) {
                Mage::getSingleton('adminhtml/session')->addError($this->__('This brand no longer exists.'));
                $this->_redirect('*/*/');

                return;
            }
        }

        $this->_title($model->getId() ? $model->getName() : $this->__('New Brand'));

        $data = Mage::getSingleton('adminhtml/session')->getBrandData(true);
        if (!empty($data)) {
            $model->setData($data);
        }

        Mage::register('summa_brand', $model);

        $this->_initAction()
            ->_addBreadcrumb($id ? $this->__('Edit Brand') : $this->__('New Brand'), $id ? $this->__('Edit Brand') : $this->__('New Brand'))
            ->_addContent($this->getLayout()->createBlock('summa_brand/adminhtml_brand_edit')->setData('action', $this->getUrl('*/*/save')))
            ->renderLayout();
    }

    public function saveAction()
    {
        if ($postData = $this->getRequest()->getPost()) {
            $model = Mage::getSingleton('summa_brand/brand');
            $model->setData($postData);

            try {
                $model->save();

                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The Brand has been saved.'));
                $this->_redirect('*/*/');

                return;
            }
            catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
            catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($this->__('An error occurred while saving this brand.'));
            }

            Mage::getSingleton('adminhtml/session')->setBrandData($postData);
            $this->_redirectReferer();
        }
    }

    public function messageAction()
    {
        $data = Mage::getModel('summa_brand/brand')->load($this->getRequest()->getParam('id'));
        echo $data->getContent();
    }

    /**
     * Initialize action
     *
     * Here, we set the breadcrumbs and the active menu
     *
     * @return Mage_Adminhtml_Controller_Action
     */
    protected function _initAction()
    {
        $this->loadLayout()
        // Make the active menu match the menu config nodes (without 'children' inbetween)
            ->_setActiveMenu('summa_brand')
            ->_title($this->__('Brand'))
            ->_addBreadcrumb($this->__('Brand'), $this->__('Brand'))
            ->_addBreadcrumb($this->__('Manage Brands'), $this->__('Manage Brands'));

        return $this;
    }

    /**
     * Check currently called action by permissions for current user
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('summa_brand');
    }


    public function testProductPriceAction()
    {
        /**
         * @var Mage_Catalog_Model_Product
         */
        $product = Mage::getModel('catalog/product')->load(126);
        $productPrice = $product->getFinalPrice();

        $allProducts = $product->getTypeInstance(true)->getUsedProducts(null, $product);
        $attributes = $product->getTypeInstance(true)->getConfigurableAttributes($product);

        /*
         * We need to create an array of all attributes and options price values
         * */
        $attributePrices = array();
        foreach ( $attributes as $attribute )
        {
            $productAttribute   = $attribute->getProductAttribute();
            $productAttributeId = $productAttribute->getId();

            //This will loop between attribute options
            $prices = $attribute->getPrices();
            foreach ( $prices as $price )
            {
                $attributePrices[$productAttributeId][$price['value_index']]['price'] = is_null($price['pricing_value']) ? 0 : floatval($price['pricing_value']);
            }
        }


        foreach ( $allProducts as $simpleProduct )
        {
            $sumAttributePrice = 0;
            foreach ( $attributes as $attribute )
            {
                $productAttribute   = $attribute->getProductAttribute();
                $productAttributeId = $productAttribute->getId();
                //simpleProduct attribute value according to the attribute being looped
                $attributeValue     = $simpleProduct->getData($productAttribute->getAttributeCode());

                $sumAttributePrice += $attributePrices[$productAttributeId][$attributeValue]['price'];
            }

            $totalPrice = $productPrice + $sumAttributePrice;
            $simpleProduct->setPrice($totalPrice);

            $data = $simpleProduct->getData();
            $simpleProduct->setOrigData($data);
            $simpleProduct->save();
        }



    }
}