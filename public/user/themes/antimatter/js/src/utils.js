export function $(query) {
	return document.querySelector(query);
}

export function $$(query) {
	return Array.from(document.querySelectorAll(query));
}

export function isVisible(element, offset = 0) {
	const elementOffset = element.getBoundingClientRect();
	const wh = window.innerHeight;
	const topVis = (elementOffset.top >= 0 && elementOffset.top < wh - offset);
	const bottomVis = (elementOffset.bottom > 0 && elementOffset.bottom <= wh - offset);

	if (topVis || bottomVis) {
		return true;
	} else {
		return false;
	}
}
export function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
}

export function wrapTextInElement(element, wrapper) {
	const elementString = element ? element.innerHTML : null;
	const lettersArray = [];
	const wordsArray = [];
	
	init();
	
	function init() {
		if (elementString) {
			createLettersArray(elementString);
			createWordArrays(lettersArray);
			element.innerHTML = wrapLetters(wrapper);
		}
	}
	
	function createLettersArray(str) {
		for (let i = 0; i < str.length; i++) {
			lettersArray.push(str[i]);
		}   
	}
	
	function createWordArrays(arr) {
		let word = [];
		
		arr.forEach(function(letter, index) {
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
		return wordsArray.map(function(word) {
			return word.map(function(letter) {
				return '<' + el + '>' + letter + '</' + el + '>';
			}).join('');
		}).join(' ');
	}
}

export function addClassStaggered(elements, className, delay) {
	if (!elements || elements.length <= 1) return; 
	  
  animate(0);
  
  function animate(i) {
    return setTimeout(function() {
      if (elements[i]) {
        elements[i].classList.add(className);
        if (elements[i+1]) animate(i+1);
      } else {
        clearTimeout(animate(0));
      }
   }, delay);
  }
}