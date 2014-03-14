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

DROP TABLE IF EXISTS {$this->getTable('summa_comment')};
CREATE TABLE {$this->getTable('summa_comment')} (
  `id` int(10) unsigned NOT NULL auto_increment,
  `comment` varchar(255) character set utf8 NOT NULL default '',
  `user_id` int(10) unsigned NULL,
  `product_id` int(10) unsigned NOT NULL,
  `date` datetime default NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Product Comments';
");

$installer->endSetup();