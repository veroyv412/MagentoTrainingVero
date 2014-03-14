<?php

class Summa_Comment_CommentsController extends Mage_Core_Controller_Front_Action
{
    public function indexAction($coreRoute = null)
    {
        $user = Mage::getSingleton('customer/session')->getCustomer();
        $user_id = empty($user) ? null : $user->getId();
        $product_id = $this->getRequest()->getParam('product_id');
        $comment = $this->getRequest()->getParam('comment');

        $commentObj = Mage::getModel('summa_comment/comment');
        $commentObj->setComment($comment);
        $commentObj->setUserId($user_id);
        $commentObj->setProductId($product_id);
        $commentObj->setDate(date("Y-m-d H:i:s", Mage::getModel('core/date')->timestamp(time())));
        $commentObj->save();


        $product = Mage::getModel('catalog/product')
            ->load($product_id);
        $this->_redirectUrl($product->getProductUrl());
    }

}