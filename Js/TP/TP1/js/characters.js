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

//fonction recherche
function search() { 
  let input = document.getElementById('searchbar').value 
  input=input.toLowerCase(); 
  let x = document.getElementsByTagName('li'); 
    
  for (i = 0; i < x.length; i++) {  
      if (!x[i].innerHTML.toLowerCase().includes(input)) { 
          x[i].style.display="none";
      } 
      else { 
          x[i].style.display="list-item";            
      } 
  }
}

// Créer un élément dans la liste
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("ajout").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("ajout").value = "";

  var spanClose = document.createElement("span");
  var txt = document.createTextNode("\u00D7");
  spanClose.className = "close";
  spanClose.appendChild(txt);
  li.appendChild(spanClose);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}

// Fermer
var myNodelist = document.getElementsByTagName("li");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var spanClose = document.createElement("span");
  var txt = document.createTextNode("\u00D7");
  spanClose.className = "close";
  spanClose.appendChild(txt);
  myNodelist[i].appendChild(spanClose);
}

// Fermer
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// check
var list = document.querySelector('ul');
list.addEventListener('click', function(checked) {
  if (checked.target.tagName === 'LI') {
    checked.target.classList.toggle('checked');
  }
}, false);