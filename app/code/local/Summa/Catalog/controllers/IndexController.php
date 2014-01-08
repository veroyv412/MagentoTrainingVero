<?php
class Summa_Catalog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        //$xml = $this->loadLayout()->getLayout()->getUpdate()->asString();
        //Zend_Debug::dump($xml);

        //$this->getResponse()
            //->setHeader("Content Type", "text/plain")
            //->setBody($xml);
        //die;

        //$this->loadLayout();

       // $this->getLayout()->getBlock('content')->append(
        //    $this->getLayout()->createBlock('customer/account_dashboard')
        //);
        $this->loadLayout();
        $this->renderLayout();
    }
}