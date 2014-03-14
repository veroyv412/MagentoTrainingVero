<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/13/14
 * Time: 12:50 PM
 * To change this template use File | Settings | File Templates.
 */

class Summa_Comment_Model_Comment extends Mage_Core_Model_Abstract
{
    public  function __construct()
    {
        $this->_init('summa_comment/comment');
    }
}