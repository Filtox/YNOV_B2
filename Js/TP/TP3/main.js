let app = document.getElementById("app");
let offset = 1;

document.getElementById("VoirMatchBoutton").addEventListener('click', () => { location.reload(); });

document.getElementById("AjouterMatch").addEventListener('click', () => {
  let form = addMatchForm("", "", [], "", "add", function (newMatch) {
    api.addMatch(newMatch).then(() => {
      location.reload();
    });
  })
  app.innerHTML = "";
  app.appendChild(form);
});

getMatch(offset);