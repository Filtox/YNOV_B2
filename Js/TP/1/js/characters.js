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

  //suppression
  const buttonDelete = document.createElement('button');
  ulElement2.appendChild(buttonDelete);
  function deleteinput() {
    liElement.parentElement.removeChild(liElement);
    buttonDelete.parentElement.removeChild(buttonDelete);
  }
  buttonDelete.addEventListener("click", deleteinput);

  //coche les élèves pour la présence en cours
  var inputCheck = document.createElement('input');
  inputCheck.setAttribute('type', 'checkbox');
  inputCheck.setAttribute('class', 'check');
  ulElement2.appendChild(inputCheck);
  inputCheck.addEventListener( 'change', function() {
    if(this.checked) {
        liElement.style.color ="green";
        liElement.style.textDecoration ="line-through";
    } else {
        liElement.style.color ="black";
        liElement.style.textDecoration ="none";
    }
  });
})

//fonction recherche
function search() { 
  let input = document.getElementById('searchbar').value 
  input=input.toLowerCase(); 
  let x = document.getElementsByTagName('li'); 
  let y = document.getElementsByTagName('button'); 
    
  for (i = 0; i < x.length; i++) {  
      if (!x[i].innerHTML.toLowerCase().includes(input)) { 
          x[i].style.display="none";
          y[i].style.display="none";
      } 
      else { 
          x[i].style.display="list-item";
          y[i].style.display="list-item";            
      } 
  }
}


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