let api = {
    getAllMatches(offset = 0) {
        return fetch(`https://js-ingesup-b2.herokuapp.com/matches?sort=-date`)
            .then(response => response.json())
    },

    getMatch(id) { },
    updateMatch(id, newMatchData) { },
    deleteMatch(id) {
        const url = `https://js-ingesup-b2.herokuapp.com/matches/` + id;
        console.log(url);
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