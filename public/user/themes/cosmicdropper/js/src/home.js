import { $, $$, isVisible, wrapTextInElement, debounce, addClassStaggered } from './utils';
import Vivus from 'vivus';
import imagesLoaded from 'imagesloaded';

const introAnimations = (() => {
	const components = {
		homeHero: $('.home-hero'),
		// graphic: $('.home-hero__img-img'),
		graphicSrc: '/images/home-music-cover.jpg',
		// backgroundSVG: $('.home-hero__bg'),
		// backgroundCamo: $('.home-hero__bg--camo'),
		logoSVG: $('#header-logo'),
		musicCover: $('.home-hero__music-img'),
		musicTitle: $('.home-hero__music-title'),
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

	// const onGraphicLoadSuccess = () => {
	// 	graphicLoaded = true;
	// };

	// const onGraphicLoadFail = () => {
	// 	console.error('Graphic failed to load.');
	// };

	const loadGraphic = () => {
		const imgLoad = imagesLoaded(components.homeHero);
		imgLoad.on('always', (instance) => {
			graphicLoaded = true;
		});
	};

	const logoSVGAnimationComplete = () => {
		const title = document.querySelectorAll('.home-hero__music-title span');
		if (graphicLoaded) {
			setTimeout(() => addClassStaggered(title, 'active', 25), 250);
			
			components.logoSVG.classList.add('loaded');
			components.logoSVG.removeAttribute('style');
			components.overlay.classList.add(cssClasses.overlayHide);
			components.musicCover.classList.add(cssClasses.musicCoverLoaded);
		} else {
			setTimeout(logoSVGAnimationComplete, 500);
		}
	};

	// const logoSVGAnimation = () => {
	// 	new Vivus(components.logoSVG.id, {
	// 		duration: 250,
	// 		type: 'async',
	// 		animTimingFunction: Vivus.EASE_OUT
	// 	}, () => {
	// 		logoSVGAnimationComplete();
	// 	});
	// };

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
		// logoSVGAnimation();
		wrapTextInElement(components.musicTitle, 'span');
		loadGraphic();
		positionLogo();
		logoSVGAnimationComplete();
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
