import { $, $$, isVisible, imageLoaded, debounce } from './utils';
import Vivus from 'vivus';

const introAnimations = (() => {
	const components = {
		// graphic: $('.home-hero__img-img'),
		graphicSrc: '/images/home-bg-1.jpg',
		// backgroundSVG: $('.home-hero__bg'),
		// backgroundCamo: $('.home-hero__bg--camo'),
		logoSVG: $('#header-logo'),
		musicCover: $('.home-hero__music-img'),
		// logoSVG2: $('#homeLogo2'),
		// logoSVGContainer: $('.home-hero__svgs'),
		header: $('header.site-header'),
		spotifyBtn: $('.home-hero__spotify'),
		overlay: $('.site-header__overlay')
		// paintDrips: $('.home-hero__paint-drips')
	};

	const cssClasses = {
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
		// const {
		// 	graphic,
		// 	backgroundSVG,
		// 	backgroundCamo,
		// 	logoSVG,
		// 	logoSVG2,
		// 	logoSVGContainer,
		// 	header,
		// 	spotifyBtn,
		// 	paintDrips
		// } = components;

		// const {
		// 	graphicActive,
		// 	backgroundSVGActive,
		// 	logoSVGActive,
		// 	logoSVGContainerActive,
		// 	headerActive,
		// 	spotifyBtnActive,
		// 	paintDripsActive
		// } = cssClasses;

		if (graphicLoaded) {
			components.logoSVG.classList.add('loaded');
			components.logoSVG.removeAttribute('style');
			components.overlay.classList.add(cssClasses.overlayHide);
			components.musicCover.classList.add(cssClasses.musicCoverLoaded);
			// graphic.classList.add(graphicActive);
			// backgroundSVG.classList.add(backgroundSVGActive);
			// backgroundCamo.classList.add(backgroundSVGActive);
			// logoSVGContainer.classList.add(logoSVGContainerActive);
			// logoSVG.classList.add(logoSVGActive);
			// logoSVG2.classList.add(logoSVGActive);
			// header.classList.add(headerActive);
			// spotifyBtn.classList.add(spotifyBtnActive);
			// paintDrips.classList.add(paintDripsActive);
		} else {
			setTimeout(logoSVGAnimationComplete, 500);
		}
	};

	const logoSVGAnimation = () => {
		new Vivus(components.logoSVG.id, {
			duration: 250,
			type: 'async',
			animTimingFunction: Vivus.EASE_OUT
		}, () => {
			logoSVGAnimationComplete();
		});
	};

	const positionLogo = () => {
		const ww = window.innerWidth;
		const wh = window.innerHeight;
		const { logoSVG } = components;
		const logoSVGOffset = logoSVG.getBoundingClientRect();

		const translateX = Math.round(Math.abs((logoSVGOffset.left + logoSVGOffset.width / 2) - ww / 2));
		const translateY = Math.round(Math.abs((logoSVGOffset.top + logoSVGOffset.height / 2) - wh / 2));

		logoSVG.style.opacity = '1';
		logoSVG.style.transform = `translate(${translateX}px, ${translateY}px)`;
	}

	const init = () => {
		logoSVGAnimation();
		loadGraphic();
		positionLogo();
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
		const scrolled = window.pageYOffset;

		if (scrolled > 150 && !paths[0].classList.contains(pathActive)) {
			paths.forEach((path) => {
				path.classList.add(pathActive);
			});

			window.removeEventListener('scroll', debounce(animatePaths, 10));
		}
	};

	const init = () => {
		window.addEventListener('scroll', debounce(animatePaths, 10));
	};

	return {
		init
	};
})();

const home = (() => {
	const init = () => {
		// animatePaintDrips.init();
		introAnimations.init();
	};

	return {
		init
	};
})();

export default home;
