<?php
require_once 'app/code/core/Mage/Checkout/controllers/CartController.php';
class EM_Ajaxcart_CartController extends Mage_Checkout_CartController
{   
	public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
	
	/**
     * Retrieve shopping cart model object
     *
     * @return Mage_Checkout_Model_Cart
     */
    protected function _getCart()
    {
        return Mage::getSingleton('checkout/cart');
    }
	
	/**
     * Get checkout session model instance
     *
     * @return Mage_Checkout_Model_Session
     */
    protected function _getSession()
    {
        return Mage::getSingleton('checkout/session');
    }

    /**
     * Get current active quote instance
     *
     * @return Mage_Sales_Model_Quote
     */
    protected function _getQuote()
    {
        return $this->_getCart()->getQuote();
    }
	
	/**
     * Add product to shopping cart action
     */
    public function addAction()
    {
        $cart   = $this->_getCart();
        $params = $this->getRequest()->getParams();
        try {
            if (isset($params['qty'])) {
                $filter = new Zend_Filter_LocalizedToNormalized(
                    array('locale' => Mage::app()->getLocale()->getLocaleCode())
                );
                $params['qty'] = $filter->filter($params['qty']);
            }

            $product = $this->_initProduct();
            $related = $this->getRequest()->getParam('related_product');

            /**
             * Check product availability
             */
            if (!$product) {
                $this->_goBack();
                return;
            }

            $cart->addProduct($product, $params);
            if (!empty($related)) {
                $cart->addProductsByIds(explode(',', $related));
            }

            $cart->save();

            $this->_getSession()->setCartWasUpdated(true);

            /**
             * @todo remove wishlist observer processAddToCart
             */
            Mage::dispatchEvent('checkout_cart_add_product_complete',
                array('product' => $product, 'request' => $this->getRequest(), 'response' => $this->getResponse())
            );

            if (!$this->_getSession()->getNoCartRedirect(true)) {
                if (!$cart->getQuote()->getHasError()){
                    $message = $this->__('%s was successfully added to your shopping cart.', $product->getName());					
					$img = "<img src='".Mage::helper('catalog/image')->init($product, 'image')->resize(60,null)."' />";
					$tmp_product = '<div id="message_ajax"><div class="ajaxcart_image">'.$img.'</div><div class="ajaxcart_message">'.$message.'</div></div>';
					$this->_getSession()->addSuccess($tmp_product);
                }
                $this->_goBack();
            }
        } catch (Mage_Core_Exception $e) {
            if ($this->_getSession()->getUseNotice(true)) {
                $this->_getSession()->addNotice('<div id="ajaxcart_image">'.Mage::helper('core')->escapeHtml($e->getMessage()).'</div>');
            } else {
                //$messages = array_unique(explode("\n", $e->getMessage()));
				$this->_getSession()->addError('<div id="ajaxcart_image">'.Mage::helper('core')->escapeHtml($e->getMessage()).'</div>');
            }

            $url = $this->_getSession()->getRedirectUrl(true);
            if ($url) {
                $this->getResponse()->setRedirect($url);
            } else {
                $this->_redirectReferer(Mage::helper('checkout/cart')->getCartUrl());
            }
        } catch (Exception $e) {
            $this->_getSession()->addException($e, $this->__('Cannot add the item to shopping cart.'));
            Mage::logException($e);
            $this->_goBack();
        }
    }
			
    public function deleteAction()
    {       		
	
        $id = $this->getRequest()->getParam('id');
        if ($id) {
            try {
                Mage::getSingleton('checkout/cart')->removeItem($id)
                  ->save();
            } catch (Exception $e) {
               Mage::getSingleton('checkout/cart')->addError($this->__('Cannot remove item'));
            }
        }
		$backUrl = $this->_getRefererUrl();
		$this->getResponse()->setRedirect($backUrl);
        // $this->loadLayout();
        // $this->_initLayoutMessages('checkout/session');
        // $this->renderLayout();
    }
	
	public function addtocartAction()
    {
        $this->indexAction();
    }
	
    public function preDispatch()
    {
        parent::preDispatch();
        $action = $this->getRequest()->getActionName();
    }

    /**
     * Update product configuration for a cart item
     */
    public function updateItemOptionsAction()
    {
        $cart   = $this->_getCart();
        $id = (int) $this->getRequest()->getParam('id');
        $params = $this->getRequest()->getParams();

        if (!isset($params['options'])) {
            $params['options'] = array();
        }
        try {
            if (isset($params['qty'])) {
                $filter = new Zend_Filter_LocalizedToNormalized(
                    array('locale' => Mage::app()->getLocale()->getLocaleCode())
                );
                $params['qty'] = $filter->filter($params['qty']);
            }

            $quoteItem = $cart->getQuote()->getItemById($id);
            if (!$quoteItem) {
                Mage::throwException($this->__('Quote item is not found.'));
            }

            $item = $cart->updateItem($id, new Varien_Object($params));
            if (is_string($item)) {
                Mage::throwException($item);
            }
            if ($item->getHasError()) {
                Mage::throwException($item->getMessage());
            }

            $related = $this->getRequest()->getParam('related_product');
            if (!empty($related)) {
                $cart->addProductsByIds(explode(',', $related));
            }

            $cart->save();

            $this->_getSession()->setCartWasUpdated(true);

            Mage::dispatchEvent('checkout_cart_update_item_complete',
                array('item' => $item, 'request' => $this->getRequest(), 'response' => $this->getResponse())
            );
            if (!$this->_getSession()->getNoCartRedirect(true)) {
                if (!$cart->getQuote()->getHasError()){
					$product = $item->getProduct();
                    $message = $this->__('%s was updated in your shopping cart.', Mage::helper('core')->htmlEscape($item->getProduct()->getName()));
                    $img = "<img src='".Mage::helper('catalog/image')->init($product, 'image')->resize(60,null)."' />";
					$tmp_product = '<div id="message_ajax"><div class="ajaxcart_image">'.$img.'</div><div class="ajaxcart_message">'.$message.'</div></div>';
					$this->_getSession()->addSuccess($tmp_product);
                }
                $this->_goBack();
            }
        } catch (Mage_Core_Exception $e) {	
			echo '<div class="ajc_error">update ajaxcart</div>';					   
			if (Mage::getSingleton('checkout/session')->getUseNotice(true)) {
				Mage::getSingleton('checkout/session')->addNotice($e->getMessage());
			} else {
				$messages = array_unique(explode("\n", $e->getMessage()));
				foreach ($messages as $message) {
					Mage::getSingleton('checkout/session')->addError($message);
				}
			}
		} catch (Exception $e) {
            $this->_getSession()->addException($e, $this->__('Cannot update the item.'));
        }
    }
	
	/**
     * Set back redirect url to response
     *
     * @return Mage_Checkout_CartController
     */
    protected function _goBack()
    {
        $returnUrl = $this->getRequest()->getParam('return_url');
        if ($returnUrl) {

            if (!$this->_isUrlInternal($returnUrl)) {
                throw new Mage_Exception('External urls redirect to "' . $returnUrl . '" denied!');
            }

            //$this->_getSession()->getMessages(true);
            $this->getResponse()->setRedirect($returnUrl);
        } elseif (!Mage::getStoreConfig('checkout/cart/redirect_to_cart')
            && !$this->getRequest()->getParam('in_cart')
            && $backUrl = $this->_getRefererUrl()
        ) {
            $this->getResponse()->setRedirect($backUrl);
        } else {
            if (($this->getRequest()->getActionName() == 'add') && !$this->getRequest()->getParam('in_cart')) {
                $this->_getSession()->setContinueShoppingUrl($this->_getRefererUrl());
            }
            $this->_redirect('checkout/cart');
        }
        return $this;
    }
}