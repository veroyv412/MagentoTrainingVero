<?php
class EM_em0009settings_em0009settings
{
	public function get_grid_thumb_width()
	{
		return Mage::getStoreConfig('em0009/image_category/grid_thumb_width');
	}
	public function get_grid_thumb_height()
	{
		return Mage::getStoreConfig('em0009/image_category/grid_thumb_height');
	}
	public function get_grid_thumb_bgcolor()
	{
		return Mage::getStoreConfig('em0009/image_background/grid_thumb_bgcolor');
	}
	public function get_listing_thumb_width()
	{
		return Mage::getStoreConfig('em0009/image_category/listing_thumb_width');
	}
	public function get_listing_thumb_height()
	{
		return Mage::getStoreConfig('em0009/image_category/listing_thumb_height');
	}
	public function get_listing_thumb_bgcolor()
	{
		return Mage::getStoreConfig('em0009/image_background/listing_thumb_bgcolor');
	}
	public function get_base_image_width()
	{
		return Mage::getStoreConfig('em0009/image_product/base_image_width');
	}
	public function get_base_image_height()
	{
		return Mage::getStoreConfig('em0009/image_product/base_image_height');
	}
	public function get_base_image_bgcolor()
	{
		return Mage::getStoreConfig('em0009/image_background/base_image_bgcolor');
	}
	public function get_thumb_base_width()
	{
		return Mage::getStoreConfig('em0009/image_product/thumb_base_width');
	}
	public function get_thumb_base_height()
	{
		return Mage::getStoreConfig('em0009/image_product/thumb_base_height');
	}
	public function get_thumb_base_bgcolor()
	{
		return Mage::getStoreConfig('em0009/image_background/thumb_base_bgcolor');
	}
	public function get_related_width()
	{
		return Mage::getStoreConfig('em0009/image_related/related_width');
	}
	public function get_related_height()
	{
		return Mage::getStoreConfig('em0009/image_related/related_height');
	}
	public function get_related_bgcolor()
	{
		return Mage::getStoreConfig('em0009/image_background/related_bgcolor');
	}
	public function get_crosssell_width()
	{
		return Mage::getStoreConfig('em0009/image_crossell/crosssell_width');
	}
	public function get_crosssell_height()
	{
		return Mage::getStoreConfig('em0009/image_crossell/crosssell_height');
	}
	public function get_crosssell_bgcolor()
	{
		return Mage::getStoreConfig('em0009/image_background/crosssell_bgcolor');
	}
	public function get_upsell_width()
	{
		return Mage::getStoreConfig('em0009/image_upsell/upsell_width');
	}
	public function get_upsell_height()
	{
		return Mage::getStoreConfig('em0009/image_upsell/upsell_height');
	}
	public function get_upsell_bgcolor()
	{
		return Mage::getStoreConfig('em0009/image_background/upsell_bgcolor');
	}
	public function get_widget_width()
	{
		return Mage::getStoreConfig('em0009/image_widget/widget_width');
	}
	public function get_widget_height()
	{
		return Mage::getStoreConfig('em0009/image_widget/widget_height');
	}
	public function get_widget_bgcolor()
	{
		return Mage::getStoreConfig('em0009/image_background/widget_bgcolor');
	}
	public function get_column_count(){
		$nameTheme = 'em0009';
		$curTemplate = $this->getCurrentTemplate();
		$availableColumnCount = array(
			'empty'				=>	5,
			'1column'		=>	Mage::getStoreConfig($nameTheme.'/column_count/cat_one_column'),
			'2columns-left'	=>	Mage::getStoreConfig($nameTheme.'/column_count/cat_two_columns'),
			'2columns-right'	=>	Mage::getStoreConfig($nameTheme.'/column_count/cat_two_columns'),
			'3columns'		=>	Mage::getStoreConfig($nameTheme.'/column_count/cat_three_columns')
		);	
		return $availableColumnCount[$curTemplate];
	}
	
	public function getCurrentTemplate(){
		return str_replace(array('page/','.phtml'),'',Mage::app()->getLayout()->getBlock('root')->getTemplate());
	}
}