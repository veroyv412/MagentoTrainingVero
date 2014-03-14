<?php
class Training_Practice_PracticeController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->getResponse()->setBody('Hello World');
    }

    public function pageLayoutXmlAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->getUpdate()->asString()
        );
        $this->getResponse()->setHeader('Content-Type', 'text/plain');
    }
}