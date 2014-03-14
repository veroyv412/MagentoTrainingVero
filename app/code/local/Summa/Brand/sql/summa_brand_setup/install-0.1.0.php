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

$installer->run("

DROP TABLE IF EXISTS {$this->getTable('summa_brand')};
CREATE TABLE {$this->getTable('summa_brand')} (
  `id` int(10) unsigned NOT NULL auto_increment,
  `code` varchar(255) character set utf8 NOT NULL default '',
  `description` varchar(255) character set utf8 NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Product Brands';
");

$installer->endSetup();