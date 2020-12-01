let app = document.getElementById("app");

const match = {
  homeTeam: 'Team #12',
  visitorTeam: 'Team #22',
  score: [1, 2],
  date: new Date(),
};

//api.addMatch(match);

//get
api.getAllMatches()
.then(json => {
  console.log(json);
  for(let match of json){
    console.log(match);
    let matchElement = createMatch(match);
    app.appendChild(matchElement);
  }
});

function createMatch(matchData){
  let divElement = document.createElement("div");
  let team1Element = document.createElement("p");
  let scoreElement = document.createElement("p");
  let team2Element = document.createElement("p");

  team1Element.innerText = matchData.homeTeam;
  scoreElement.innerText = matchData.score.join(" à ");
  team2Element.innerText = matchData.visitorTeam;

  divElement.appendChild(team1Element);
  divElement.appendChild(scoreElement);
  divElement.appendChild(team2Element);

  let btnElement = document.createElement('button');
  btnElement.innerText = "Delete ce match";
  btnElement.addEventListener("click", function(){
    api.deleteMatch(matchData.id);
  });
  divElement.appendChild(btnElement);

  return divElement;
};
