<?php
class Training_Practice_PracticeController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->getResponse()->setBody('Hello World');
    }
}