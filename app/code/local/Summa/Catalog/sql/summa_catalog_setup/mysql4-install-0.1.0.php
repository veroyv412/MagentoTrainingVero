<?php
/**
 * Created by JetBrains PhpStorm.
 * User: veritto
 * Date: 3/1/13
 * Time: 1:53 PM
 * To change this template use File | Settings | File Templates.
 */

/* @var $installer Mage_Catalog_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$data= array (
    'attribute_set' =>  'Default',
    'group' => 'General',
    'type' => 'varchar',
    'backend' => '',
    'frontend' => '',
    'label' => 'Brand',
    'note' => 'Little note for the brand',
    'input' => 'text',
    'class' => '',
    'source' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => '0',
    'visible_on_front' => true,
    'unique' => false,
    'is_configurable' => false,
    'used_for_promo_rules' => true
);

$installer->addAttribute('catalog_product','brand', $data);

$installer->endSetup();