<?php

$installer = $this;

$installer->startSetup();
/*
$installer->addAttribute('catalog_product', 'EM_Featured', array(
        'group'             => 'General',
        'type'              => 'int',
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'Featured Product',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'apply_to'          => 'simple,configurable,virtual,bundle,downloadable',
        'is_configurable'   => false
    ));

$block = Mage::getModel('cms/block');
$page = Mage::getModel('cms/page');
//$stores = array_keys(Mage::getSingleton('adminhtml/system_store')->getStoreOptionHash());

$stores = array(0);

// Config perfix for identifier of static block and static page
$prefixBlock = '';
$prefixPage = '';


####################################################################################################
# INSERT STATIC BLOCKS
####################################################################################################

$dataBlock = array(
	'title' => 'EM0009 MegaMenu',
	'identifier' => $prefixBlock.'em0009_megamenu',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<ul class="menu"><!-- BEGIN MENU --> <!-- End Tours Item --> <!-- Begin cruises Item -->
<li class="submenu first"><a class="drop" href="{{store direct_url='furniture.html'}}">FURNITURE TYPE</a><!-- Begin 5 columns Item -->
<div class="dropdown_4columns">
<div class="inner">
<div class="col_2 col_sp"><a href="{{store url='watches.html'}}"><img src="{{media url="wysiwyg/10.jpg"}}" alt="" /></a>
<h4 class="first">Maecenas in porttitor nisl.</h4>
<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos morbi facilisis blandit massa sit amet viverra ante mattis nec.</p>
<p>Pellentesque tempus lacus non nisi viverra sit amet vestibulum sapien rhoncus.</p>
</div>
<div class="col_1"><span class="title"> sociis natoque</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='rings.html'}}"> Build Your Own </a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='rings.html'}}"> Laptops </a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='watches.html'}}"> Hard Drives </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='rings.html'}}"> Monitors </a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='necklaces.html'}}"> RAM / Memory </a></li>
<li class="level1 nav-3-6"><a href="{{store direct_url='watches.html'}}"> Cases </a></li>
<li class="level1 nav-3-7"><a href="{{store direct_url='rings.html'}}"> Processors </a></li>
<li class="level1 nav-3-8 last"><a href="{{store direct_url='watches.html'}}"> Peripherals </a></li>
</ul>
</div>
<div class="col_1"><span class="title">penatibus et</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='rings.html'}}">Maecenas mollis</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='necklaces.html'}}"> Duis scelerisque </a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='watches.html'}}"> Hard Drives </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='rings.html'}}"> Monitors </a></li>
</ul>
</div>
</div>
</div>
</li>
<!-- End 4 column Item -->
<li class="submenu"><a class="drop" href="{{store direct_url='apparel.html'}}"><span>STYLES</span></a>
<div class="dropdown_4columns">
<div class="inner">
<div class="col_1"><span class="title_col">Pellentesque </span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='furniture.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel/shoes.html'}}">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='electronics/computers.html'}}">Tristique Turpis</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='furniture.html'}}">Phasellus leo</a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='furniture.html'}}">Amet Bibendum</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel.html'}}">Tristique Turpis</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">Pellentesque</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='top-part.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='tires.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='replacements.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel/shoes.html'}}">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='electronics/computers.html'}}">Tristique Turpis</a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='wheels.html'}}">Amet Bibendum</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel.html'}}">Tristique Turpis</a></li>
</ul>
</div>
<div class="col_2 video col_sp">
<div class="product">{{widget type="mediauploadurlwidget/upload" 	media="http://www.youtube.com/watch?v=mtHWPXG55oU" 	width="260" height="146" wmode="transparent"}}</div>
<h4 class="first">Maecenas in porttitor nisl.</h4>
<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos morbi facilisis blandit massa sit amet viverra ante mattis nec.</p>
<p>Pellentesque tempus lacus non nisi viverra sit amet vestibulum sapien rhoncus.</p>
</div>
</div>
</div>
</li>
<li class="submenu"><a class="drop" href="{{store direct_url='our-favorites.html'}}"><span>VENUES</span></a>
<div class="dropdown_4columns">
<div class="inner">
<div class="col_4 firstcolumn">
<div class="col_1 no-icon first"><a href="#"><img src="{{skin url='images/slideshow/menu-1.png'}}" alt="Calvin Klein" /></a></div>
<div class="col_1 no-icon"><a href="#"><img src="{{skin url='images/slideshow/menu-2.png'}}" alt="Gucci" /></a></div>
<div class="col_1 no-icon"><a href="#"><img src="{{skin url='images/slideshow/menu-3.png'}}" alt="Moschino" /></a></div>
<div class="col_1 no-icon"><a href="#"><img src="{{skin url='images/slideshow/menu-4.png'}}" alt="Calvin Klein" /></a></div>
</div>
<div class="col_4 lastcolumn">
<div class="col_1 no-icon "><a href="#"><img src="{{skin url='images/slideshow/menu-5.png'}}" alt="Gucci" /></a></div>
<div class="col_1 no-icon "><a href="#"><img src="{{skin url='images/slideshow/menu-6.png'}}" alt="Gucci" /></a></div>
</div>
</div>
</div>
</li>
<!-- End 4 column container -->
<li class="submenu "><a class="drop" href="{{store url='customer-s-choice.html'}}"><span>COLLECTIONS</span></a>
<div class="dropdown_4columns">
<div class="inner">
<div class="col_2 wrapper_col">
<div class="col_2  firstcolumn">
<h4>Maecenas in porttitor nisl.</h4>
<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos morbi facilisis blandit massa sit amet viverra ante mattis nec.</p>
<p>Pellentesque tempus lacus non nisi viverra sit amet vestibulum sapien rhoncus.</p>
</div>
<div class="col_2 ">
<h4>Maecenas in porttitor nisl.</h4>
<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos morbi facilisis blandit massa sit amet viverra ante mattis nec.</p>
<p>Pellentesque tempus lacus non nisi viverra sit amet vestibulum sapien rhoncus.</p>
</div>
</div>
<div class="col_1"><span class="title_col">PELENTEQUES FRINGIL </span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='customer-s-choice.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='tires.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='replacements.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel/shoes.html'}}">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='electronics/computers.html'}}">Tristique Turpis</a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='customer-s-choice..html'}}">Amet Bibendum</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='replacements.html'}}">Nulla Quam </a></li>
</ul>
</div>
<div class="col_1 wrapper_col">
<div class="col_1 first"><span class="title_col">PELENTEQUES FRINGIL</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='wheels.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='engines.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">PELENTEQUES FRINGIL</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='replacements.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='accessories.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
</ul>
</div>
</div>
</div>
</div>
<!-- End 3 columns container --></li>
<li class="submenu "><a class="drop" href="{{store url='furniture.html'}}"><span>PRODUCT INFO</span></a>
<div class="dropdown_4columns">
<div class="inner">
<div class="col_1"><span class="title_col">PELENTEQUES FRINGIL</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='customer-s-choice.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='tires.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='replacements.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel/shoes.html'}}">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='electronics/computers.html'}}">Tristique Turpis</a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='customer-s-choice..html'}}">Amet Bibendum</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='replacements.html'}}">Nulla Quam </a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">PELENTEQUES FRINGIL</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='replacements.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='accessories.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
</ul>
</div>
<div class="col_2 wrapper_col">
<div class="col_2 firstcolumn">
<h4>Maecenas in porttitor nisl.</h4>
<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos morbi facilisis blandit massa sit amet viverra ante mattis nec.</p>
<p>Pellentesque tempus lacus non nisi viverra sit amet vestibulum sapien rhoncus.</p>
</div>
<div class="col_2 last">
<h4>Maecenas in porttitor nisl.</h4>
<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos morbi facilisis blandit massa sit amet viverra ante mattis nec.</p>
<p>Pellentesque tempus lacus non nisi viverra sit amet vestibulum sapien rhoncus.</p>
</div>
</div>
</div>
</div>
<!-- End 3 columns container --></li>
<li class="submenu"><a class="drop" href="{{store direct_url='furniture.html'}}">OFFERS</a><!-- Begin 5 columns Item -->
<div class="dropdown_3columns">
<div class="inner">
<div class="col_2 col_sp"><a href="{{store url='furniture.html'}}"><img src="{{media url="wysiwyg/10.jpg"}}" alt="" /></a>
<h4>Maecenas in porttitor nisl.</h4>
<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos morbi facilisis blandit massa sit amet viverra ante mattis nec.</p>
<p>Pellentesque tempus lacus non nisi viverra sit amet vestibulum sapien rhoncus.</p>
</div>
<div class="col_1"><span class="title_col">PELENTEQUES FRINGIL</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='rings.html'}}">Maecenas mollis</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='necklaces.html'}}"> Duis scelerisque </a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='watches.html'}}"> Hard Drives </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='rings.html'}}"> Monitors </a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='necklaces.html'}}"> RAM / Memory </a></li>
<li class="level1 nav-3-6"><a href="{{store direct_url='watches.html'}}"> Cases </a></li>
<li class="level1 nav-3-7"><a href="{{store direct_url='rings.html'}}"> Processors </a></li>
<li class="level1 nav-3-8 last"><a href="{{store direct_url='watches.html'}}"> Peripherals </a></li>
</ul>
</div>
</div>
</div>
</li>
<li><a class="drop" href="{{store direct_url='contacts'}}">CONTACT</a></li>
</ul>
EOB
);
$block->setData($dataBlock)->save();

$dataBlock = array(
	'title' => 'EM0009 Main SlideShow',
	'identifier' => $prefixBlock.'em0009_main_slideshow',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<ul class="thumbs noscript">
<li><a class="thumb" href="{{skin url='images/slideshow/1.jpg'}}"> <img title="img_1" src="{{skin url='images/slideshow/1.jpg'}}" alt="1" /> </a>
<div class="caption">
<div class="image-desc">
<h2>New Collection</h2>
<p>Nam ut libero in justo hendrerit pretium Curabitur lobortis porttitor.</p>
</div>
</div>
</li>
<li><a class="thumb" href="{{skin url='images/slideshow/2.jpg'}}"> <img title="img_2" src="{{skin url='images/slideshow/2.jpg'}}" alt="2" /> </a>
<div class="caption">
<div class="image-desc">
<h2>New Collection</h2>
<p>Nam ut libero in justo hendrerit pretium Curabitur lobortis porttitor.<span>&amp;npsb;</span></p>
</div>
</div>
</li>
<li><a class="thumb" href="{{skin url='images/slideshow/3.jpg'}}"> <img title="img_3" src="{{skin url='images/slideshow/3.jpg'}}" alt="3" /> </a>
<div class="caption">
<div class="image-desc">
<h2>New Collection</h2>
<p>Nam ut libero in justo hendrerit pretium Curabitur lobortis porttitor.</p>
</div>
</div>
</li>
<li><a class="thumb" href="{{skin url='images/slideshow/4.jpg'}}"> <img title="img_4" src="{{skin url='images/slideshow/4.jpg'}}" alt="1" /> </a>
<div class="caption">
<div class="image-desc">
<h2>New Collection</h2>
<p>Nam ut libero in justo hendrerit pretium Curabitur lobortis porttitor.</p>
</div>
</div>
</li>
<li><a class="thumb" href="{{skin url='images/slideshow/6.jpg'}}"> <img title="img_6" src="{{skin url='images/slideshow/6.jpg'}}" alt="2" /> </a>
<div class="caption">
<div class="image-desc">
<h2>New Collection</h2>
<p>Nam ut libero in justo hendrerit pretium Curabitur lobortis porttitor.</p>
</div>
</div>
</li>
<li><a class="thumb" href="{{skin url='images/slideshow/8.jpg'}}"> <img title="img_8" src="{{skin url='images/slideshow/8.jpg'}}" alt="3" /> </a>
<div class="caption">
<div class="image-desc">
<h2>New Collection</h2>
<p>Nam ut libero in justo hendrerit pretium Curabitur lobortis porttitor.</p>
</div>
</div>
</li>
<li><a class="thumb" href="{{skin url='images/slideshow/5.jpg'}}"> <img title="img_5" src="{{skin url='images/slideshow/5.jpg'}}" alt="1" /> </a>
<div class="caption">
<div class="image-desc">
<h2>New Collection</h2>
<p>Nam ut libero in justo hendrerit pretium Curabitur lobortis porttitor.</p>
</div>
</div>
</li>
<li><a class="thumb" href="{{skin url='images/slideshow/9.jpg'}}"> <img title="img_9" src="{{skin url='images/slideshow/9.jpg'}}" alt="2" /> </a>
<div class="caption">
<div class="image-desc">
<h2>New Collection</h2>
<p>Nam ut libero in justo hendrerit pretium Curabitur lobortis porttitor.</p>
</div>
</div>
</li>
<li><a class="thumb" href="{{skin url='images/slideshow/10.jpg'}}"> <img title="img_10" src="{{skin url='images/slideshow/10.jpg'}}" alt="3" /> </a>
<div class="caption">
<div class="image-desc">
<h2>New Collection</h2>
<p>Nam ut libero in justo hendrerit pretium Curabitur lobortis porttitor.</p>
</div>
</div>
</li>
</ul>
EOB
);
$block->setData($dataBlock)->save();

$dataBlock = array(
	'title' => 'EM0009 Top Main Logo Company',
	'identifier' => $prefixBlock.'em0009_topmain_logo_company',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
	<ul class="slideshow_logo_company jcarousel-skin-tango">
		<li class="item"><a href="#"><img src="{{skin url="images/slideshow/1.png"}}" alt="" /></a></li>
		<li class="item"><a href="#"><img src="{{skin url="images/slideshow/2.png"}}" alt="" /></a></li>
		<li class="item"><a href="#"><img src="{{skin url="images/slideshow/3.png"}}" alt="" /></a></li>
		<li class="item"><a href="#"><img src="{{skin url="images/slideshow/4.png"}}" alt="" /></a></li>
		<li class="item"><a href="#"><img src="{{skin url="images/slideshow/5.png"}}" alt="" /></a></li>
		<li class="item"><a href="#"><img src="{{skin url="images/slideshow/6.png"}}" alt="" /></a></li>
		<li class="item"><a href="#"><img src="{{skin url="images/slideshow/1.png"}}" alt="" /></a></li>
		<li class="item"><a href="#"><img src="{{skin url="images/slideshow/2.png"}}" alt="" /></a></li>
		<li class="item"><a href="#"><img src="{{skin url="images/slideshow/3.png"}}" alt="" /></a></li>
	</ul>
EOB
);
$block->setData($dataBlock)->save();


$dataBlock = array(
	'title' => 'EM0009 Home New Arrivals',
	'identifier' => $prefixBlock.'em0009_new_arrivals',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div class="new-arrivals">{{widget type="newproducts/list" order_by="name asc" new_category="3,10,22,23,13,8,12,25,26,15,27,28,29,30,31,32,33,34,18,4,5,16,17,19,24,20,35,36,37" limit_count="12" column_count="4" choose_template="em_new_products/new_arrivals.phtml"}}</div>
EOB
);
$block->setData($dataBlock)->save();


$dataBlock = array(
	'title' => 'EM0009 Home Advertising R1',
	'identifier' => $prefixBlock.'em0009_home_adv_r1',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div class="home-banner"><a title="" href="#"><img src="{{skin url='images/custom-design-banner-en.jpg'}}" alt="" /></a></div>
EOB
);
$block->setData($dataBlock)->save();


$dataBlock = array(
	'title' => 'EM0009 Bottom Advertising R2',
	'identifier' => $prefixBlock.'em0009_home_adv_r2',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div class="bottom img">
			<ul>
			<li><a title="" href="#"><img src="{{media url="wysiwyg/banner-1.jpg"}}" alt="" /></a></li>
			<li><a title="" href="#"><img src="{{media url="wysiwyg/banner-2.jpg"}}" alt="" /></a></li>
			<li><a title="" href="#"><img src="{{media url="wysiwyg/banner-3.jpg"}}" alt="" /></a></li>
			</ul>
			</div>
EOB
);
$block->setData($dataBlock)->save();


$dataBlock = array(
	'title' => 'EM0009 Bottom Video',
	'identifier' => $prefixBlock.'em0009_video',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div class="bottom bottom-col-1">
			<h4>About Funituris</h4>
			<div class="bottom-video"><object width="220" height="200" data="http://www.youtube.com/v/y4Sl6fryuiM?version=3&amp;hl=en_US" type="application/x-shockwave-flash"><param name="wmode" value="transparent" /><param name="data" value="http://www.youtube.com/v/y4Sl6fryuiM?version=3&amp;hl=en_US" /><param name="src" value="http://www.youtube.com/v/y4Sl6fryuiM?version=3&amp;hl=en_US" /><param name="allowfullscreen" value="true" /></object></div>
			<div class="bottom-info">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.. <a class="more" title="" href="#">View more details</a></div>
			</div>
EOB
);
$block->setData($dataBlock)->save();


$dataBlock = array(
	'title' => 'EM0009 Bottom Location',
	'identifier' => $prefixBlock.'em0009_location',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div class="bottom bottom-col-2">
			<h4>Store Location</h4>
			<div class="bottom-info">
			<p>123 Str Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
			</div>
			<div class="bottom-img"><img src="{{media url="wysiwyg/04_maps.png"}}" alt="" /><a class="more" title="" href="#">Find on Google Map</a></div>
			</div>
EOB
);
$block->setData($dataBlock)->save();


$dataBlock = array(
	'title' => 'EM0009 Bottom Guides',
	'identifier' => $prefixBlock.'em0009_guides',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div class="bottom bottom-col-3">
			<h4>Furnituris Guides</h4>
			<div class="bottom-info">
			<ul>
			<li><a title="" href="#">Testing and choosing Furniture</a></li>
			<li><a title="" href="#">Building a Furniture Wardrobe</a></li>
			<li><a title="" href="#">A guide to furniture Category</a></li>
			<li><a title="" href="#">Choosing an Online Furnituris Shop</a></li>
			<li><a title="" href="#">Black and White Furniture Chair</a></li>
			</ul>
			</div>
			</div>
EOB
);
$block->setData($dataBlock)->save();


$dataBlock = array(
	'title' => 'EM0009 Footer Contact Us',
	'identifier' => $prefixBlock.'em0009_footer_contact_us',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div class="footer-title">Contact Us</div>
			<div class="footer-content">
			<ul>
			<li><a title="" href="#">Questions or Comments?</a></li>
			<li><a class="mgs" title="Leave a Message" href="#">Leave a Message</a> <span>and we'll get right back to you</span></li>
			<li><a title="" href="#">back to you.</a></li>
			<li><a title="" href="#">Shipping - Return</a></li>
			<li><a title="" href="#">Customer Sevices</a></li>
			<li><a title="" href="#">Conditions of use</a></li>
			</ul>
			</div>
EOB
);
$block->setData($dataBlock)->save();


$dataBlock = array(
	'title' => 'EM0009 Footer Follow Us',
	'identifier' => $prefixBlock.'em0009_footer_follow_us',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div class="col col-2 followus">
			<div class="footer-title">Follow Us</div>
			<div class="footer-content">
			<ul>
			<li class="footer-fb"><a title="" href="#">Find us on facebook</a></li>
			<li class="footer-tw"><a title="" href="#">Follow us on Twitter</a></li>
			<li class="footer-sub"><a title="" href="#">Subscribe our channel</a></li>
			<li class="footer-rss"><a title="" href="#">RSS Feed</a></li>
			</ul>
			</div>
			</div>
EOB
);
$block->setData($dataBlock)->save();

$dataBlock = array(
	'title' => 'EM0009 Footer Accept',
	'identifier' => $prefixBlock.'em0009_footer_accept',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div class="footer-title">We Accept</div>
			<div class="footer-content">
			<ul>
			<li><a title="paypal" href="#"><img src="{{skin url="images/media/paypal.png"}}" alt="" /></a></li>
			<li><a title="visa" href="#"><img src="{{skin url="images/media/visa.png"}}" alt="" /></a></li>
			<li><a title="master" href="#"><img src="{{skin url="images/media/master.png"}}" alt="" /></a></li>
			<li><a title="express" href="#"><img src="{{skin url="images/media/express.png"}}" alt="" /></a></li>
			<li><a title="other" href="#"><img src="{{skin url="images/media/other.png"}}" alt="" /></a></li>
			</ul>
			</div>
EOB
);
$block->setData($dataBlock)->save();

$dataBlock = array(
	'title' => 'EM0009 Home Tab Categories',
	'identifier' => $prefixBlock.'em0009_tab_categories',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div id="tabs-1">{{widget type="productsfilterwidget/productsfilterwidget" cache_time="15" col_count="3" limit_count="27" sort_by="entity_id" sort_direction="DESC" toolbar="1" template="em_productsfilterwidget/grid_1.phtml" special="4" conditions="YTo2OntzOjQ6InR5cGUiO3M6NDA6InNhbGVzcnVsZS9ydWxlX2NvbmRpdGlvbl9wcm9kdWN0X2NvbWJpbmUiO3M6OToiYXR0cmlidXRlIjtOO3M6ODoib3BlcmF0b3IiO047czo1OiJ2YWx1ZSI7czoxOiIxIjtzOjE4OiJpc192YWx1ZV9wcm9jZXNzZWQiO047czoxMDoiYWdncmVnYXRvciI7czozOiJhbGwiO30,-1337076293"}}</div>
			<div id="tabs-2">{{widget type="productsfilterwidget/productsfilterwidget" cache_time="15" col_count="3" limit_count="27" sort_by="entity_id" sort_direction="DESC" toolbar="1" template="em_productsfilterwidget/grid_2.phtml" special="3" conditions="YTo2OntzOjQ6InR5cGUiO3M6NDA6InNhbGVzcnVsZS9ydWxlX2NvbmRpdGlvbl9wcm9kdWN0X2NvbWJpbmUiO3M6OToiYXR0cmlidXRlIjtOO3M6ODoib3BlcmF0b3IiO047czo1OiJ2YWx1ZSI7czoxOiIxIjtzOjE4OiJpc192YWx1ZV9wcm9jZXNzZWQiO047czoxMDoiYWdncmVnYXRvciI7czozOiJhbGwiO30,-1337076330"}}</div>
			<div id="tabs-3">{{widget type="productsfilterwidget/productsfilterwidget" cache_time="15" col_count="3" limit_count="27" sort_by="entity_id" sort_direction="DESC" toolbar="1" template="em_productsfilterwidget/grid_3.phtml" special="2" conditions="YTo2OntzOjQ6InR5cGUiO3M6NDA6InNhbGVzcnVsZS9ydWxlX2NvbmRpdGlvbl9wcm9kdWN0X2NvbWJpbmUiO3M6OToiYXR0cmlidXRlIjtOO3M6ODoib3BlcmF0b3IiO047czo1OiJ2YWx1ZSI7czoxOiIxIjtzOjE4OiJpc192YWx1ZV9wcm9jZXNzZWQiO047czoxMDoiYWdncmVnYXRvciI7czozOiJhbGwiO30,-1337076357"}}</div>
EOB
);
$block->setData($dataBlock)->save();

$dataBlock = array(
	'title' => 'EM0009 Cate Left Adv',
	'identifier' => $prefixBlock.'em0009_left_cate_adv',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div class="block block-banner"><a href="#"><img src="{{media url="wysiwyg/banner.jpg"}}" alt="" /></a></div>
EOB
);
$block->setData($dataBlock)->save();

$dataBlock = array(
	'title' => 'EM0009 Special Deals',
	'identifier' => $prefixBlock.'em0009_special_deals',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div>{{widget type="saleproducts/list" order_by="position desc" new_category="35,36,37" limit_count="1" choose_template="custom_template" custom_theme="em_sale_products/special_deals.phtml"}}</div>
EOB
);
$block->setData($dataBlock)->save();

$dataBlock = array(
	'title' => 'EM0009 Right Advertising Checkout Page',
	'identifier' => $prefixBlock.'em0009_adv_left_checkout',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div class="block block-banner"><a href="#"><img src="{{skin url='images/Savelo_FURNITURE-logo-80DA9DF2DC-seeklogo.com.jpg'}}" alt="" /></a></div>
EOB
);
$block->setData($dataBlock)->save();


$dataBlock = array(
	'title' => 'EM0009 Home Tab Our_Favorites',
	'identifier' => $prefixBlock.'em0009_our_favorite',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div>{{widget type="productsfilterwidget/productsfilterwidget" cache_time="15" col_count="3" limit_count="27" sort_by="entity_id" sort_direction="DESC" toolbar="1" template="custom_template" custom_theme="em_productsfilterwidget/grid_1.phtml" special="1" conditions="YTo3OntzOjQ6InR5cGUiO3M6NDA6InNhbGVzcnVsZS9ydWxlX2NvbmRpdGlvbl9wcm9kdWN0X2NvbWJpbmUiO3M6OToiYXR0cmlidXRlIjtOO3M6ODoib3BlcmF0b3IiO047czo1OiJ2YWx1ZSI7czoxOiIxIjtzOjE4OiJpc192YWx1ZV9wcm9jZXNzZWQiO047czoxMDoiYWdncmVnYXRvciI7czozOiJhbGwiO3M6MTA6ImNvbmRpdGlvbnMiO2E6MTp7aTowO2E6NTp7czo0OiJ0eXBlIjtzOjMyOiJzYWxlc3J1bGUvcnVsZV9jb25kaXRpb25fcHJvZHVjdCI7czo5OiJhdHRyaWJ1dGUiO3M6MTI6ImNhdGVnb3J5X2lkcyI7czo4OiJvcGVyYXRvciI7czoyOiI9PSI7czo1OiJ2YWx1ZSI7czoyOiIzNSI7czoxODoiaXNfdmFsdWVfcHJvY2Vzc2VkIjtiOjA7fX19-1339500053"}}</div>
EOB
);
$block->setData($dataBlock)->save();


$dataBlock = array(
	'title' => 'EM0009 Home Tab Customer_Choice',
	'identifier' => $prefixBlock.'em0009_customer_choice',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div>{{widget type="productsfilterwidget/productsfilterwidget" cache_time="15" col_count="3" limit_count="27" sort_by="entity_id" sort_direction="DESC" toolbar="1" template="custom_template" custom_theme="em_productsfilterwidget/grid_2.phtml" special="3" conditions="YTo2OntzOjQ6InR5cGUiO3M6NDA6InNhbGVzcnVsZS9ydWxlX2NvbmRpdGlvbl9wcm9kdWN0X2NvbWJpbmUiO3M6OToiYXR0cmlidXRlIjtOO3M6ODoib3BlcmF0b3IiO047czo1OiJ2YWx1ZSI7czoxOiIxIjtzOjE4OiJpc192YWx1ZV9wcm9jZXNzZWQiO047czoxMDoiYWdncmVnYXRvciI7czozOiJhbGwiO30,-1337076330"}}</div>
EOB
);
$block->setData($dataBlock)->save();


$dataBlock = array(
	'title' => 'EM0009 Home Tab Most_Popular',
	'identifier' => $prefixBlock.'em0009_most_populars',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
			<div>{{widget type="productsfilterwidget/productsfilterwidget" cache_time="15" col_count="3" limit_count="27" sort_by="entity_id" sort_direction="DESC" toolbar="1" template="custom_template" custom_theme="em_productsfilterwidget/grid_3.phtml" special="4" conditions="YTo2OntzOjQ6InR5cGUiO3M6NDA6InNhbGVzcnVsZS9ydWxlX2NvbmRpdGlvbl9wcm9kdWN0X2NvbWJpbmUiO3M6OToiYXR0cmlidXRlIjtOO3M6ODoib3BlcmF0b3IiO047czo1OiJ2YWx1ZSI7czoxOiIxIjtzOjE4OiJpc192YWx1ZV9wcm9jZXNzZWQiO047czoxMDoiYWdncmVnYXRvciI7czozOiJhbGwiO30,-1339145386"}}</div>
EOB
);
$block->setData($dataBlock)->save();


####################################################################################################
# INSERT PAGE
####################################################################################################

$dataPage = array(
	'title'				=> 'EM0009 Home page',
	'identifier' 		=> $prefixPage.'em0009_home',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'content'			=> <<<EOB
		&nbsp;
EOB
,
	'root_template'		=> 'one_column',
);
$page->setData($dataPage)->save();


$dataPage = array(
	'title'				=> 'typography',
	'identifier' 		=> $prefixPage.'typography',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'content'			=> <<<EOB
		<h1>Heading H1</h1>
		<h2>Heading H2</h2>
		<h3>Heading H3</h3>
		<h4>Heading H4</h4>
		<h5>Heading H5</h5>
		<h6>Heading H6</h6>
		<ul>
		<li>Bullet list 1</li>
		<li>Bullet list 2
		<ul>
		<li>Bullet list 2.1</li>
		<li>Bullet list 2.2
		<ul>
		<li>Bullet list 2.2.1</li>
		<li>Bullet list 2.2.2</li>
		<li>Bullet list 2.2.3</li>
		</ul>
		</li>
		<li>Bullet list 2.3</li>
		</ul>
		</li>
		<li>Bullet list 3</li>
		<li>Bullet list 4
		<ul>
		<li>Bullet list 4.1</li>
		<li>Bullet list 4.2</li>
		</ul>
		</li>
		</ul>
		<ol>
		<li>Numbered list 1</li>
		<li>Numbered list 2<ol>
		<li>Numbered list 2.1</li>
		<li>Numbered list 2.2<ol>
		<li>Numbered list 2.2.1</li>
		<li>Numbered list 2.2.2</li>
		<li>Numbered list 2.2.3</li>
		</ol></li>
		<li>Numbered list 2.3</li>
		</ol></li>
		<li>Numbered list 3<ol>
		<li>Numbered list 3.1</li>
		<li>Numbered list 3.2</li>
		<li>Numbered list 3.3</li>
		</ol></li>
		</ol><dl><dt>definition title dt</dt><dd>definition description dd</dd><dt>definition title dt</dt><dd>definition description dd</dd></dl>
		<p><code>Code tag<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</code></p>
		<blockquote>Blockquote tag<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
		<pre>Pre tag<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</pre>
		<p>table with class <strong>data-table</strong></p>
		<table class="data-table">
		<thead>
		<tr><th>thead th 1</th><th>thead th 2</th><th>thead th 3</th><th>thead th 4</th></tr>
		</thead>
		<tfoot>
		<tr>
		<td>tfoot td 1</td>
		<td>tfoot td 2</td>
		<td>tfoot td 3</td>
		<td>tfoot td 4</td>
		</tr>
		</tfoot>
		<tbody>
		<tr class="odd">
		<td>tbody td1</td>
		<td>tbody td2</td>
		<td>tbody td3</td>
		<td>tbody td4</td>
		</tr>
		<tr class="even">
		<td>tbody td1</td>
		<td>tbody td2</td>
		<td>tbody td3</td>
		<td>tbody td4</td>
		</tr>
		<tr class="odd">
		<td>tbody td1</td>
		<td>tbody td2</td>
		<td>tbody td3</td>
		<td>tbody td4</td>
		</tr>
		<tr class="even">
		<td>tbody td1</td>
		<td>tbody td2</td>
		<td>tbody td3</td>
		<td>tbody td4</td>
		</tr>
		</tbody>
		</table>
		<p><strong>Column Layout:</strong></p>
		<div class="cols-set-12">
		<div class="col3 col-first">
		<div class="col-inner">
		<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col3 col-first"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
		</div>
		</div>
		<div class="col3">
		<div class="col-inner">
		<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col3"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
		</div>
		</div>
		<div class="col6 col-last">
		<div class="col-inner">
		<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col6 col-last"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
		</div>
		</div>
		</div>
		<p>Text after column layout</p>
		<div class="cols-set-12">
		<div class="col2 col-first">
		<div class="col-inner">
		<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2 col-first"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
		</div>
		</div>
		<div class="col2">
		<div class="col-inner">
		<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
		</div>
		</div>
		<div class="col2">
		<div class="col-inner">
		<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
		</div>
		</div>
		<div class="col2">
		<div class="col-inner">
		<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
		</div>
		</div>
		<div class="col2">
		<div class="col-inner">
		<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
		</div>
		</div>
		<div class="col2 col-last">
		<div class="col-inner">
		<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2 col-last"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
		</div>
		</div>
		</div>
EOB
,
	'root_template'		=> 'one_column',
);
$page->setData($dataPage)->save();
*/

$installer->endSetup(); 