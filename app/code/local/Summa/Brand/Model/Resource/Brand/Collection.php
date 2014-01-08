<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/4/13
 * Time: 2:57 PM
 * To change this template use File | Settings | File Templates.
 */
class Summa_Brand_Model_Resource_Brand_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('summa_brand/brand');
    }

    /**
     * Returns pairs code - description
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->_toOptionArray('id', 'description');
    }
}