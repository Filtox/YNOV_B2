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
  
console.log(characters);
  
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
/*
const ulElement2 = document.querySelector('ul');

characterService.findAll().forEach(character => {
      const liElement = document.createElement('li');
      liElement.innerText = character.firstName + ' ' + character.lastName;
      ulElement2.appendChild(liElement);
});
*/
const  buttonElement = document.querySelector('button');
buttonElement.addEventListener('click', () => {
    console.log('Salut');
});

// sur chaque element, on obtient un bouton qui permet de supprimer la ligne
// bouton apparaitre age et disparaitre en cliquant une fois ou deux.