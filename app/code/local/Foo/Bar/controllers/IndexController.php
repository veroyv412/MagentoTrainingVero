<?php
// app/code/local/Foo/Bar/controllers/IndexController.php

class Foo_Bar_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction($coreRoute = null)
    {
        Mage::app()->getFrontController()->getResponse()->setBody("<h1>Hello My WORLD!</h1>");

        $this->loadLayout();
        $this->renderLayout();

        return $this;
    }

}
