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

export function imageLoaded(src, success, failed) {
	const image = new Image();
	image.src = src;

	image.onload = () => success(image);

	image.onerror = (error) => failed(error);
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
