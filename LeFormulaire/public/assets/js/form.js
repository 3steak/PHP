console.log('hello');

// number 
let reNumber = new RegExp('[0-9]')

//  Mail 
let reMail = new RegExp('[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})');


// Sans caractère spéciaux
let reMinMaj = new RegExp("[a-zA-ZÀ-ÿ]");

// Code postal 
let rePostalCode = new RegExp('/^(?:(?:(?:0[1-9]|[1-8]\d|9[0-5])(?:\d{3})?)|97[1-8]|98[4-9]|2[abAB])$/gm');


let lastname = document.getElementById('lastname');
let firstname = document.getElementById('firstname');
let email = document.getElementById('email');
let postalcode = document.getElementById('postalcode');
let nativecountry = document.getElementById('nativeCountry');

console.log(nativecountry);

//  Display .help a l'entrée du password

