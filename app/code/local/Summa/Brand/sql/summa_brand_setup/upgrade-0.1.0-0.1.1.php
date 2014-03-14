<?php

$installer = $this;

/** @var $attribute Mage_Catalog_Model_Resource_Eav_Attribute */
$attribute = $installer->getAttribute(Mage_Catalog_Model_Product::ENTITY, 'brand');

if ($attribute) {
    $installer->updateAttribute($attribute['entity_type_id'], $attribute['attribute_id'],
        'source_model',  'summa_brand/attribute_source_brand');

}

$installer->endSetup();