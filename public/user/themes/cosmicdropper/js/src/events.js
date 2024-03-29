import { $ } from './utils';
import fetchJsonp from 'fetch-jsonp';

const config = {
	key: 'Ejvx2W884fRJxrSV',
	id: '607727',
	baseUrl: 'http://api.songkick.com/api/3.0',
};

const shows = (() => {
	const state = {
		events: [],
		isFetching: false,
	};

	const setState = newState => {
		Object.assign(state, newState);
		mount();
	};

	const components = {
		wrapper: $('.home-events__list'),
		heading: $('.home-events__heading'),
	};

	window.jsonpcallback = json => {
		const events = json.resultsPage.results.event;
		if (events) {
			getEventsSuccess(events);
		} else {
			getEventsFailure();
		}
	};

	function getEventsRequest() {
		setState({
			isFetching: true,
		});
	}

	function getEventsSuccess(events) {
		setState({
			isFetching: false,
			events,
		});
	}

	function getEventsFailure(error) {
		components.heading.innerHTML = 'No upcoming shows';
	}

	function getEvents() {
		getEventsRequest();

		const { baseUrl, key, id } = config;
		const url = `${baseUrl}/artists/${id}/calendar.json?apikey=${key}&jsoncallback=jsonpcallback`;

		return fetchJsonp(url)
			// .then(r => console.log(r));
			.then(response => {
				console.log(response);
				if (response.ok) {
					return response.json();
				} else {
					// getEventsFailure();
				}
			})
			.catch(error => console.log(error));
	}

	function render() {
		return (
			`${state.events.map(event => `<li>
				<a href="${event.uri}" target="_blank" class="home-events-item">
					<div class="home-events-item__date">
						<span class="home-events-item__date-txt">${new Date(event.start.datetime).toDateString().replace(/\d{4}$/g, '').trim()}</span>
					</div>
					<div class="home-events-item__about">
						<h2 class="home-events-item__about-name">${event.displayName}</h2>
						<h3 class="home-events-item__about-venue">
							<span>${event.venue.displayName}</span>
						</h3>
						<h3 class="home-events-item__about-location">
							<span>${event.location.city}</span>
						</h3>
					</div>
					<div class="home-events-item__buy">
						<span class="home-events-item__buy-btn">Tickets</span>
					</div>
				</a>
			</li>`).join('')}`
		);
	}

	function mount() {
		const { wrapper } = components;
		wrapper.innerHTML = render();
	}

	function init () {
		if ($('main').classList.contains('Home') || $('main').classList.contains('Shows')) {
			mount();
			getEvents();
		}
	}

	return {
		init,
	};
})();

export default shows;
