<?php
class Day_Two_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo 'we are cooking now';
    }

    public function modelAction()
    {
        /**
         * day_two is the name of the class_name group
         * whatever is the name of the class INSIDE Model folder
         */
        echo get_class(Mage::getModel('day_two/whatever'));
    }

    public function layoutAction()
    {
        $xml = $this->loadLayout()->getLayout()->getUpdate()->asString();

        //The file will be under var/log
        Mage::log($xml,Zend_Log::INFO,'layout.log',true);

        $this->getResponse()
            ->setHeader("Content Type", "text/plain")
            ->setBody($xml);

        $model = Mage::getModel('day_two/whatever');
        Mage::log($model,Zend_Log::INFO,'model.log',true);
    }

    public function defaultAction()
    {
        $this->loadLayout()->renderLayout();
    }

    public function trainingAction()
    {
        $this->loadLayout();
        $this->_initLayoutMessages('customer/session');
        $this->_initLayoutMessages('catalog/session');

        $this->getLayout()->getBlock('content')->append(
            $this->getLayout()->createBlock('customer/account_dashboard')
        );

        $this->renderLayout();
    }

    public function renderLayoutTestAction()
    {
        $this->loadLayout()->renderLayout();
    }

    public function handleAction()
    {
        $this->loadLayout()->renderLayout();
    }


}