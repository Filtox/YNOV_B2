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
  const buttonDelete = document.createElement('button');
  liElement.innerText = character.firstName + ' ' + character.lastName;
  ulElement2.appendChild(liElement);
  ulElement2.appendChild(buttonDelete);
  
  function deleteinput() {
    liElement.parentElement.removeChild(liElement);
    buttonDelete.parentElement.removeChild(buttonDelete);
  }
  buttonDelete.addEventListener("click", deleteinput);
/*
  const buttonCheck = document.createElement('button');
  ulElement2.appendChild(buttonCheck);
  function checkEleves() {
    liElement.style.color = 'red';
  }
  buttonCheck.addEventListener("click", checkEleves);
*/

  var inputCheck = document.createElement('input');
  inputCheck.setAttribute("id", "check");
  document.getElementById('check').type = 'text';
  ulElement2.appendChild(inputCheck); 
})

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