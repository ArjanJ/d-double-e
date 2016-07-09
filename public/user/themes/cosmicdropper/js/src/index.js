import home from './home';
import nav from './nav';
import bio from './bio';
import shows from './events';

document.addEventListener('DOMContentLoaded', () => {
	home.init();
	nav.init();
	bio.init();
	shows.init();
});
