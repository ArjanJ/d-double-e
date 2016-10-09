import home from './home';
import nav from './nav';
import bio from './bio';
import shows from './events';
import music from './music';

document.addEventListener('DOMContentLoaded', () => {
	home.init();
	nav.init();
	bio.init();
	shows.init();
	music.init();
});
