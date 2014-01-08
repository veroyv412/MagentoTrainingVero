<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/4/13
 * Time: 1:09 PM
 * To change this template use File | Settings | File Templates.
 */

class Summa_Brand_Model_Brand extends Mage_Core_Model_Abstract
{
    public  function __construct()
    {
        $this->_init('summa_brand/brand');
    }
}