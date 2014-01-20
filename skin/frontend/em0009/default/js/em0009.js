/**
 * Javascript library for template ExtremeMagento
 * @copyright 2007 Quick Solution LTD. All rights reserved.
 * @author Giao L. Trinh <giao.trinh@quicksolutiongroup.com>
 */

eval(function() {
	
// EM.tools {{{
	
if (typeof BLANK_IMG == 'undefined') 
	var BLANK_IMG = '';

// declare namespace() method
String.prototype.namespace = function(separator) {
  this.split(separator || '.').inject(window, function(parent, child) {
    var o = parent[child] = { }; return o;
  });
};


'EM.tools'.namespace();


// EM0008 {{{
	
function decorateSlideshow() {
	var $$li = $$('#slideshow ul li');
	if ($$li.length > 0) {
		
		// reset UL's width
		var ul = $$('#slideshow ul')[0];
		var w = 0;
		$$li.each(function(li) {
			w += li.getWidth();
		});
		ul.setStyle({'width':w+'px'});
		
		// private variables
		var previous = $$('#slideshow a.previous')[0];
		var next = $$('#slideshow a.next')[0];
		var num = 1;
		var width = ul.down().getWidth() * num;
		//var width = 950 * num;
		var slidePeriod = 3; // seconds
		var manualSliding = false;
		
		// next slide
		function nextSlide() {
			new Effect.Move(ul, { 
				x: -width,
				mode: 'relative',
				queue: 'end',
				duration: 1.0,
				//transition: Effect.Transitions.sinoidal,
				afterFinish: function() {
					for (var i = 0; i < num; i++)
						ul.insert({ bottom: ul.down() });
					ul.setStyle('left:0');
				}
			});
		}
		
		// previous slide
		function previousSlide() {
			new Effect.Move(ul, { 
				x: width,
				mode: 'relative',
				queue: 'end',
				duration: 1.0,
				//transition: Effect.Transitions.sinoidal,
				beforeSetup: function() {
					for (var i = 0; i < num; i++)
						ul.insert({ top: ul.down('li:last-child') });
					ul.setStyle({'position': 'relative', 'left': -width+'px'});
				}
			});
		}
		
		function startSliding() {
			sliding = true;
		}
		
		function stopSliding() {
			sliding = false;
		}
		
		// bind next button's onlick event
		next.observe('click', function(event) {
			Event.stop(event);
			manualSliding = true;
			nextSlide();
		});
		
		// bind previous button's onclick event
		previous.observe('click', function(event) {
			Event.stop(event);
			manualSliding = true;
			previousSlide();
		});
		
		
		// auto run slideshow
		new PeriodicalExecuter(function() {
			if (!manualSliding) previousSlide();
			manualSliding = false;
		}, slidePeriod);
		
		
	}
}

function decorateSlideshow2() {
	var slideshow = $('slideshow2');
	if (slideshow) {

		// private variables
		var ul = slideshow.select('.slideshow-box ul')[0];
		var $$li = ul.select('li');
		//var width = ul.down('li').getWidth();
		var width = 949 ;
		//alert(width);
		var slidePeriod = 6; // seconds
		var manualSliding = false;
		var currentIdx = 0;
		
		// reset slideshow UL's width
		ul.setStyle({ width: width*$$li.length+10+'px' });
		
		// store slideshow image index into LI
		for (var i = 0; i < $$li.length; i++) {
			$$li[i].slideshowIdx = i;
			//$$li[i].setAttribute('id', 'slideshow2_'+i);
		}
		
		// generate Navigation
		var nav = slideshow.select('.navigation')[0];
		nav.insert('<ul></ul>');
		var nav_ul = nav.down('ul');
		for (var i = 0; i < $$li.length; i++) {
			var attr = '';
			if (i == 0) var attr = 'class="active"';
			nav_ul.insert('<li><a href="#'+i+' " '+attr+'>'+(i+1)+'</a></li>');
		}
		
		// bind onClick event on navigation A element
		var $$nav_li = nav_ul.childElements();
		nav_ul.select('a').each(function(a) {
			a.observe('click', function(event) {
				Event.stop(event);
				if (a.hasClassName('active')) return;
				
				manualSliding = true;
				
				var current = a.up('li');
				var active = nav_ul.select('a.active')[0].up('li');
				var idx_current = $$nav_li.indexOf(current);
				var idx_active = $$nav_li.indexOf(active);
				console.debug(idx_current, idx_active);
				
				if (idx_current > idx_active)
					nextSlide(idx_current - idx_active);
				else
					previousSlide(idx_active - idx_current);
			}.bind(a));
		}.bind(this));
		
		// next slide
		function nextSlide(n) {
			if (typeof n == 'undefined') n = 1;
			
			new Effect.Move(ul, { 
				x: -width*n,
				mode: 'relative',
				//queue: 'end',
				duration: 2.0,
				transition: Effect.Transitions.spring,
				beforeSetup: function() {
					// set current slide indicator
					nav_ul.select('a.active')[0].removeClassName('active');
					nav_ul.down('li', ul.down().next(n-1).slideshowIdx).down('a').addClassName('active');
				},
				afterFinish: function() {
					for (var i = 0; i < n; i++)
						ul.insert({ bottom: ul.down() });
					ul.setStyle('left:0');
				}
			});
		}
		
		// previous slide
		function previousSlide(n) {
			if (typeof n == 'undefined') n = 1;
			console.debug(n);
			new Effect.Move(ul, { 
				x: width*n,
				mode: 'relative',
				//queue: 'end',
				duration: 2.0,
				transition: Effect.Transitions.spring,
				beforeSetup: function() {
					// set current slide indicator
					nav_ul.select('a.active')[0].removeClassName('active');
					var li = ul.down('li:last-child');
					if (n > 1) li = li.previous(n-2);
					nav_ul.down('li', li.slideshowIdx).down('a').addClassName('active');
					
					for (var i = 0; i < n; i++)
						ul.insert({ top: ul.down('li:last-child') });
					ul.setStyle({'position': 'relative', 'left': -width*n+'px'});
				}
			});
		}
		
		// auto run slideshow
		new PeriodicalExecuter(function() {
				if (!manualSliding) nextSlide();
				manualSliding = false;
			}, slidePeriod);
			
	}
}

function decorateSlideshow3() {
	var slideshow = $('slideshow2');
	if (slideshow) {

		// private variables
		var ul = slideshow.select('.slideshow-box ul')[0];
		var $$li = ul.select('li');
		//var width = ul.down('li').getWidth();
		var width = 949 ;
		//alert(width);
		var slidePeriod = 6; // seconds
		var manualSliding = false;
		var currentIdx = 0;
		
		// reset slideshow UL's width
		ul.setStyle({ width: width*$$li.length+10+'px' });
		
		// store slideshow image index into LI
		for (var i = 0; i < $$li.length; i++) {
			$$li[i].slideshowIdx = i;
			//$$li[i].setAttribute('id', 'slideshow2_'+i);
		}
		
		// generate Navigation
		var nav = slideshow.select('.navigation')[0];
		nav.insert('<ul></ul>');
		var nav_ul = nav.down('ul');
		for (var i = 0; i < $$li.length; i++) {
			var attr = '';
			if (i == 0) var attr = 'class="active"';
			nav_ul.insert('<li><a href="#'+i+' " '+attr+'>'+(i+1)+'</a></li>');
		}
		
		// bind onClick event on navigation A element
		var $$nav_li = nav_ul.childElements();
		nav_ul.select('a').each(function(a) {
			a.observe('click', function(event) {
				Event.stop(event);
				if (a.hasClassName('active')) return;
				
				manualSliding = true;
				
				var current = a.up('li');
				var active = nav_ul.select('a.active')[0].up('li');
				var idx_current = $$nav_li.indexOf(current);
				var idx_active = $$nav_li.indexOf(active);
				console.debug(idx_current, idx_active);
				
				if (idx_current > idx_active)
					nextSlide(idx_current - idx_active);
				else
					previousSlide(idx_active - idx_current);
			}.bind(a));
		}.bind(this));
		
		// next slide
		function nextSlide(n) {
			if (typeof n == 'undefined') n = 1;
			
			new Effect.Move(ul, { 
				x: -width*n,
				mode: 'relative',
				//queue: 'end',
				duration: 5.0,
				transition: Effect.Transitions.spring,
				beforeSetup: function() {
					// set current slide indicator
					nav_ul.select('a.active')[0].removeClassName('active');
					nav_ul.down('li', ul.down().next(n-1).slideshowIdx).down('a').addClassName('active');
				},
				afterFinish: function() {
					for (var i = 0; i < n; i++)
						ul.insert({ bottom: ul.down() });
					ul.setStyle('left:0');
				}
			});
		}
		
		// previous slide
		function previousSlide(n) {
			if (typeof n == 'undefined') n = 1;
			console.debug(n);
			new Effect.Move(ul, { 
				x: width*n,
				mode: 'relative',
				//queue: 'end',
				duration: 5.0,
				transition: Effect.Transitions.spring,
				beforeSetup: function() {
					// set current slide indicator
					nav_ul.select('a.active')[0].removeClassName('active');
					var li = ul.down('li:last-child');
					if (n > 1) li = li.previous(n-2);
					nav_ul.down('li', li.slideshowIdx).down('a').addClassName('active');
					
					for (var i = 0; i < n; i++)
						ul.insert({ top: ul.down('li:last-child') });
					ul.setStyle({'position': 'relative', 'left': -width*n+'px'});
				}
			});
		}
		
		// auto run slideshow
		new PeriodicalExecuter(function() {
				if (!manualSliding) nextSlide();
				manualSliding = false;
			}, slidePeriod);
			
	}
}

function decorateSlideshow_moreview() {
	var $$li = $$('#slideshow_moreview ul li');
	
	if ($$li.length > 0) {
		
		// reset UL's width
		var ul = $$('#slideshow_moreview ul')[0];
		var w = 0;
		$$li.each(function(li) {
			w += li.getWidth();
		});
		ul.setStyle({'width':w+'px'});
		
		// private variables
		var previous = $$('#slideshow_moreview a.previous')[0];
		var next = $$('#slideshow_moreview a.next')[0];
		var num = 1;
		var width = ul.down().getWidth() * num;
		var slidePeriod = 3; // seconds
		var manualSliding = false;
		
		// next slide
		function nextSlide() {
			new Effect.Move(ul, { 
				x: -width,
				mode: 'relative',
				queue: 'end',
				duration: 1.0,
				//transition: Effect.Transitions.sinoidal,
				afterFinish: function() {
					for (var i = 0; i < num; i++)
						ul.insert({ bottom: ul.down() });
					ul.setStyle('left:0');
				}
			});
		}
		
		// previous slide
		function previousSlide() {
			new Effect.Move(ul, { 
				x: width,
				mode: 'relative',
				queue: 'end',
				duration: 1.0,
				//transition: Effect.Transitions.sinoidal,
				beforeSetup: function() {
					for (var i = 0; i < num; i++)
						ul.insert({ top: ul.down('li:last-child') });
					ul.setStyle({'position': 'relative', 'left': -width+'px'});
				}
			});
		}
		
		function startSliding() {
			sliding = true;
		}
		
		function stopSliding() {
			sliding = false;
		}
		
		// bind next button's onlick event
		next.observe('click', function(event) {
			Event.stop(event);
			manualSliding = true;
			nextSlide();
		});
		
		// bind previous button's onclick event
		previous.observe('click', function(event) {
			Event.stop(event);
			manualSliding = true;
			previousSlide();
		});
		
		
		// auto run slideshow
	/*	new PeriodicalExecuter(function() {
			if (!manualSliding) previousSlide();
			manualSliding = false;
		}, slidePeriod);*/
		
		
	}
}

document.observe("dom:loaded", function() {
	//decorateSlideshow();
	decorateSlideshow2();
	decorateSlideshow_moreview();
});

// }}}

})();

/**
 * Javascript library for template ExtremeMagento
 * @copyright 2007 Quick Solution LTD. All rights reserved.
 * @author Giao L. Trinh <giao.trinh@quicksolutiongroup.com>
 */

(function() {
	
// EM.tools {{{
	
if (typeof BLANK_IMG == 'undefined') 
	var BLANK_IMG = '';
if (typeof BASE_URL == 'undefined') 
	BASE_URL = '';

// declare namespace() method
String.prototype.namespace = function(separator) {
  this.split(separator || '.').inject(window, function(parent, child) {
    var o = parent[child] = { }; return o;
  });
};


'EM.tools'.namespace();


function decorateNav() {
	var baseurl = BASE_URL.replace(/index.php\/?/, '');
	//console.debug("BaseURL: ", baseurl);
	var url = window.location.href.replace(baseurl, '').replace(/^\/?(index.php)?\/?/, '');
	var isHome = url == '';
	//console.debug("isHome: ", isHome);
	var nav = $('nav_top');
	nav.select('a').each(function(a) {
		var href = a.getAttribute('href').replace(baseurl, '').replace(/^\/?(index.php)?\/?/, '').replace(/\?(.*)$/, '').replace(/#(.*)$/, '').replace('.html', '');
		var isHomeLink = href == '';
		//console.debug("href: ", href);
		//console.debug("isHomeLink: ", isHomeLink);
		
		if (isHome && isHomeLink || url.substr(0, href.length) == href && !isHome && !isHomeLink) {
			var el = a;
			while (el != nav) {
				if (el.tagName == 'A' || el.tagName == 'LI')
					Element.addClassName(el, 'active');
				el = el.parentNode;
			}
		}
	});
	
}
	
document.observe('dom:loaded', function() {		
	function main() {
		decorateNav();
	}
	
	// work around dom:loaded bug on IE8
	if (Prototype.Browser.IE && Prototype.Version < '1.6.1')
		window.setTimeout(main, 100);
	else
		main();
});


})();
