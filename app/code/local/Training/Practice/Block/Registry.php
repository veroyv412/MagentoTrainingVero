<?php
class Training_Practice_Block_Registry extends Mage_Core_Block_Template
{
    public function getRegisteredVal()
    {
        return Mage::registry('SOME_VALUE');
    }
}