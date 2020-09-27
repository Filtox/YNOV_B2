'use strict';   //active le mode strict

// affiche dans la console
/* affiche dans la console
    test 1 2
*/
console.log('lol');

// let pour declarer une variable contenant un message
let message; 
message = "salut les B2";
console.log(message);
message = "ayiya";
console.log(message);

// le let messages dans le if n'a rien a voir avec le let messages en dessous
if (true) {
    let messages;
    messages = "yo les types";
    console.log(messages);
}

let messages = "ololol";
console.log(messages);


function logHello() {
    console.log("test fonction");
}
logHello();


// calcul
let x =0;
console.log(x);
x++;
console.log(x);
x = x + 1;
console.log(x);
++x;
console.log(x);