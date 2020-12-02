let api = {
    getAllMatches(offset = 1) {
        return fetch(`https://js-ingesup-b2.herokuapp.com/matches?sort=-date&page=` + offset)
            .then(response => response.json())
    },

    getMatch(id) {
        return fetch('https://js-ingesup-b2.herokuapp.com/matches/' + id,
        ).then(response => response.json())
    },
    updateMatch(id, newMatchData) {
        return fetch(`https://js-ingesup-b2.herokuapp.com/matches/` + id, {
            method: 'PUT',
            body: JSON.stringify(newMatchData),
            headers: { 'content-type': 'application/json' }
        })
    },
    deleteMatch(id) {
        const url = `https://js-ingesup-b2.herokuapp.com/matches/` + id;
        return fetch(url, {
            method: 'DELETE',
        }).then(() => {
            location.reload();
        });
    },
    addMatch(newMatchData) {
        return fetch(`https://js-ingesup-b2.herokuapp.com/matches`, {
            method: 'POST',
            body: JSON.stringify(newMatchData),
            headers: { 'content-type': 'application/json' }
        })
    },
}

window.api = api;