<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/13/14
 * Time: 12:56 PM
 * To change this template use File | Settings | File Templates.
 */

class Summa_Comment_Model_Resource_Comment_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('summa_comment/comment');
    }
}