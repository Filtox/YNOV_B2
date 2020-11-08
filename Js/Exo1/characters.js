
class Person {
    constructor(firstName, lastName, birthDate) {
      this.firstName = firstName;
      this.lastName = lastName;
      this.birthDate = birthDate;
    }
  
    getFullName() {
      return this.firstName + ' ' + this.lastName;
    }
}
  
class Character extends Person {
    constructor(firstName, lastName, birthDate, movie) {
      super(firstName, lastName, birthDate);
      this.movie = movie;
    }
  
    getFullName() {
      return super.getFullName() + ' (' + this.movie + ')';
    }
}

const characters = [
    new Character('Bilbo', 'Baggins', new Date(1918, 0, 1), 'The Lord of the Rings'),
    new Character('Luke', 'Skywalker', new Date(2001, 0, 1), 'Star Wars'),
    new Character('Obi-wan', 'Kenobi', new Date(1967, 0, 1), 'Star Wars'),
    new Character('Anakin', 'Skywalker', new Date(1978, 0, 1), 'Star Wars'),
    new Character('Han', 'Solo', new Date(1986, 0, 1), 'Star Wars'),
    new Character('Maître', 'Yoda', new Date(1120, 0, 1), 'Star Wars')
];

const ulElement2 = document.querySelector('ul');

characters.forEach(character => {
  const liElement = document.createElement('li');
  liElement.innerText = character.firstName + ' ' + character.lastName;
  ulElement2.appendChild(liElement);
})

/*
function ajoutCharacter() {
  const inputName = document.getelementById('name').value;
  const inputPrenom = document.getelementById('prenom').value;
  const inputDate = document.getelementById('date').value;
  console.log(inputName);
  console.log(inputPrenom);
  console.log(inputDate);
}
*/

function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

/*
const oldestNames = characters
    .filter(character => character.birthDate.getFullYear() < 1980)
    .map(character => character.getFullName())
    .reduce((accumulator, name, index) => {
      if (!index) {
        return name;
      }
      return accumulator + ', ' + name;
}, '');

console.log(oldestNames);
*/
/*
const ulElement2 = document.querySelector('ul');

characterService.findAll().forEach(character => {
      const liElement = document.createElement('li');
      liElement.innerText = character.firstName + ' ' + character.lastName;
      ulElement2.appendChild(liElement);
});
*/

/*
const  buttonElement = document.querySelector('button');
buttonElement.addEventListener('click', () => {
    console.log('Salut');
});
*/

// sur chaque element, on obtient un bouton qui permet de supprimer la ligne
// bouton apparaitre age et disparaitre en cliquant une fois ou deux.

//faire disparaitre tableau de charactere et le mettre dans le fichier json.