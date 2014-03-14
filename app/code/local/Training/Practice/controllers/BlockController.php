<?php
class Training_Practice_BlockController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->getResponse()->setBody('Hello World');
    }

    public function testAction()
    {
        $block = $this->getLayout()->createBlock('training_practice/example');
        $this->getResponse()->setBody($block->toHtml());
    }

    public function templateBlockAction()
    {
        $block = $this->getLayout()->createBlock('core/template');
        $block->setTemplate('training/practice/example.phtml');
        $this->getResponse()->setBody($block->toHtml());
    }

    public function registryAction()
    {
        Mage::register('SOME_VALUE','Some custom string');

        $block = $this->getLayout()->createBlock('training_practice/registry');
        $block->setTemplate('training/practice/registry.phtml');
        $this->getResponse()->setBody($block->toHtml());
    }

    public function textListAction()
    {
        $listBlock = $this->getLayout()->createBlock('core/text_list');

        $blockA = $this->getLayout()
            ->createBlock('core/text','block.a')
            ->setText('<p>Example block A.</p>');
        $blockB = $this->getLayout()
            ->createBlock('core/text','block.b')
            ->setText('<p>Example block B.</p>');

        $listBlock->insert( $blockA )
                    ->insert( $blockB );
        /*
        Blocks can also be assigned by name, i.e.:
        $listBlock->insert( 'block.a' )
        ->insert( 'block.b' );
        */
        $this->getResponse()->setBody($listBlock->toHtml());
    }
}