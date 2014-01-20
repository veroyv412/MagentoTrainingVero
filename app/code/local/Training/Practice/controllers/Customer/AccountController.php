<?php
/**
 * Note: The file containing the parent class must be included manually because
controller class names don’t map to the file system, so the autoloader can’t include
them automatically.
 */
require_once 'Mage/Customer/controllers/AccountController.php';

class Training_Practice_Customer_AccountController extends Mage_Customer_AccountController
{
    public function loginPostAction()
    {
        $url = Mage::getUrl('catalog/category/view', array('id' => 10));
        $this->_getSession()->setAfterAuthUrl($url);
        parent::loginPostAction();
    }
}