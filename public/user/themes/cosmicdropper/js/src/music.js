import { $ } from './utils';

const Music = (() => {
  const endpoint = 'https://api.spotify.com/v1/artists/6bwkMlweHsBCpI2a0C5nnN/albums';

  const state = {
		music: [],
		isFetching: false,
	};

	const setState = newState => {
		Object.assign(state, newState);
		mount();
	};

  const components = {
		wrapper: $('.music-list'),
	};

  function getMusicRequest() {
		setState({
			isFetching: true,
		});
	}

  function getMusicSuccess(data) {
    setState({
			isFetching: false,
			music: data.items,
		});
  }

  function getMusicFailure(err) {
    console.log(err);
  }

  function getMusic() {
    getMusicRequest();

    return fetch(endpoint)
      .then(response => {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error('you done fucked up nah');
        }
      })
      .then(response => getMusicSuccess(response))
      .catch(err => getMusicFailure(err));
  }

  function render() {
    const blacklist = ['Honey', 'Konnichiwa', '360º / The Cloud 9 LP'];
    const flags = ['Radio Edit', 'Remixes'];
    const seen = {};
    const filteredMusic = state.music.filter(item => {
      const hasFlag = flags.map(f => item.name.indexOf(f) > -1 ? 'yes' : 'no');
      const isDuplicate = seen.hasOwnProperty(item.name) ? true : (seen[item.name] = false);
      console.log(isDuplicate);
      if (blacklist.includes(item.name) || hasFlag.includes('yes') || isDuplicate) {
        return false;
      } else {
        return item;
      }
    });

    return (
      `${filteredMusic.map(item => {
          return (
            `<li class="music-item">
              <a href=${item.external_urls.spotify} target="_blank">
                <img src=${item.images[0].url} width=${item.images[0].width} height=${item.images[0].height} />
                <p>${item.name}</p>
              </a>
            </li>`
          );
      }).join('')}`
    );
  }

  function mount() {
		const { wrapper } = components;
		wrapper.innerHTML = render();
	}

  function init() {
    if ($('main').classList.contains('Music')) {
      mount();
      getMusic();
    }
  }

  return {
    init,
  };
})();

export default Music;
