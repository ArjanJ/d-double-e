(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, "__esModule", {
	value: true
});

var _utils = require('./utils');

var bio = function () {
	var components = {
		left: (0, _utils.$)('.bio__fixed-bg-left'),
		right: (0, _utils.$)('.bio__fixed-bg-right')
	};

	var animation = function animation() {
		var scrolled = window.pageYOffset;
		var translateY = scrolled / 1.5;
		var left = components.left;
		var right = components.right;


		left.style.transform = 'translateY(' + scrolled / 3.5 + 'px)';
		left.style.opacity = 1 - scrolled / 600;
		right.style.transform = 'translateY(' + scrolled / 1.5 + 'px)';
		right.style.opacity = 1 - scrolled / 750;
	};

	var handleScroll = function handleScroll() {
		window.requestAnimationFrame(animation);
	};

	var init = function init() {
		if ((0, _utils.$)('main').classList.contains('Bio')) {
			// window.addEventListener('scroll', handleScroll);
		}
	};

	return {
		init: init
	};
}();

exports.default = bio;

},{"./utils":7}],2:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, "__esModule", {
	value: true
});

var _utils = require('./utils');

var _fetchJsonp = require('fetch-jsonp');

var _fetchJsonp2 = _interopRequireDefault(_fetchJsonp);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var config = {
	key: 'Ejvx2W884fRJxrSV',
	id: '607727',
	baseUrl: 'http://api.songkick.com/api/3.0'
};

var shows = function () {
	var state = {
		events: [],
		isFetching: false
	};

	var setState = function setState(newState) {
		Object.assign(state, newState);
		mount();
	};

	var components = {
		wrapper: (0, _utils.$)('.home-events__list'),
		heading: (0, _utils.$)('.home-events__heading')
	};

	window.jsonpcallback = function (json) {
		var events = json.resultsPage.results.event;
		if (events) {
			getEventsSuccess(events);
		} else {
			getEventsFailure();
		}
	};

	function getEventsRequest() {
		setState({
			isFetching: true
		});
	}

	function getEventsSuccess(events) {
		setState({
			isFetching: false,
			events: events
		});
	}

	function getEventsFailure(error) {
		components.heading.innerHTML = 'No upcoming shows';
	}

	function getEvents() {
		getEventsRequest();

		var baseUrl = config.baseUrl;
		var key = config.key;
		var id = config.id;

		var url = baseUrl + '/artists/' + id + '/calendar.json?apikey=' + key + '&jsoncallback=jsonpcallback';

		return (0, _fetchJsonp2.default)(url)
		// .then(r => console.log(r));
		.then(function (response) {
			console.log(response);
			if (response.ok) {
				return response.json();
			} else {
				// getEventsFailure();
			}
		}).catch(function (error) {
			return console.log(error);
		});
	}

	function render() {
		return '' + state.events.map(function (event) {
			return '<li>\n\t\t\t\t<a href="' + event.uri + '" target="_blank" class="home-events-item">\n\t\t\t\t\t<div class="home-events-item__date">\n\t\t\t\t\t\t<span class="home-events-item__date-txt">' + new Date(event.start.datetime).toDateString().replace(/\d{4}$/g, '').trim() + '</span>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class="home-events-item__about">\n\t\t\t\t\t\t<h2 class="home-events-item__about-name">' + event.displayName + '</h2>\n\t\t\t\t\t\t<h3 class="home-events-item__about-venue">\n\t\t\t\t\t\t\t<span>' + event.venue.displayName + '</span>\n\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t<h3 class="home-events-item__about-location">\n\t\t\t\t\t\t\t<span>' + event.location.city + '</span>\n\t\t\t\t\t\t</h3>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class="home-events-item__buy">\n\t\t\t\t\t\t<span class="home-events-item__buy-btn">Tickets</span>\n\t\t\t\t\t</div>\n\t\t\t\t</a>\n\t\t\t</li>';
		}).join('');
	}

	function mount() {
		var wrapper = components.wrapper;

		wrapper.innerHTML = render();
	}

	function init() {
		if ((0, _utils.$)('main').classList.contains('Home') || (0, _utils.$)('main').classList.contains('Shows')) {
			mount();
			getEvents();
		}
	}

	return {
		init: init
	};
}();

exports.default = shows;

},{"./utils":7,"fetch-jsonp":9}],3:[function(require,module,exports){
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
		logoSVG: (0, _utils.$)('#header-logo'),
		musicCover: (0, _utils.$)('.home-hero__music-img'),
		musicTitle: (0, _utils.$)('.home-hero__music-title'),
		musicLinks: (0, _utils.$$)('.home-hero__music-link'),
		overlay: (0, _utils.$)('.site-header__overlay')
	};

	var cssClasses = {
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
		var title = (0, _utils.$$)('.home-hero__music-title span');
		if (graphicLoaded) {
			setTimeout(function () {
				setTimeout(function () {
					(0, _utils.addClassStaggered)(title, 'active', 25);
					(0, _utils.addClassStaggered)(components.musicLinks, 'home-hero__music-link--loaded', 25);
				}, 600);

				components.logoSVG.classList.add('loaded');
				components.logoSVG.removeAttribute('style');
				components.overlay.classList.add(cssClasses.overlayHide);
				components.musicCover.classList.add(cssClasses.musicCoverLoaded);
			}, 700);
		} else {
			setTimeout(revealElements, 250);
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

var homeHeroScroll = function () {
	var components = {
		bg: (0, _utils.$)('.home-hero__fixed-bg'),
		content: (0, _utils.$)('.home-hero__music'),
		news: (0, _utils.$)('.home-news__list'),
		hero: (0, _utils.$)('.home-hero')
	};

	var animation = function animation() {
		var scrolled = window.pageYOffset;
		var content = components.content;
		var news = components.news;
		var bg = components.bg;
		var hero = components.hero;

		var translateY = scrolled / 2;

		content.style.transform = 'translateY(' + translateY + 'px)';

		if (scrolled > hero.offsetHeight + 100 && !news.classList.contains('home-hero__fixed-bg--green')) {
			bg.classList.add('home-hero__fixed-bg--green');
		}

		if (scrolled < hero.offsetHeight - 100 && bg.classList.contains('home-hero__fixed-bg--green')) {
			bg.classList.remove('home-hero__fixed-bg--green');
		}
	};

	var handleScroll = function handleScroll() {
		window.requestAnimationFrame(animation);
	};

	var init = function init() {
		window.addEventListener('scroll', handleScroll);
	};

	return {
		init: init
	};
}();

var home = function () {
	var init = function init() {
		if ((0, _utils.$)('main').classList.contains('Home')) {
			homeHeroScroll.init();
			introAnimations.init();
		} else {
			(0, _utils.$)('.site-header__overlay').remove();
			(0, _utils.$)('#header-logo').classList.add('loaded');
		}
	};

	return {
		init: init
	};
}();

exports.default = home;

},{"./utils":7,"imagesloaded":10}],4:[function(require,module,exports){
'use strict';

var _home = require('./home');

var _home2 = _interopRequireDefault(_home);

var _nav = require('./nav');

var _nav2 = _interopRequireDefault(_nav);

var _bio = require('./bio');

var _bio2 = _interopRequireDefault(_bio);

var _events = require('./events');

var _events2 = _interopRequireDefault(_events);

var _music = require('./music');

var _music2 = _interopRequireDefault(_music);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

document.addEventListener('DOMContentLoaded', function () {
	_home2.default.init();
	_nav2.default.init();
	_bio2.default.init();
	_events2.default.init();
	_music2.default.init();
});

},{"./bio":1,"./events":2,"./home":3,"./music":5,"./nav":6}],5:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _utils = require('./utils');

var Music = function () {
  var endpoint = 'https://api.spotify.com/v1/artists/6bwkMlweHsBCpI2a0C5nnN/albums';

  var state = {
    music: [],
    isFetching: false
  };

  var setState = function setState(newState) {
    Object.assign(state, newState);
    mount();
  };

  var components = {
    wrapper: (0, _utils.$)('.music-list')
  };

  function getMusicRequest() {
    setState({
      isFetching: true
    });
  }

  function getMusicSuccess(data) {
    setState({
      isFetching: false,
      music: data.items
    });
  }

  function getMusicFailure(err) {
    console.log(err);
  }

  function getMusic() {
    getMusicRequest();

    return fetch(endpoint).then(function (response) {
      if (response.ok) {
        return response.json();
      } else {
        throw new Error('you done fucked up nah');
      }
    }).then(function (response) {
      return getMusicSuccess(response);
    }).catch(function (err) {
      return getMusicFailure(err);
    });
  }

  function render() {
    var blacklist = ['Honey', 'Konnichiwa', '360º / The Cloud 9 LP'];
    var flags = ['Radio Edit', 'Remixes'];
    var seen = {};
    var filteredMusic = state.music.filter(function (item) {
      var hasFlag = flags.map(function (f) {
        return item.name.indexOf(f) > -1 ? 'yes' : 'no';
      });
      var isDuplicate = seen.hasOwnProperty(item.name) ? true : seen[item.name] = false;
      console.log(isDuplicate);
      if (blacklist.includes(item.name) || hasFlag.includes('yes') || isDuplicate) {
        return false;
      } else {
        return item;
      }
    });

    return '' + filteredMusic.map(function (item) {
      return '<li class="music-item">\n              <a href=' + item.external_urls.spotify + ' target="_blank">\n                <img src=' + item.images[0].url + ' width=' + item.images[0].width + ' height=' + item.images[0].height + ' />\n                <p>' + item.name + '</p>\n              </a>\n            </li>';
    }).join('');
  }

  function mount() {
    var wrapper = components.wrapper;

    wrapper.innerHTML = render();
  }

  function init() {
    if ((0, _utils.$)('main').classList.contains('Music')) {
      mount();
      getMusic();
    }
  }

  return {
    init: init
  };
}();

exports.default = Music;

},{"./utils":7}],6:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, "__esModule", {
	value: true
});

var _utils = require('./utils');

var nav = function () {
	var components = {
		nav: (0, _utils.$)('.site-nav'),
		navItems: (0, _utils.$$)('.site-nav__item'),
		hamburger: (0, _utils.$)('.site-header__hamburger button.c-hamburger')
	};

	var cssClasses = {
		navActive: 'site-nav--active',
		navItemActive: 'site-nav__item--active',
		hamburgerActive: 'c-hamburger--active'
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

},{"./utils":7}],7:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, "__esModule", {
	value: true
});
exports.$ = $;
exports.$$ = $$;
exports.isVisible = isVisible;
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
	var elementString = element ? element.innerHTML : null;
	var lettersArray = [];
	var wordsArray = [];

	init();

	function init() {
		if (elementString) {
			createLettersArray(elementString);
			createWordArrays(lettersArray);
			element.innerHTML = wrapLetters(wrapper);
		}
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

},{}],8:[function(require,module,exports){
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

},{}],9:[function(require,module,exports){
(function (global, factory) {
  if (typeof define === 'function' && define.amd) {
    define(['exports', 'module'], factory);
  } else if (typeof exports !== 'undefined' && typeof module !== 'undefined') {
    factory(exports, module);
  } else {
    var mod = {
      exports: {}
    };
    factory(mod.exports, mod);
    global.fetchJsonp = mod.exports;
  }
})(this, function (exports, module) {
  'use strict';

  var defaultOptions = {
    timeout: 5000,
    jsonpCallback: 'callback',
    jsonpCallbackFunction: null
  };

  function generateCallbackFunction() {
    return 'jsonp_' + Date.now() + '_' + Math.ceil(Math.random() * 100000);
  }

  // Known issue: Will throw 'Uncaught ReferenceError: callback_*** is not defined' error if request timeout
  function clearFunction(functionName) {
    // IE8 throws an exception when you try to delete a property on window
    // http://stackoverflow.com/a/1824228/751089
    try {
      delete window[functionName];
    } catch (e) {
      window[functionName] = undefined;
    }
  }

  function removeScript(scriptId) {
    var script = document.getElementById(scriptId);
    document.getElementsByTagName('head')[0].removeChild(script);
  }

  var fetchJsonp = function fetchJsonp(url) {
    var options = arguments[1] === undefined ? {} : arguments[1];

    var timeout = options.timeout != null ? options.timeout : defaultOptions.timeout;
    var jsonpCallback = options.jsonpCallback != null ? options.jsonpCallback : defaultOptions.jsonpCallback;

    var timeoutId = undefined;

    return new Promise(function (resolve, reject) {
      var callbackFunction = options.jsonpCallbackFunction || generateCallbackFunction();

      window[callbackFunction] = function (response) {
        resolve({
          ok: true,
          // keep consistent with fetch API
          json: function json() {
            return Promise.resolve(response);
          }
        });

        if (timeoutId) clearTimeout(timeoutId);

        removeScript(jsonpCallback + '_' + callbackFunction);

        clearFunction(callbackFunction);
      };

      // Check if the user set their own params, and if not add a ? to start a list of params
      url += url.indexOf('?') === -1 ? '?' : '&';

      var jsonpScript = document.createElement('script');
      jsonpScript.setAttribute('src', url + jsonpCallback + '=' + callbackFunction);
      jsonpScript.id = jsonpCallback + '_' + callbackFunction;
      document.getElementsByTagName('head')[0].appendChild(jsonpScript);

      timeoutId = setTimeout(function () {
        reject(new Error('JSONP request to ' + url + ' timed out'));

        clearFunction(callbackFunction);
        removeScript(jsonpCallback + '_' + callbackFunction);
      }, timeout);
    });
  };

  // export as global function
  /*
  let local;
  if (typeof global !== 'undefined') {
    local = global;
  } else if (typeof self !== 'undefined') {
    local = self;
  } else {
    try {
      local = Function('return this')();
    } catch (e) {
      throw new Error('polyfill failed because global object is unavailable in this environment');
    }
  }
  
  local.fetchJsonp = fetchJsonp;
  */

  module.exports = fetchJsonp;
});
},{}],10:[function(require,module,exports){
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

},{"ev-emitter":8}]},{},[4])


//# sourceMappingURL=bundle.js.map
