(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, "__esModule", {
	value: true
});

var _utils = require('./utils');

var header = function (window, document, undefined) {
	var components = {
		header: (0, _utils.$)('header.site-header'),
		nav: (0, _utils.$)('nav.site-nav')
	};

	var cssClasses = {
		headerActive: 'site-header--scrolled',
		navActive: 'site-nav--scrolled'
	};

	var scrollTarget = window.innerHeight - 300;

	var init = function init() {
		window.addEventListener('scroll', handleScroll);
	};

	var handleScroll = function handleScroll() {
		var scrolled = window.pageYOffset;
		var header = components.header;
		var nav = components.nav;
		var headerActive = cssClasses.headerActive;
		var navActive = cssClasses.navActive;


		if (scrolled >= scrollTarget && !header.classList.contains(headerActive)) {
			header.classList.add(headerActive);
			nav.classList.add(navActive);
		}

		if (scrolled < scrollTarget && header.classList.contains(headerActive)) {
			header.classList.remove(headerActive);
			nav.classList.remove(navActive);
		}
	};

	return {
		init: init
	};
}(window, document);

exports.default = header;

},{"./utils":5}],2:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, "__esModule", {
	value: true
});

var _utils = require('./utils');

var _imagesloaded = require('imagesloaded');

var _imagesloaded2 = _interopRequireDefault(_imagesloaded);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var introAnimations = function () {
	var components = {
		homeHero: (0, _utils.$)('.home-hero'),
		graphicSrc: '/images/home-music-cover.jpg',
		logoSVG: (0, _utils.$)('#header-logo'),
		musicCover: (0, _utils.$)('.home-hero__music-img'),
		musicTitle: (0, _utils.$)('.home-hero__music-title'),
		musicLinks: (0, _utils.$$)('.home-hero__music-link'),
		overlay: (0, _utils.$)('.site-header__overlay')
	};

	var cssClasses = {
		graphicActive: 'home-hero__img-img--active',
		backgroundSVGActive: 'home-hero__bg--active',
		logoSVGActive: 'active',
		logoSVGContainerActive: 'home-hero__svgs--active',
		headerActive: 'site-header--active',
		spotifyBtnActive: 'home-hero__spotify--active',
		paintDripsActive: 'home-hero__paint-drips--show',
		overlayHide: 'site-header__overlay--hide',
		musicCoverLoaded: 'home-hero__music-img--loaded'
	};

	var graphicLoaded = false;

	var loadGraphic = function loadGraphic() {
		var imgLoad = (0, _imagesloaded2.default)(components.homeHero, { background: true });
		imgLoad.on('always', function (instance) {
			graphicLoaded = true;
		});
	};

	var revealElements = function revealElements() {
		var title = document.querySelectorAll('.home-hero__music-title span');
		if (graphicLoaded) {
			setTimeout(function () {
				setTimeout(function () {
					(0, _utils.addClassStaggered)(title, 'active', 25);
					(0, _utils.addClassStaggered)(components.musicLinks, 'home-hero__music-link--loaded', 25);
				}, 300);

				components.logoSVG.classList.add('loaded');
				components.logoSVG.removeAttribute('style');
				components.overlay.classList.add(cssClasses.overlayHide);
				components.musicCover.classList.add(cssClasses.musicCoverLoaded);
			}, 1200);
		} else {
			setTimeout(revealElements, 500);
		}
	};

	var positionLogo = function positionLogo() {
		var ww = window.innerWidth;
		var wh = window.innerHeight;
		var logoSVG = components.logoSVG;

		var logoSVGOffset = logoSVG.getBoundingClientRect();

		var translateX = Math.round(Math.abs(logoSVGOffset.left + logoSVGOffset.width / 2 - ww / 2));
		var translateY = Math.round(Math.abs(logoSVGOffset.top + logoSVGOffset.height / 2 - wh / 2));

		logoSVG.style.opacity = '1';
		logoSVG.style.transform = 'translate(' + translateX + 'px, ' + translateY + 'px)';
	};

	var init = function init() {
		(0, _utils.wrapTextInElement)(components.musicTitle, 'span');
		loadGraphic();
		positionLogo();
		revealElements();
	};

	return {
		init: init
	};
}();

var home = function () {
	var init = function init() {
		introAnimations.init();
	};

	return {
		init: init
	};
}();

exports.default = home;

},{"./utils":5,"imagesloaded":7}],3:[function(require,module,exports){
'use strict';

var _header = require('./header');

var _header2 = _interopRequireDefault(_header);

var _home = require('./home');

var _home2 = _interopRequireDefault(_home);

var _nav = require('./nav');

var _nav2 = _interopRequireDefault(_nav);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

document.addEventListener('DOMContentLoaded', function () {
	_header2.default.init();
	_home2.default.init();
	_nav2.default.init();
});

},{"./header":1,"./home":2,"./nav":4}],4:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, "__esModule", {
	value: true
});

var _utils = require('./utils');

var nav = function () {
	var components = {
		nav: (0, _utils.$)('.site-nav'),
		navItems: (0, _utils.$$)('.site-nav__item'),
		hamburger: (0, _utils.$)('.site-header__hamburger button.c-hamburger'),
		main: (0, _utils.$)('.site-main')
	};

	var cssClasses = {
		navActive: 'site-nav--active',
		navItemActive: 'site-nav__item--active',
		hamburgerActive: 'c-hamburger--active',
		mainActive: 'site-main--active'
	};

	var toggleNav = function toggleNav(event) {
		event.stopPropagation();
		event.preventDefault();

		var nav = components.nav;
		var navItems = components.navItems;
		var hamburger = components.hamburger;
		var main = components.main;
		var navActive = cssClasses.navActive;
		var navItemActive = cssClasses.navItemActive;
		var hamburgerActive = cssClasses.hamburgerActive;
		var mainActive = cssClasses.mainActive;


		nav.classList.toggle(navActive);
		hamburger.classList.toggle(hamburgerActive);
		main.classList.toggle(mainActive);

		setTimeout(function () {
			navItems.forEach(function (item) {
				return item.classList.toggle(navItemActive);
			});
		}, 150);

		if (nav.classList.contains(navActive)) {
			document.addEventListener('click', closeNav);
		}
	};

	var closeNav = function closeNav() {
		var nav = components.nav;
		var navItems = components.navItems;
		var hamburger = components.hamburger;
		var main = components.main;
		var navActive = cssClasses.navActive;
		var navItemActive = cssClasses.navItemActive;
		var hamburgerActive = cssClasses.hamburgerActive;
		var mainActive = cssClasses.mainActive;


		nav.classList.remove(navActive);
		hamburger.classList.remove(hamburgerActive);
		main.classList.remove(mainActive);
		navItems.forEach(function (item) {
			return item.classList.remove(navItemActive);
		});

		if (nav.classList.contains(navActive)) {
			document.removeEventListener('click', closeNav);
		}
	};

	var init = function init() {
		components.hamburger.addEventListener('click', toggleNav);
	};

	return {
		init: init
	};
}();

exports.default = nav;

},{"./utils":5}],5:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, "__esModule", {
	value: true
});
exports.$ = $;
exports.$$ = $$;
exports.isVisible = isVisible;
exports.imageLoaded = imageLoaded;
exports.debounce = debounce;
exports.wrapTextInElement = wrapTextInElement;
exports.addClassStaggered = addClassStaggered;
function $(query) {
	return document.querySelector(query);
}

function $$(query) {
	return Array.from(document.querySelectorAll(query));
}

function isVisible(element) {
	var offset = arguments.length <= 1 || arguments[1] === undefined ? 0 : arguments[1];

	var elementOffset = element.getBoundingClientRect();
	var wh = window.innerHeight;
	var topVis = elementOffset.top >= 0 && elementOffset.top < wh - offset;
	var bottomVis = elementOffset.bottom > 0 && elementOffset.bottom <= wh - offset;

	if (topVis || bottomVis) {
		return true;
	} else {
		return false;
	}
}

function imageLoaded(src, success, failed) {
	var image = new Image();
	image.src = src;

	image.onload = function () {
		return success(image);
	};

	image.onerror = function (error) {
		return failed(error);
	};
}

function debounce(func, wait, immediate) {
	var timeout;
	return function () {
		var context = this,
		    args = arguments;
		var later = function later() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
}

function wrapTextInElement(element, wrapper) {
	// element = document.querySelector(element);
	var elementString = element.innerHTML;
	var lettersArray = [];
	var wordsArray = [];

	init();

	function init() {
		createLettersArray(elementString);
		createWordArrays(lettersArray);
		element.innerHTML = wrapLetters(wrapper);
	}

	function createLettersArray(str) {
		for (var i = 0; i < str.length; i++) {
			lettersArray.push(str[i]);
		}
	}

	function createWordArrays(arr) {
		var word = [];

		arr.forEach(function (letter, index) {
			if (letter !== ' ') {
				word.push(letter);
			} else {
				wordsArray.push(word);
				word = [];
			}

			if (index === arr.length - 1 && word.length > 0) {
				wordsArray.push(word);
				word = [];
			}
		});
	}

	function wrapLetters(el) {
		return wordsArray.map(function (word) {
			return word.map(function (letter) {
				return '<' + el + '>' + letter + '</' + el + '>';
			}).join('');
		}).join(' ');
	}
}

function addClassStaggered(elements, className, delay) {
	if (!elements || elements.length <= 1) return;

	animate(0);

	function animate(i) {
		return setTimeout(function () {
			if (elements[i]) {
				elements[i].classList.add(className);
				if (elements[i + 1]) animate(i + 1);
			} else {
				clearTimeout(animate(0));
			}
		}, delay);
	}
}

},{}],6:[function(require,module,exports){
/**
 * EvEmitter v1.0.2
 * Lil' event emitter
 * MIT License
 */

/* jshint unused: true, undef: true, strict: true */

( function( global, factory ) {
  // universal module definition
  /* jshint strict: false */ /* globals define, module */
  if ( typeof define == 'function' && define.amd ) {
    // AMD - RequireJS
    define( factory );
  } else if ( typeof module == 'object' && module.exports ) {
    // CommonJS - Browserify, Webpack
    module.exports = factory();
  } else {
    // Browser globals
    global.EvEmitter = factory();
  }

}( this, function() {

"use strict";

function EvEmitter() {}

var proto = EvEmitter.prototype;

proto.on = function( eventName, listener ) {
  if ( !eventName || !listener ) {
    return;
  }
  // set events hash
  var events = this._events = this._events || {};
  // set listeners array
  var listeners = events[ eventName ] = events[ eventName ] || [];
  // only add once
  if ( listeners.indexOf( listener ) == -1 ) {
    listeners.push( listener );
  }

  return this;
};

proto.once = function( eventName, listener ) {
  if ( !eventName || !listener ) {
    return;
  }
  // add event
  this.on( eventName, listener );
  // set once flag
  // set onceEvents hash
  var onceEvents = this._onceEvents = this._onceEvents || {};
  // set onceListeners object
  var onceListeners = onceEvents[ eventName ] = onceEvents[ eventName ] || {};
  // set flag
  onceListeners[ listener ] = true;

  return this;
};

proto.off = function( eventName, listener ) {
  var listeners = this._events && this._events[ eventName ];
  if ( !listeners || !listeners.length ) {
    return;
  }
  var index = listeners.indexOf( listener );
  if ( index != -1 ) {
    listeners.splice( index, 1 );
  }

  return this;
};

proto.emitEvent = function( eventName, args ) {
  var listeners = this._events && this._events[ eventName ];
  if ( !listeners || !listeners.length ) {
    return;
  }
  var i = 0;
  var listener = listeners[i];
  args = args || [];
  // once stuff
  var onceListeners = this._onceEvents && this._onceEvents[ eventName ];

  while ( listener ) {
    var isOnce = onceListeners && onceListeners[ listener ];
    if ( isOnce ) {
      // remove listener
      // remove before trigger to prevent recursion
      this.off( eventName, listener );
      // unset once flag
      delete onceListeners[ listener ];
    }
    // trigger listener
    listener.apply( this, args );
    // get next listener
    i += isOnce ? 0 : 1;
    listener = listeners[i];
  }

  return this;
};

return EvEmitter;

}));

},{}],7:[function(require,module,exports){
/*!
 * imagesLoaded v4.1.0
 * JavaScript is all like "You images are done yet or what?"
 * MIT License
 */

( function( window, factory ) { 'use strict';
  // universal module definition

  /*global define: false, module: false, require: false */

  if ( typeof define == 'function' && define.amd ) {
    // AMD
    define( [
      'ev-emitter/ev-emitter'
    ], function( EvEmitter ) {
      return factory( window, EvEmitter );
    });
  } else if ( typeof module == 'object' && module.exports ) {
    // CommonJS
    module.exports = factory(
      window,
      require('ev-emitter')
    );
  } else {
    // browser global
    window.imagesLoaded = factory(
      window,
      window.EvEmitter
    );
  }

})( window,

// --------------------------  factory -------------------------- //

function factory( window, EvEmitter ) {

'use strict';

var $ = window.jQuery;
var console = window.console;

// -------------------------- helpers -------------------------- //

// extend objects
function extend( a, b ) {
  for ( var prop in b ) {
    a[ prop ] = b[ prop ];
  }
  return a;
}

// turn element or nodeList into an array
function makeArray( obj ) {
  var ary = [];
  if ( Array.isArray( obj ) ) {
    // use object if already an array
    ary = obj;
  } else if ( typeof obj.length == 'number' ) {
    // convert nodeList to array
    for ( var i=0; i < obj.length; i++ ) {
      ary.push( obj[i] );
    }
  } else {
    // array of single index
    ary.push( obj );
  }
  return ary;
}

// -------------------------- imagesLoaded -------------------------- //

/**
 * @param {Array, Element, NodeList, String} elem
 * @param {Object or Function} options - if function, use as callback
 * @param {Function} onAlways - callback function
 */
function ImagesLoaded( elem, options, onAlways ) {
  // coerce ImagesLoaded() without new, to be new ImagesLoaded()
  if ( !( this instanceof ImagesLoaded ) ) {
    return new ImagesLoaded( elem, options, onAlways );
  }
  // use elem as selector string
  if ( typeof elem == 'string' ) {
    elem = document.querySelectorAll( elem );
  }

  this.elements = makeArray( elem );
  this.options = extend( {}, this.options );

  if ( typeof options == 'function' ) {
    onAlways = options;
  } else {
    extend( this.options, options );
  }

  if ( onAlways ) {
    this.on( 'always', onAlways );
  }

  this.getImages();

  if ( $ ) {
    // add jQuery Deferred object
    this.jqDeferred = new $.Deferred();
  }

  // HACK check async to allow time to bind listeners
  setTimeout( function() {
    this.check();
  }.bind( this ));
}

ImagesLoaded.prototype = Object.create( EvEmitter.prototype );

ImagesLoaded.prototype.options = {};

ImagesLoaded.prototype.getImages = function() {
  this.images = [];

  // filter & find items if we have an item selector
  this.elements.forEach( this.addElementImages, this );
};

/**
 * @param {Node} element
 */
ImagesLoaded.prototype.addElementImages = function( elem ) {
  // filter siblings
  if ( elem.nodeName == 'IMG' ) {
    this.addImage( elem );
  }
  // get background image on element
  if ( this.options.background === true ) {
    this.addElementBackgroundImages( elem );
  }

  // find children
  // no non-element nodes, #143
  var nodeType = elem.nodeType;
  if ( !nodeType || !elementNodeTypes[ nodeType ] ) {
    return;
  }
  var childImgs = elem.querySelectorAll('img');
  // concat childElems to filterFound array
  for ( var i=0; i < childImgs.length; i++ ) {
    var img = childImgs[i];
    this.addImage( img );
  }

  // get child background images
  if ( typeof this.options.background == 'string' ) {
    var children = elem.querySelectorAll( this.options.background );
    for ( i=0; i < children.length; i++ ) {
      var child = children[i];
      this.addElementBackgroundImages( child );
    }
  }
};

var elementNodeTypes = {
  1: true,
  9: true,
  11: true
};

ImagesLoaded.prototype.addElementBackgroundImages = function( elem ) {
  var style = getComputedStyle( elem );
  if ( !style ) {
    // Firefox returns null if in a hidden iframe https://bugzil.la/548397
    return;
  }
  // get url inside url("...")
  var reURL = /url\((['"])?(.*?)\1\)/gi;
  var matches = reURL.exec( style.backgroundImage );
  while ( matches !== null ) {
    var url = matches && matches[2];
    if ( url ) {
      this.addBackground( url, elem );
    }
    matches = reURL.exec( style.backgroundImage );
  }
};

/**
 * @param {Image} img
 */
ImagesLoaded.prototype.addImage = function( img ) {
  var loadingImage = new LoadingImage( img );
  this.images.push( loadingImage );
};

ImagesLoaded.prototype.addBackground = function( url, elem ) {
  var background = new Background( url, elem );
  this.images.push( background );
};

ImagesLoaded.prototype.check = function() {
  var _this = this;
  this.progressedCount = 0;
  this.hasAnyBroken = false;
  // complete if no images
  if ( !this.images.length ) {
    this.complete();
    return;
  }

  function onProgress( image, elem, message ) {
    // HACK - Chrome triggers event before object properties have changed. #83
    setTimeout( function() {
      _this.progress( image, elem, message );
    });
  }

  this.images.forEach( function( loadingImage ) {
    loadingImage.once( 'progress', onProgress );
    loadingImage.check();
  });
};

ImagesLoaded.prototype.progress = function( image, elem, message ) {
  this.progressedCount++;
  this.hasAnyBroken = this.hasAnyBroken || !image.isLoaded;
  // progress event
  this.emitEvent( 'progress', [ this, image, elem ] );
  if ( this.jqDeferred && this.jqDeferred.notify ) {
    this.jqDeferred.notify( this, image );
  }
  // check if completed
  if ( this.progressedCount == this.images.length ) {
    this.complete();
  }

  if ( this.options.debug && console ) {
    console.log( 'progress: ' + message, image, elem );
  }
};

ImagesLoaded.prototype.complete = function() {
  var eventName = this.hasAnyBroken ? 'fail' : 'done';
  this.isComplete = true;
  this.emitEvent( eventName, [ this ] );
  this.emitEvent( 'always', [ this ] );
  if ( this.jqDeferred ) {
    var jqMethod = this.hasAnyBroken ? 'reject' : 'resolve';
    this.jqDeferred[ jqMethod ]( this );
  }
};

// --------------------------  -------------------------- //

function LoadingImage( img ) {
  this.img = img;
}

LoadingImage.prototype = Object.create( EvEmitter.prototype );

LoadingImage.prototype.check = function() {
  // If complete is true and browser supports natural sizes,
  // try to check for image status manually.
  var isComplete = this.getIsImageComplete();
  if ( isComplete ) {
    // report based on naturalWidth
    this.confirm( this.img.naturalWidth !== 0, 'naturalWidth' );
    return;
  }

  // If none of the checks above matched, simulate loading on detached element.
  this.proxyImage = new Image();
  this.proxyImage.addEventListener( 'load', this );
  this.proxyImage.addEventListener( 'error', this );
  // bind to image as well for Firefox. #191
  this.img.addEventListener( 'load', this );
  this.img.addEventListener( 'error', this );
  this.proxyImage.src = this.img.src;
};

LoadingImage.prototype.getIsImageComplete = function() {
  return this.img.complete && this.img.naturalWidth !== undefined;
};

LoadingImage.prototype.confirm = function( isLoaded, message ) {
  this.isLoaded = isLoaded;
  this.emitEvent( 'progress', [ this, this.img, message ] );
};

// ----- events ----- //

// trigger specified handler for event type
LoadingImage.prototype.handleEvent = function( event ) {
  var method = 'on' + event.type;
  if ( this[ method ] ) {
    this[ method ]( event );
  }
};

LoadingImage.prototype.onload = function() {
  this.confirm( true, 'onload' );
  this.unbindEvents();
};

LoadingImage.prototype.onerror = function() {
  this.confirm( false, 'onerror' );
  this.unbindEvents();
};

LoadingImage.prototype.unbindEvents = function() {
  this.proxyImage.removeEventListener( 'load', this );
  this.proxyImage.removeEventListener( 'error', this );
  this.img.removeEventListener( 'load', this );
  this.img.removeEventListener( 'error', this );
};

// -------------------------- Background -------------------------- //

function Background( url, element ) {
  this.url = url;
  this.element = element;
  this.img = new Image();
}

// inherit LoadingImage prototype
Background.prototype = Object.create( LoadingImage.prototype );

Background.prototype.check = function() {
  this.img.addEventListener( 'load', this );
  this.img.addEventListener( 'error', this );
  this.img.src = this.url;
  // check if image is already complete
  var isComplete = this.getIsImageComplete();
  if ( isComplete ) {
    this.confirm( this.img.naturalWidth !== 0, 'naturalWidth' );
    this.unbindEvents();
  }
};

Background.prototype.unbindEvents = function() {
  this.img.removeEventListener( 'load', this );
  this.img.removeEventListener( 'error', this );
};

Background.prototype.confirm = function( isLoaded, message ) {
  this.isLoaded = isLoaded;
  this.emitEvent( 'progress', [ this, this.element, message ] );
};

// -------------------------- jQuery -------------------------- //

ImagesLoaded.makeJQueryPlugin = function( jQuery ) {
  jQuery = jQuery || window.jQuery;
  if ( !jQuery ) {
    return;
  }
  // set local variable
  $ = jQuery;
  // $().imagesLoaded()
  $.fn.imagesLoaded = function( options, callback ) {
    var instance = new ImagesLoaded( this, options, callback );
    return instance.jqDeferred.promise( $(this) );
  };
};
// try making plugin
ImagesLoaded.makeJQueryPlugin();

// --------------------------  -------------------------- //

return ImagesLoaded;

});

},{"ev-emitter":6}]},{},[3])


//# sourceMappingURL=bundle.js.map
