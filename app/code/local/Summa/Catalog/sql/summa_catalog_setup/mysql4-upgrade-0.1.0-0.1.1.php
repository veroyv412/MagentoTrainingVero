<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/1/13
 * Time: 5:37 PM
 * To change this template use File | Settings | File Templates.
 */
/** @var $installer Mage_Catalog_Model_Resource_Setup */
$installer = $this;

/** @var $attribute Mage_Catalog_Model_Resource_Eav_Attribute */
$attribute = $installer->getAttribute(Mage_Catalog_Model_Product::ENTITY, 'brand');

if ($attribute) {
    $installer->updateAttribute($attribute['entity_type_id'], $attribute['attribute_id'],
        'frontend_input',  'select');

    $option = array();
    $option['attribute_id'] = $attribute['attribute_id'];
    $option['value']['op_1'][0] = 'Veronica Furniture';
    $option['value']['op_2'][0] = 'Sony';
    $option['value']['op_3'][0] = 'Samsung';
    $option['value']['op_4'][0] = 'Dell';
    $option['value']['op_5'][0] = 'Old Nayv';
    $option['value']['op_6'][0] = 'Nike';

    $installer->addAttributeOption($option);

}