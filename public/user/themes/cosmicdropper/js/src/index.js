import header from './header';
import home from './home';
import nav from './nav';
import bio from './bio';
import shows from './events';

document.addEventListener('DOMContentLoaded', () => {
	// header.init();
	home.init();
	nav.init();
	bio.init();
	shows.init();
});
