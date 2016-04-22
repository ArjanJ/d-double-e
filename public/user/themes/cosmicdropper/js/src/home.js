import { $, $$, isVisible, imageLoaded } from './utils';
import Vivus from 'vivus';

const introAnimations = (() => {
	const components = {
		graphic: $('.home-hero__img-img'),
		graphicSrc: '/images/d-double-e-home.svg',
		backgroundSVG: $('.home-hero__bg'),
		backgroundCamo: $('.home-hero__bg--camo'),
		logoSVG: $('#homeLogo1'),
		logoSVG2: $('#homeLogo2'),
		logoSVGContainer: $('.home-hero__svgs')
	};

	const cssClasses = {
		graphicActive: 'home-hero__img-img--active',
		backgroundSVGActive: 'home-hero__bg--active',
		logoSVGActive: 'active',
		logoSVGContainerActive: 'home-hero__svgs--active'
	};

	let graphicLoaded = false;

	const onGraphicLoadSuccess = () => {
		graphicLoaded = true;
	};

	const onGraphicLoadFail = () => {
		console.error('Graphic failed to load.');
	};

	const loadGraphic = () => {
		imageLoaded(components.graphicSrc, onGraphicLoadSuccess, onGraphicLoadFail);
	};

	const logoSVGAnimationComplete = () => {
		const { graphic, backgroundSVG, backgroundCamo, logoSVG, logoSVG2, logoSVGContainer } = components;
		const { graphicActive, backgroundSVGActive, logoSVGActive, logoSVGContainerActive } = cssClasses;

		if (graphicLoaded) {
			graphic.classList.add(graphicActive);
			backgroundSVG.classList.add(backgroundSVGActive);
			backgroundCamo.classList.add(backgroundSVGActive);
			logoSVGContainer.classList.add(logoSVGContainerActive);
			logoSVG.classList.add(logoSVGActive);
			logoSVG2.classList.add(logoSVGActive);
		} else {
			setTimeout(logoSVGAnimationComplete, 500);
		}
	}

	const logoSVGAnimation = () => {
		new Vivus(components.logoSVG.id, {
			duration: 250,
			type: 'async',
			animTimingFunction: Vivus.EASE_OUT
		}, () => {
			logoSVGAnimationComplete();
		});
	};

	const init = () => {
		logoSVGAnimation();
		loadGraphic();
	};

	return {
		init
	};
})();

const animatePaintDrips = (() => {
	const components = {
		paths: $$('#paint-drips path')
	};

	const cssClasses = {
		pathActive: 'path-active'
	};

	const animatePaths = () => {
		const { paths } = components;
		const { pathActive } = cssClasses;
		paths.forEach((path) => {
			if (isVisible(path, -800)) {
				path.classList.add(pathActive);
			}
		});
	}

	const init = () => {
		animatePaths();
	};

	return {
		init
	};
})();

const home = (() => {
	const init = () => {
		animatePaintDrips.init();
		introAnimations.init();
	};

	return {
		init
	};
})();

export default home;
