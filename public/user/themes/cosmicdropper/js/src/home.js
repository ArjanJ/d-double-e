import { $, $$, isVisible, wrapTextInElement, debounce, addClassStaggered } from './utils';
import imagesLoaded from 'imagesloaded';

const introAnimations = (() => {
	const components = {
		homeHero: $('.home-hero'),
		logoSVG: $('#header-logo'),
		musicCover: $('.home-hero__content img'),
		musicTitle: $('.home-hero__music-title'),
		musicLinks: $$('.home-hero__music-link'),
		overlay: $('.site-header__overlay')
	};

	const cssClasses = {
		overlayHide: 'site-header__overlay--hide',
		musicCoverLoaded: 'home-hero__music-img--loaded'
	};

	let graphicLoaded = false;

	const loadGraphic = () => {
		const imgLoad = imagesLoaded(components.homeHero, { background: true });
		imgLoad.on('always', (instance) => {
			graphicLoaded = true;
		});
	};

	const revealElements = () => {
		const title = $$('.home-hero__music-title span');
		if (graphicLoaded) {
			setTimeout(() => {
				setTimeout(() => {
					addClassStaggered(title, 'active', 25);
					addClassStaggered(components.musicLinks, 'home-hero__music-link--loaded', 25);
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

const homeHeroScroll = (() => {
	const components = {
		bg: $('.home-hero__fixed-bg'),
		content: $('.home-hero__music'),
		news: $('.home-news__list'),
		hero: $('.home-hero')
	};

	const animation = () => {
		const scrolled = window.pageYOffset;
		const { content, news, bg, hero } = components;
		const translateY = scrolled / 2;

		content.style.transform = `translateY(${translateY}px)`;

		if (scrolled > hero.offsetHeight + 100 && !news.classList.contains('home-hero__fixed-bg--green')) {
			bg.classList.add('home-hero__fixed-bg--green');
		}

		if (scrolled < hero.offsetHeight - 100 && bg.classList.contains('home-hero__fixed-bg--green')) {
			bg.classList.remove('home-hero__fixed-bg--green');
		}
	}

	const handleScroll = () => {
		window.requestAnimationFrame(animation);
	};

	const init = () => {
		window.addEventListener('scroll', handleScroll);
	};

	return {
		init
	};
})();

const home = (() => {
	const init = () => {
		if ($('main').classList.contains('Home')) {
			homeHeroScroll.init();
			introAnimations.init();
		} else {
			$('.site-header__overlay').remove();
			$('#header-logo').classList.add('loaded');
		}
	};

	return {
		init
	};
})();

export default home;
