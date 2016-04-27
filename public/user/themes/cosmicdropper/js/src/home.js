import { $, $$, isVisible, wrapTextInElement, debounce, addClassStaggered } from './utils';
import Vivus from 'vivus';
import imagesLoaded from 'imagesloaded';

const introAnimations = (() => {
	const components = {
		homeHero: $('.home-hero'),
		graphicSrc: '/images/home-music-cover.jpg',
		logoSVG: $('#header-logo'),
		musicCover: $('.home-hero__music-img'),
		musicTitle: $('.home-hero__music-title'),
		musicLinks: $$('.home-hero__music-link'),
		overlay: $('.site-header__overlay')
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

	const loadGraphic = () => {
		const imgLoad = imagesLoaded(components.homeHero);
		imgLoad.on('always', (instance) => {
			graphicLoaded = true;
		});
	};

	const revealElements = () => {
		const title = document.querySelectorAll('.home-hero__music-title span');
		if (graphicLoaded) {
			setTimeout(() => {
				setTimeout(() => {
					addClassStaggered(title, 'active', 25);
					addClassStaggered(components.musicLinks, 'home-hero__music-link--loaded', 25);
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
		wrapTextInElement(components.musicTitle, 'span');
		loadGraphic();
		positionLogo();
		revealElements();
	};

	return {
		init
	};
})();

const home = (() => {
	const init = () => {
		introAnimations.init();
	};

	return {
		init
	};
})();

export default home;
