function addMatchForm(team1, team2, score, date, bouttonText, action) {
    let form = document.createElement("form");
    let inputTeam1 = document.createElement("input");
    let inputTeam2 = document.createElement("input");
    let inputScoreTeam1 = document.createElement("input");
    let inputScoreTeam2 = document.createElement("input");
    let bouttonAdd = document.createElement("button");

    form.appendChild(inputTeam1);
    form.appendChild(inputScoreTeam1);
    form.appendChild(inputTeam2);
    form.appendChild(inputScoreTeam2);
    form.appendChild(bouttonAdd);

    inputTeam1.type = "text";
    inputTeam2.type = "text";
    inputScoreTeam1.type = "number";
    inputScoreTeam2.type = "number";

    inputTeam1.placeholder = "Team 1";
    inputTeam2.placeholder = "Team 2";
    inputScoreTeam1.placeholder = "Score Team 1";
    inputScoreTeam2.placeholder = "Score Team 2";

    inputTeam1.value = team1;
    inputTeam2.value = team2;
    inputScoreTeam1.value = score[0];
    inputScoreTeam2.value = score[1];
    bouttonAdd.innerText = bouttonText;
    bouttonAdd.addEventListener('click', (event) => {
        event.preventDefault();
        action({
            homeTeam: inputTeam1.value,
            visitorTeam: inputTeam2.value,
            score: [inputScoreTeam1.value, inputScoreTeam2.value],
            date: date == "" ? new Date() : date,
        });
    });
    return form;
};

function createMatch(matchData, showDate = false) {
    let divElement = document.createElement("div");
    let team1Element = document.createElement("p");
    let scoreElement = document.createElement("p");
    let team2Element = document.createElement("p");

    if (showDate) {
        let dateElement = document.createElement("p");
        dateElement.innerText = new Date(matchData.date).toLocaleDateString();
        divElement.appendChild(dateElement);
    }

    team1Element.innerText = matchData.homeTeam;
    scoreElement.innerText = matchData.score.join(" à ");
    team2Element.innerText = matchData.visitorTeam;

    divElement.appendChild(team1Element);
    divElement.appendChild(scoreElement);
    divElement.appendChild(team2Element);

    let btnElement = document.createElement('button');
    btnElement.innerText = "Supprimer ce match";
    btnElement.style.color = "red";
    btnElement.style.backgroundColor = "whitesmoke";
    btnElement.addEventListener("click", function () {
        api.deleteMatch(matchData.id);
    });
    divElement.appendChild(btnElement);


    let btnElement2 = document.createElement('button');
    btnElement2.innerText = "Afficher ce match";
    btnElement2.addEventListener("click", function () {
        let idMatch = matchData.id;
        app.innerHTML = "Id match: " + idMatch;
        api.getMatch(idMatch)
            .then((matchData) => {
                let matchElement = createMatch(matchData, true);
                app.appendChild(matchElement);
            });
    });
    divElement.appendChild(btnElement2);

    let btnElement3 = document.createElement('button');
    btnElement3.innerText = "Editer ce match";
    btnElement3.addEventListener('click', function () {
        let form = addMatchForm(
            matchData.homeTeam,
            matchData.visitorTeam,
            matchData.score,
            matchData.date,
            "Editer",
            function (newMatch) {
                api.updateMatch(matchData.id, newMatch).then(() => {
                    location.reload();
                });
            }
        );
        app.innerHTML = "";
        app.appendChild(form);
    });
    divElement.appendChild(btnElement3);

    return divElement;
};

function getMatch(offset) {
    return api.getAllMatches(offset)
        .then(json => {
            for (let match of json) {
                let matchElement = createMatch(match);
                app.appendChild(matchElement);
            };
            if(json.lenght < 10) {
                throw '';
            }
        }).then(() => {
            let matchPlus = document.createElement("button");
            matchPlus.innerText = "Plus";
            app.appendChild(matchPlus);
            matchPlus.addEventListener('click', () => {
                offset += 1;
                matchPlus.parentNode.removeChild(matchPlus);
                getMatch(offset);
            })
        }).catch(() => {void 0});
}