<?php
class Training_Recap_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $model = Mage::getModel('training_recap/sample');
        $this->getResponse()->setBody(get_class($model));
    }
}